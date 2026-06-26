const menuBtn = document.getElementById('menuBtn');
const closeMenu = document.getElementById('closeMenu');
const mobileMenu = document.getElementById('mobileMenu');
const overlay = document.getElementById('overlay');
const userBtn = document.getElementById("userBtn");
const userDropdown = document.getElementById("userDropdown");
console.log("userBtn:", userBtn);
console.log("userDropdown:", userDropdown);


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


if (userBtn) {

    userBtn.addEventListener("click", (e) => {

        e.stopPropagation();
        userDropdown.classList.toggle("hidden");

    });

    document.addEventListener("click", () => {

        userDropdown.classList.add("hidden");

    });

    userDropdown.addEventListener("click", (e) => {

        e.stopPropagation();

    });

}