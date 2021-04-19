<?php
namespace WebApp2\Database;
class AdminAppointmentPDO {

    //get all appointments information
    public function getAllAppointmentsInfo($dbcon){
        $query = "SELECT appointments.id, doctor.first_name, doctor.last_name, patients.firstname, patients.lastname, patients.email, days.date, time_slot.time_slot FROM appointments, doctor, patients, time_slot, days 
                    WHERE appointments.doctor_id = doctor.id 
                      AND appointments.patient_id = patients.id 
                      AND appointments.day_id = days.id 
                      AND appointments.time_slot_id = time_slot.id ";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $appointments = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $appointments;
    }

    //get appointments by doctor and time
    public function getAppointmentsByDoctorTime($dbcon, $doctorId, $date, $time){
        $query = "SELECT appointments.id, patients.firstname, patients.lastname, days.date, time_slot.time_slot FROM appointments
                    JOIN doctor ON appointments.doctor_id = doctor.id 
                    JOIN patients ON appointments.patient_id = patients.id 
                    JOIN days ON appointments.day_id = days.id 
                    JOIN time_slot ON appointments.time_slot_id = time_slot.id 
                    WHERE appointments.doctor_id = :doctor 
                        AND days.date = :date 
                        AND time_slot.time_slot = :time";
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
        $query = "SELECT * FROM appointments, days 
                    WHERE appointments.day_id = days.id AND days.date = NOW()";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $apps = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $apps;
    }

    //get all appointments on the specific date with doctor and patient table
    public function getAllAppointmentsTomorrow($dbcon, $day) {
        $query = "SELECT appointments.id, doctor.first_name, doctor.last_name, patients.firstname, patients.lastname, patients.email, days.date, time_slot.time_slot FROM appointments
                    JOIN doctor ON appointments.doctor_id = doctor.id 
                    JOIN patients ON appointments.patient_id = patients.id 
                    JOIN days ON appointments.day_id = days.id 
                    JOIN time_slot ON appointments.time_slot_id = time_slot.id 
                   	WHERE days.date = :day";
        $pdostm = $dbcon->prepare($query);
        $pdostm->bindParam(':day', $day);
        $pdostm->execute();

        $apps = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $apps;
    }


    //get all time slots
    public function getAllTimeslots($dbcon){
        $query = "SELECT * FROM time_slot";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $times = $pdostm->fetchAll(\PDO::FETCH_ASSOC);
        return $times;
    }

}
