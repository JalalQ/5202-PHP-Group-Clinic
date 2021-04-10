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

//FULL CALENDAR
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        headerToolbar: {
            left: 'prev',
            center: 'title',
            right: 'today next'
        },
        slotMinTime: '10:00:00',
        slotMaxTime: '20:00:00',
        slotEventOverlap: false,
        expandRows: true,
        events: 'index.php?page=admin_dashboard_appointments_calendar',
        eventClick: function(event) {
            if (event.url) {
                window.open(event.url, "_blank");
                return false;
        }}
    });
    calendar.render();
});