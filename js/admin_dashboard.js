//FUNCTION FOR SIDE BAR MENU
function displaySidebar() {
    let sidebarNav = document.getElementById("sidebar_nav");
    sidebarNav.classList.toggle("d-block");
}

let sidebarNavBtn = document.getElementById("sidebar_nav_btn");
sidebarNavBtn.onclick = displaySidebar;


//FUNCTION FOR TOGGLE MENU INSIDE OF SIDE BAR
function displayPageMenu() {
    let pageMenuItem = document.getElementById("sidebar_toggle_menu");
    pageMenuItem.classList.toggle("d-block");
}

let sidebarToggleBtn = document.getElementById("sidebar_toggle_btn");
sidebarToggleBtn.onclick = displayPageMenu;

//RUN PHP SCRIPT WHEN A BUTTON IS CLICKED
$(document).ready(function(){
    $("#reminder").click(function(){
        alert("Reminder sent.");
        $.post("index.php?page=appointment_reminder");
        return false;
    });
});