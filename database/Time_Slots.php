<?php


namespace WebApp2\Database;


class Time_Slots
{

    public function getTimeSlots($dbcon){
        $sql = "SELECT * FROM time_slot";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $doctors = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $doctors;
    }
}