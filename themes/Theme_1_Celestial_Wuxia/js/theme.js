// Theme 1: Celestial Wuxia Interactive Engine

document.addEventListener('DOMContentLoaded', () => {
  initParticles();
  initCounters();
});

// Floating Jade/Gold Particles
function initParticles() {
  const canvas = document.getElementById('particle-canvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');

  let width = canvas.width = window.innerWidth;
  let height = canvas.height = window.innerHeight;

  window.addEventListener('resize', () => {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
  });

  const particles = [];
  const particleCount = 45;
  const colors = ['rgba(245, 194, 83, ', 'rgba(43, 228, 161, ', 'rgba(255, 235, 180, '];

  for (let i = 0; i < particleCount; i++) {
    particles.push({
      x: Math.random() * width,
      y: Math.random() * height,
      size: Math.random() * 2.5 + 1,
      speedY: Math.random() * -0.6 - 0.2,
      speedX: Math.sin(Math.random() * Math.PI) * 0.4,
      color: colors[Math.floor(Math.random() * colors.length)],
      alpha: Math.random() * 0.6 + 0.2,
      fadeSpeed: Math.random() * 0.01 + 0.005
    });
  }

  function animate() {
    ctx.clearRect(0, 0, width, height);

    particles.forEach(p => {
      p.y += p.speedY;
      p.x += p.speedX;
      p.alpha += Math.sin(Date.now() * p.fadeSpeed) * 0.01;

      if (p.y < -10) {
        p.y = height + 10;
        p.x = Math.random() * width;
      }

      ctx.beginPath();
      ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
      ctx.fillStyle = p.color + Math.max(0.1, Math.min(0.8, p.alpha)) + ')';
      ctx.shadowBlur = 8;
      ctx.shadowColor = p.color + '0.8)';
      ctx.fill();
    });

    requestAnimationFrame(animate);
  }

  animate();
}

// Animate Stat Counters
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
