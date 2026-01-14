document.addEventListener('DOMContentLoaded', () => {
    const input = document.querySelector('#skill-search');
    const cardsContainer = document.querySelector('#skills-cards');
    if (!input || !cardsContainer) return;

    const searchBox = input.closest('.box');
    const cards = Array.from(cardsContainer.querySelectorAll('.box'));

    const filterCards = () => {
        const q = input.value.trim().toLowerCase();

        searchBox.classList.toggle('open', q !== '' || document.activeElement === input);

        cards.forEach(card => {
            const text = (card.querySelector('p')?.textContent || '').toLowerCase();
            card.style.display = !q || text.includes(q) ? 'flex' : 'none';
        });
    };

    input.addEventListener('focus', filterCards);
    input.addEventListener('input', filterCards);

    input.addEventListener('blur', () => {
        setTimeout(() => {
            if (!input.value.trim()) searchBox.classList.remove('open');
        }, 0);
    });

    input.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            input.value = '';
            input.blur();
            filterCards();
        }
    });
});
