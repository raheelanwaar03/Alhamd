// Sidebar function

const sid_menu = document.querySelector("header .menu_btn i");
const sidebar = document.querySelector(".sidebar_sec .sidebar");
const xmark = document.querySelector(".sidebar_sec .sidebar .logo i");

const overlay = document.querySelector(".overlay");
console.log(sidebar);
sid_menu.addEventListener("click", function () {
  sidebar.classList.add("show");
  overlay.style.display = "block";
});

xmark.addEventListener("click", function () {
  sidebar.classList.remove("show");
  overlay.style.display = "none";
});