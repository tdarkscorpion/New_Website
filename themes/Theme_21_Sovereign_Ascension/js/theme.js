// ==========================================================================
// Theme 21: Weapons of War: Sovereign Ascension Interactive Engine
// Celestial Lightning, Spirit Motes, and Azure Arc Particles
// ==========================================================================

document.addEventListener('DOMContentLoaded', () => {
  initSovereignAtmosphere();
});

function initSovereignAtmosphere() {
  const canvas = document.getElementById('sovereign-canvas');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  let width = canvas.width = window.innerWidth;
  let height = canvas.height = window.innerHeight;

  let mouseX = -1000;
  let mouseY = -1000;

  window.addEventListener('resize', () => {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
  });

  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });

  window.addEventListener('mouseout', () => {
    mouseX = -1000;
    mouseY = -1000;
  });

  // Spirit Motes & Azure Essence Particles
  const particles = [];
  const particleCount = 55;
  const palette = [
    'rgba(0, 212, 255, ',    // Electric Azure
    'rgba(56, 189, 248, ',   // Sky Lightning
    'rgba(245, 194, 83, ',   // Sovereign Gold
    'rgba(255, 235, 160, '   // Luminous Gold
  ];

  for (let i = 0; i < particleCount; i++) {
    particles.push({
      x: Math.random() * width,
      y: Math.random() * height,
      size: Math.random() * 2.2 + 0.8,
      speedY: -(Math.random() * 0.5 + 0.2),
      speedX: (Math.random() - 0.5) * 0.4,
      color: palette[Math.floor(Math.random() * palette.length)],
      alpha: Math.random() * 0.7 + 0.2,
      pulseSpeed: Math.random() * 0.02 + 0.005,
      pulseOffset: Math.random() * Math.PI * 2
    });
  }

  // Occasional Celestial Lightning Arcs
  let lightningArcs = [];
  let nextLightningTime = Date.now() + 2500;

  function generateLightning() {
    const startX = Math.random() * width;
    const startY = Math.random() * (height * 0.35);
    const points = [{ x: startX, y: startY }];
    let curX = startX;
    let curY = startY;
    const segments = Math.floor(Math.random() * 6) + 4;

    for (let i = 0; i < segments; i++) {
      curX += (Math.random() - 0.5) * 55;
      curY += Math.random() * 35 + 10;
      points.push({ x: curX, y: curY });
    }

    lightningArcs.push({
      points: points,
      opacity: 0.85,
      width: Math.random() * 1.8 + 0.8
    });

    nextLightningTime = Date.now() + Math.random() * 4500 + 3000;
  }

  function render() {
    ctx.clearRect(0, 0, width, height);

    // 1. Render Spirit Particles
    particles.forEach(p => {
      p.y += p.speedY;
      p.x += p.speedX;

      // Mouse gentle repulsion
      const dx = mouseX - p.x;
      const dy = mouseY - p.y;
      const dist = Math.sqrt(dx * dx + dy * dy);
      if (dist < 100 && dist > 0) {
        const force = (100 - dist) / 100;
        p.x -= (dx / dist) * force * 1.5;
        p.y -= (dy / dist) * force * 1.5;
      }

      // Recycle when offscreen
      if (p.y < -10) {
        p.y = height + 10;
        p.x = Math.random() * width;
      }
      if (p.x < -10) p.x = width + 10;
      if (p.x > width + 10) p.x = -10;

      const currentAlpha = Math.max(0.1, Math.min(0.9, p.alpha + Math.sin(Date.now() * p.pulseSpeed + p.pulseOffset) * 0.25));

      ctx.beginPath();
      ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
      ctx.fillStyle = p.color + currentAlpha + ')';
      ctx.shadowBlur = 10;
      ctx.shadowColor = p.color + '0.9)';
      ctx.fill();
    });

    // 2. Spawn and Render Celestial Lightning
    if (Date.now() > nextLightningTime) {
      generateLightning();
    }

    for (let i = lightningArcs.length - 1; i >= 0; i--) {
      const arc = lightningArcs[i];
      arc.opacity -= 0.045;

      if (arc.opacity <= 0) {
        lightningArcs.splice(i, 1);
        continue;
      }

      ctx.beginPath();
      ctx.moveTo(arc.points[0].x, arc.points[0].y);
      for (let j = 1; j < arc.points.length; j++) {
        ctx.lineTo(arc.points[j].x, arc.points[j].y);
      }
      ctx.strokeStyle = `rgba(0, 212, 255, ${arc.opacity})`;
      ctx.lineWidth = arc.width;
      ctx.shadowBlur = 18;
      ctx.shadowColor = `rgba(56, 189, 248, ${arc.opacity})`;
      ctx.stroke();

      // Inner white lightning core
      ctx.beginPath();
      ctx.moveTo(arc.points[0].x, arc.points[0].y);
      for (let j = 1; j < arc.points.length; j++) {
        ctx.lineTo(arc.points[j].x, arc.points[j].y);
      }
      ctx.strokeStyle = `rgba(255, 255, 255, ${arc.opacity * 0.9})`;
      ctx.lineWidth = Math.max(0.6, arc.width * 0.4);
      ctx.stroke();
    }

    ctx.shadowBlur = 0;
    requestAnimationFrame(render);
  }

  requestAnimationFrame(render);
}
