// Theme 2: Infernal Nether Engine - Rising Ember Particles

document.addEventListener('DOMContentLoaded', () => {
  initEmbers();
});

function initEmbers() {
  const canvas = document.getElementById('ember-canvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');

  let width = canvas.width = window.innerWidth;
  let height = canvas.height = window.innerHeight;

  window.addEventListener('resize', () => {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
  });

  const embers = [];
  const emberCount = 55;
  const colors = ['rgba(229, 56, 59, ', 'rgba(247, 127, 0, ', 'rgba(255, 183, 3, '];

  for (let i = 0; i < emberCount; i++) {
    embers.push({
      x: Math.random() * width,
      y: height + Math.random() * 100,
      size: Math.random() * 2.5 + 1,
      speedY: Math.random() * -1.5 - 0.5,
      speedX: (Math.random() - 0.5) * 0.8,
      color: colors[Math.floor(Math.random() * colors.length)],
      alpha: Math.random() * 0.7 + 0.3,
      decay: Math.random() * 0.006 + 0.002
    });
  }

  function animate() {
    ctx.clearRect(0, 0, width, height);

    embers.forEach(e => {
      e.y += e.speedY;
      e.x += e.speedX + Math.sin(e.y * 0.02) * 0.5;
      e.alpha -= e.decay;

      if (e.alpha <= 0 || e.y < -10) {
        e.y = height + 10;
        e.x = Math.random() * width;
        e.alpha = Math.random() * 0.7 + 0.3;
      }

      ctx.beginPath();
      ctx.arc(e.x, e.y, e.size, 0, Math.PI * 2);
      ctx.fillStyle = e.color + e.alpha + ')';
      ctx.shadowBlur = 10;
      ctx.shadowColor = e.color + '0.9)';
      ctx.fill();
    });

    requestAnimationFrame(animate);
  }

  animate();
}
