const sidebar = document.getElementById('sidebar');

const overlay = document.getElementById('overlay');

const menuBtn = document.getElementById('menuBtn');

menuBtn.addEventListener('click', () => {

    sidebar.style.left = "0";

    overlay.classList.remove("hidden");

});

overlay.addEventListener('click', () => {

    sidebar.style.left = "-100%";

    overlay.classList.add("hidden");

});