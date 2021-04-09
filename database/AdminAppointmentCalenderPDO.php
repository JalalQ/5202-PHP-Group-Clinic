<?php
namespace WebApp2\Database;
class AdminAppointmentCalenderPDO {

    //get all appointments for weekly calendar
    public function getAppointmentsForWeeklyCalendar($dbcon) {

        $query = "SELECT appointments.id, appointments.date, appointments.time, users.firstname, users.lastname FROM appointments, users WHERE appointments.recipient_id = users.id";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $appointments = $pdostm->fetchAll(\PDO::FETCH_ASSOC);
        return $appointments;
    }

    //get all doctors
    public function getAllDoctors($dbcon){
        $sql = "SELECT * FROM doctor";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $doctors = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $doctors;
    }

    //get appointments by doctor and time
    public function getAppointmentsByDoctorTime($dbcon, $doctorId, $date, $time){
        $query = "SELECT appointments.id, appointments.date, appointments.time, patients.firstname, patients.lastname FROM appointments 
                      LEFT JOIN doctor ON recipient_id = doctor.fk_doctor_user_id 
                      LEFT JOIN patients ON requester_id = patients.fk_patient_user_id 
                      WHERE recipient_id = :doctor 
                        AND appointments.date = :date 
                        AND appointments.time = :time";
        $pdostm = $dbcon->prepare($query);
        $pdostm->bindParam(':doctor', $doctorId);
        $pdostm->bindParam(':date', $date);
        $pdostm->bindParam(':time', $time);
        $pdostm->execute();

        $appointments = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $appointments;
    }

    //get all appointments on the day
    public function getAllAppointmentsToday($dbcon) {
        $query = "SELECT * FROM appointments WHERE date = NOW()";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $apps = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $apps;
    }

}
