const menuBtn = document.getElementById('menuBtn');
const closeMenu = document.getElementById('closeMenu');
const mobileMenu = document.getElementById('mobileMenu');
const overlay = document.getElementById('overlay');

menuBtn.addEventListener('click', () => {
    mobileMenu.style.left = '0';
    overlay.classList.remove('hidden');
});

closeMenu.addEventListener('click', () => {
    mobileMenu.style.left = '-100%';
    overlay.classList.add('hidden');
});

overlay.addEventListener('click', () => {
    mobileMenu.style.left = '-100%';
    overlay.classList.add('hidden');
});
