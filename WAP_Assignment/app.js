const opclMenu = document.querySelector(".menuContainer");
const translateMenu = document.querySelector(".navContainer");


opclMenu.addEventListener("click", function () {
    opclMenu.classList.toggle("change");
    translateMenu.classList.toggle("move");
});