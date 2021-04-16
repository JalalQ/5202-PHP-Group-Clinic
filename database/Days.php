<?php


namespace WebApp2\Database;


class Days
{
    public function getAllDays($dbcon){
        $sql = "SELECT * FROM days";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();
        $days = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $days;
    }

    public function getDaysById($dbcon, $id){
        $sql = "SELECT * FROM days where id = :id";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->bindParam(':id', $id);
        $pdostm->execute();
        $days = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $days;
    }

}