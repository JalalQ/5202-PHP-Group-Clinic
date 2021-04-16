<?php


namespace WebApp2\Database;


class Time_Slots
{

    public function getTimeSlots($dbcon){
        $sql = "SELECT * FROM time_slot";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $slots = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $slots;
    }

    public function getTimebyId($dbcon, $id){
        $sql = "SELECT * FROM time_slot where id = :id";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->bindParam(':id', $id);
        $pdostm->execute();
        $slots = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $slots;
    }
}