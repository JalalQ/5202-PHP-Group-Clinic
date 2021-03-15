//FUNCTION FOR TOGGLE MENU
function displayMenu() {
    let menuItem = document.getElementById("toggle-menu-item");
    menuItem.classList.toggle("show");
}

let btn = document.getElementById("btn-toggle");

btn.onclick = displayMenu;