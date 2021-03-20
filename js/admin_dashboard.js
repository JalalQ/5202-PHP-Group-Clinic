//FUNCTION FOR TOGGLE MENU
function displayMenu() {
    let menuItem = document.getElementById("toggle-menu-item");
    menuItem.classList.toggle("show");
}

let btn = document.getElementById("btn-toggle");
btn.onclick = displayMenu;

//FUNCTION TO OUTPUT MESSAGE FOR HELPDESK
function displayHelpMsg() {
    let helpMsg = document.getElementById("helpMsg");
    helpMsg.classList.toggle("d-block");
}

let link1 = document.getElementById("link1");
link1.onclick = displayHelpMsg;