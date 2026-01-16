document.addEventListener('DOMContentLoaded', () => {
  const habilidade = document.getElementById('habilidade');
  const input = document.getElementById('skill-search');
  const box = input?.closest('.box');

  if (!habilidade || !input || !box) return;

  const isMobile = () => window.matchMedia('(max-width: 576px)').matches;

  if (!isMobile()) return;

  function open() {
    habilidade.classList.remove('mobile-closing');
    habilidade.classList.add('mobile-expanded');
    input.focus();
  }

  function close() {
    habilidade.classList.remove('mobile-expanded');
    habilidade.classList.add('mobile-closing');

    setTimeout(() => {
      habilidade.classList.remove('mobile-closing');
      input.value = '';
    }, 300);
  }

  box.addEventListener('click', () => {
    if (!habilidade.classList.contains('mobile-expanded')) {
      open();
    }
  });

  input.addEventListener('blur', () => {
    if (!input.value.trim()) {
      close();
    }
  });
});
