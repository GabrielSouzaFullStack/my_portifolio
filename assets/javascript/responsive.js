let btnOpen = document.getElementById("btn-menu");
let menuResponsive = document.getElementById("menu-responsivo");
let overlay = document.getElementById("overlay-menu");

btnOpen.addEventListener("click", () => {
  menuResponsive.classList.add("open-menu");
});

menuResponsive.addEventListener("click", () => {
  menuResponsive.classList.remove("open-menu");
});

overlay.addEventListener("click", () => {
  menuResponsive.classList.remove("open-menu");
});
