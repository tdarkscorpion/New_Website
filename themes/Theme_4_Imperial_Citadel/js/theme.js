// Theme 4: Imperial Citadel Engine - Falling Gold Dust & Crimson Sparks

document.addEventListener('DOMContentLoaded', () => {
  initCitadelParticles();
  initCounters();
});

function initCitadelParticles() {
  const canvas = document.getElementById('citadel-canvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');

  let width  = canvas.width  = window.innerWidth;
  let height = canvas.height = window.innerHeight;

  window.addEventListener('resize', () => {
    width  = canvas.width  = window.innerWidth;
    height = canvas.height = window.innerHeight;
  });

  const particles = [];
  const count = 60;

  // Gold dust (majority) + crimson sparks (minority)
  const types = [
    { color: 'rgba(212, 175, 55, ',  size: [1, 2.5], speedY: [0.3, 1.0], drift: 0.5, glow: 'rgba(212, 175, 55, 0.7)' },
    { color: 'rgba(247, 224, 137, ', size: [1, 1.8], speedY: [0.4, 1.2], drift: 0.3, glow: 'rgba(247, 224, 137, 0.8)' },
    { color: 'rgba(153, 0, 0, ',     size: [1, 2.0], speedY: [0.5, 1.5], drift: 0.7, glow: 'rgba(220, 38, 38, 0.6)' },
  ];

  for (let i = 0; i < count; i++) {
    const t = types[i < 40 ? (i % 2) : 2]; // 40 gold dust, 20 crimson sparks
    particles.push({
      x:      Math.random() * width,
      y:      Math.random() * height,
      size:   Math.random() * (t.size[1] - t.size[0]) + t.size[0],
      speedY: Math.random() * (t.speedY[1] - t.speedY[0]) + t.speedY[0],
      drift:  (Math.random() - 0.5) * t.drift,
      angle:  Math.random() * Math.PI * 2,
      spin:   (Math.random() - 0.5) * 0.04,
      color:  t.color,
      glow:   t.glow,
      alpha:  Math.random() * 0.5 + 0.2,
    });
  }

  function animate() {
    ctx.clearRect(0, 0, width, height);

    particles.forEach(p => {
      p.y     += p.speedY;
      p.x     += p.drift + Math.sin(p.angle) * 0.4;
      p.angle += p.spin;

      // Twinkle
      p.alpha = 0.2 + Math.abs(Math.sin(Date.now() * 0.001 + p.angle)) * 0.5;

      if (p.y > height + 10) {
        p.y = -10;
        p.x = Math.random() * width;
      }

      ctx.save();
      ctx.beginPath();
      // Draw as a small diamond/star for gold dust feel
      ctx.translate(p.x, p.y);
      ctx.rotate(p.angle);
      ctx.scale(p.size, p.size);
      ctx.moveTo(0, -1);
      ctx.lineTo(0.4, 0);
      ctx.lineTo(0, 1);
      ctx.lineTo(-0.4, 0);
      ctx.closePath();
      ctx.fillStyle = p.color + p.alpha + ')';
      ctx.shadowBlur   = 10;
      ctx.shadowColor  = p.glow;
      ctx.fill();
      ctx.restore();
    });

    requestAnimationFrame(animate);
  }

  animate();
}

// Animate stat counters on page load
function initCounters() {
  const counters = document.querySelectorAll('.stat-value');
  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target') || parseInt(counter.innerText);
    if (!target) return;
    let count = 0;
    const speed = target / 50;
    const updateCount = () => {
      count += speed;
      if (count < target) {
        counter.innerText = Math.ceil(count).toLocaleString();
        setTimeout(updateCount, 25);
      } else {
        counter.innerText = target.toLocaleString();
      }
    };
    updateCount();
  });
}
