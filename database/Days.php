<?php


namespace WebApp2\Database;


class Days
{
    public function getAllDays($dbcon){
        $sql = "SELECT * FROM days";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $doctors = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $doctors;
    }

}