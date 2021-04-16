//RUN PHP SCRIPT WHEN A BUTTON IS CLICKED
$(document).ready(function(){
    $("#reminder").click(function(){
        alert("Reminder sent.");
        $.post("index.php?page=appointment_reminder");
        return false;
    });
});