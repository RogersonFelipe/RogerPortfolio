document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.backgroud-effect');
    if (!container) return;

    const icons = [
        new URL('../svg/javascript.svg', import.meta.url).href,
        new URL('../svg/typescript.svg', import.meta.url).href,
        new URL('../svg/php.svg', import.meta.url).href,
        new URL('../svg/css.svg', import.meta.url).href,
        new URL('../svg/docker.svg', import.meta.url).href,
        new URL('../svg/react.svg', import.meta.url).href,
        new URL('../svg/bootstrap.svg', import.meta.url).href,
        new URL('../svg/angular.svg', import.meta.url).href,
    ];

    // shuffle icons so positions vary
    for (let i = icons.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [icons[i], icons[j]] = [icons[j], icons[i]];
    }

    const profileEl = document.querySelector('#sobre .perfil .img-content');
    const placed = [];

    function getContainerRect() {
        const rect = container.getBoundingClientRect();
        const width = rect.width || container.clientWidth || window.innerWidth;
        const height = rect.height || container.clientHeight || 300;
        return { left: rect.left, top: rect.top, width, height };
    }

    function canPlaceAt(x, y, size, spacingFactor, profileRect, containerRect) {
        for (let p of placed) {
            const dx = p.x - x;
            const dy = p.y - y;
            const dist = Math.hypot(dx, dy);
            const minAllowed = (p.size + size) * spacingFactor;
            if (dist < minAllowed) return false;
        }
        if (profileRect) {
            const relProfileX = (profileRect.left - containerRect.left) + profileRect.width / 2;
            const relProfileY = (profileRect.top - containerRect.top) + profileRect.height / 2;
            const profileMinDist = (Math.max(profileRect.width, profileRect.height) / 2) + size;
            if (Math.hypot(relProfileX - x, relProfileY - y) < profileMinDist) return false;
        }
        return true;
    }

    function placeIcon(src) {
        const img = document.createElement('img');
        img.src = src;
        img.className = 'bg-icon';

        const baseSize = 36 + Math.floor(Math.random() * 64);
        const sizeSteps = [1, 0.85, 0.7, 0.6];
        const spacingSteps = [1.6, 1.35, 1.1, 0.95];

        const containerRect = getContainerRect();
        const profileRect = profileEl ? profileEl.getBoundingClientRect() : null;

        let placedSuccess = false;
        for (let sFactor = 0; sFactor < sizeSteps.length && !placedSuccess; sFactor++) {
            const size = Math.max(18, Math.round(baseSize * sizeSteps[sFactor]));
            const half = size / 2;
            const minLeftPx = half;
            const maxLeftPx = Math.max(half, containerRect.width - half);
            const minTopPx = half;
            const maxTopPx = Math.max(half, containerRect.height - half);
            const spacingFactor = spacingSteps[sFactor];

            const attempts = 250;
            for (let attempt = 0; attempt < attempts; attempt++) {
                const lx = minLeftPx + Math.random() * (maxLeftPx - minLeftPx);
                const ty = minTopPx + Math.random() * (maxTopPx - minTopPx);

                if (!canPlaceAt(lx, ty, size, spacingFactor, profileRect, containerRect)) continue;

                const leftPct = (lx / containerRect.width) * 100;
                const topPct = (ty / containerRect.height) * 100;
                img.style.width = `${size}px`;
                img.style.height = 'auto';
                img.style.left = `${Math.min(96, Math.max(4, leftPct))}%`;
                img.style.top = `${Math.min(96, Math.max(4, topPct))}%`;
                img.style.animationDuration = `${8 + Math.random() * 12}s`;
                img.style.animationDelay = `${Math.random() * 4}s`;
                img.style.opacity = `${0.85 - Math.random() * 0.45}`;
                placed.push({ x: lx, y: ty, size });
                container.appendChild(img);
                placedSuccess = true;
                break;
            }
        }

        if (!placedSuccess) {
            const fallbackSize = Math.max(18, Math.round(baseSize * 0.5));
            const half = fallbackSize / 2;
            const containerW = containerRect.width, containerH = containerRect.height;
            const cols = Math.max(3, Math.floor(containerW / (fallbackSize * 1.8)));
            const rows = Math.max(2, Math.floor(containerH / (fallbackSize * 1.8)));
            let found = false;
            for (let col = 0; col < cols && !found; col++) {
                for (let row = 0; row < rows && !found; row++) {
                    const lx = half + (col + 0.5) * (containerW - fallbackSize) / cols;
                    const ty = half + (row + 0.5) * (containerH - fallbackSize) / rows;
                    if (!canPlaceAt(lx, ty, fallbackSize, 0.9, profileRect, containerRect)) continue;
                    const leftPct = (lx / containerRect.width) * 100;
                    const topPct = (ty / containerRect.height) * 100;
                    img.style.width = `${fallbackSize}px`;
                    img.style.height = 'auto';
                    img.style.left = `${Math.min(96, Math.max(4, leftPct))}%`;
                    img.style.top = `${Math.min(96, Math.max(4, topPct))}%`;
                    img.style.animationDuration = `${8 + Math.random() * 12}s`;
                    img.style.animationDelay = `${Math.random() * 4}s`;
                    img.style.opacity = `${0.85 - Math.random() * 0.45}`;
                    placed.push({ x: lx, y: ty, size: fallbackSize });
                    container.appendChild(img);
                    found = true;
                }
            }
            if (!found) {
                img.style.width = `${fallbackSize}px`;
                img.style.height = 'auto';
                img.style.left = `50%`;
                img.style.top = `50%`;
                img.style.animationDuration = `${8 + Math.random() * 12}s`;
                img.style.animationDelay = `${Math.random() * 4}s`;
                img.style.opacity = `0.6`;
                container.appendChild(img);
            }
        }
    }

    icons.forEach(src => placeIcon(src));
});