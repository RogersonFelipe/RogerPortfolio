import './bootstrap';
import './background';
import './filtro-skill';
import './github.js';

document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener("click", function (e) {
    const id = this.getAttribute("href");
    if (!id || id === "#") return;

    const target = document.querySelector(id);
    if (!target) return;

    e.preventDefault();

    const navbar = document.querySelector(".navbar");
    const offset = navbar ? navbar.offsetHeight : 0;

    const start = window.scrollY;
    const end =
      target.getBoundingClientRect().top + window.scrollY - offset;

    const duration = 700;
    let startTime = null;

    function easeInOut(t) {
      return t < 0.5
        ? 2 * t * t
        : 1 - Math.pow(-2 * t + 2, 2) / 2;
    }

    function animate(time) {
      if (!startTime) startTime = time;
      const elapsed = time - startTime;
      const progress = Math.min(elapsed / duration, 1);

      const eased = easeInOut(progress);
      window.scrollTo(0, start + (end - start) * eased);

      if (progress < 1) requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
  });
});
