<?php

class AdminDashboard {

    public function getDoctorsAppointment ($dbcon, $newAppointments, $docId, $date, $time) {
        $doc = $newAppointments->getAppointmentsByDoctorTime($dbcon, $docId, $date, $time);
        return $doc;
    }

    //function for time format ex.13:00
    public function timeFormat($time) {
        $original_time = new DateTime($time);
        $formatted_time = date_format($original_time, 'H:i');
        return $formatted_time;
    }
}
