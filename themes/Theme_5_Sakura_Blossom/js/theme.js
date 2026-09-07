// Sakura Blossom Sanctuary Interactive Particle Engine (sakura-canvas)
(function() {
  document.addEventListener('DOMContentLoaded', initThemeEngine);
  if (document.readyState === 'interactive' || document.readyState === 'complete') {
    initThemeEngine();
  }

  let initialized = false;
  function initThemeEngine() {
    if (initialized) return;
    const canvas = document.getElementById('sakura-canvas');
    if (!canvas) return;
    initialized = true;

    const ctx = canvas.getContext('2d');
    let width = canvas.width = window.innerWidth;
    let height = canvas.height = window.innerHeight;

    window.addEventListener('resize', () => {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    });

    const colors = ["#ff758f", "#ffb3c1", "#ffffff", "#ff4d6d"];
    const isMobile = window.innerWidth < 768;
    const count = isMobile ? 24 : 50;
    const particles = [];

    // Generator logic based on effect archetype
    for (let i = 0; i < count; i++) {
      particles.push(createParticle(true));
    }

    function createParticle(randomStart) {
      return {
        x: Math.random() * width,
        y: randomStart ? Math.random() * height : (height + 10),
        size: Math.random() * 3 + 1.2,
        speedX: (Math.random() - 0.5) * 0.8,
        speedY: (Math.random() * -0.8) - 0.3,
        rotation: Math.random() * Math.PI * 2,
        rotSpeed: (Math.random() - 0.5) * 0.03,
        color: colors[Math.floor(Math.random() * colors.length)],
        alpha: Math.random() * 0.7 + 0.2,
        life: Math.random() * 100
      };
    }

    function animate() {
      ctx.clearRect(0, 0, width, height);

      for (let i = 0; i < particles.length; i++) {
        const p = particles[i];
        p.life += 0.5;
        p.rotation += p.rotSpeed;

        // Effect-specific movement
        p.y += p.speedY; p.x += p.speedX + Math.sin(p.life * 0.03) * 0.5;
        
        
        

        // Wrap around boundaries
        if (p.y < -20 || p.y > height + 20 || p.x < -20 || p.x > width + 20) {
          particles[i] = createParticle(false);
          continue;
        }

        ctx.save();
        ctx.translate(p.x, p.y);
        ctx.rotate(p.rotation);
        ctx.globalAlpha = Math.max(0.1, Math.min(0.85, p.alpha));
        ctx.fillStyle = p.color;
        ctx.shadowBlur = 10;
        ctx.shadowColor = p.color;

        // Sakura petal shape
        ctx.beginPath();
        ctx.ellipse(0, 0, p.size * 2, p.size, 0, 0, Math.PI * 2);
        ctx.fill();
        
        

        ctx.restore();
      }

      requestAnimationFrame(animate);
    }

    animate();
  }
})();
