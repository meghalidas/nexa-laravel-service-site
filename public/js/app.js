document.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.desktop-nav');
    if (menu && nav) {
        menu.addEventListener('click', () => {
            nav.classList.toggle('mobile-open');
            menu.textContent = nav.classList.contains('mobile-open') ? '×' : '☰';
        });
    }
});
