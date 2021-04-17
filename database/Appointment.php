<?php


namespace WebApp2\Database;


class Appointment
{
    public function getAppointments($db){
        $query = "SELECT * from appointments";
        $pdostm = $db->prepare($query);
        $pdostm->execute();

        $results = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $results;
    }

    public function getAppointmentById($id, $db){
        $sql = "SELECT doctor.first_name, doctor.last_name, days.date, users.firstname, users.lastname, time_slot.time_slot, appointments.subject, appointments.message
                FROM appointments
                INNER JOIN doctor on doctor.id = appointments.doctor_id
                INNER JOIN days on days.id = appointments.day_id
                INNER JOIN users on users.id = appointments.patient_id
                INNER JOIN time_slot on time_slot.id = appointments.time_slot_id
                WHERE appointments.id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        return $pst->fetch(\PDO::FETCH_OBJ);
    }

    public function addAppointment($doctor, $patient, $day, $time, $subject, $message, $db) {
        // confirmation of appointment: 0 = false/not confirmed. 1 = true/confirmed
        $sql = "INSERT INTO appointments (doctor_id, patient_id, day_id, time_slot_id, subject, message, confirm)
                VALUES (:doctor, :patient, :day, :time, :subject, :message, 0)";
        $pst = $db->prepare($sql);

        $pst->bindParam(":doctor", $doctor);
        $pst->bindParam(":patient", $patient);
        $pst->bindParam(":day", $day);
        $pst->bindParam(":time", $time);
        $pst->bindParam(":subject", $subject);
        $pst->bindParam(":message", $message);

        $count = $pst->execute();
        return $count;
    }

    public function getPatientAppointment($db,$userid)
    {
        $sql = "SELECT days.date as date FROM days inner join appointments on days.id=appointments.day_id
where appointments.patient_id=:userid order by days.date asc";
        $pst = $db->prepare($sql);

        $pst->bindParam(":userid", $userid);
        $count = $pst->execute();
        return $pst->fetch(\PDO::FETCH_OBJ);
    }
}
