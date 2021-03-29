<?php
namespace PHP\classes;

// This model file contains functions for the doctor interface which will be dislayed for
// the doctors, and can be viewed by the public without any log in authorization.

class doctorDisplay
{

    public function getAllDoctors($dbcon){


        $sql = "SELECT * FROM doctor";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $doctors = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $doctors;
    }
}