//FULL CALENDAR
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        themeSystem: 'bootstrap',
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