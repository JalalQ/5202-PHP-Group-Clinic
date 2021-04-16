<?php

namespace WebApp2\Database;

class ReviewsPDO
{
    //Gets the Average Review Rating based on a doctors ID.
    public function getAvgs($dbcon, $doctorID){

        $sql = "SELECT CAST(AVG(know) AS DECIMAL(3,2)) AS knowAvg, 
                       CAST(AVG(friendly) AS DECIMAL(3,2)) AS friendAvg, 
                       CAST(AVG(prof) AS DECIMAL(3,2)) AS profAvg,
                       COUNT(know) AS drReviews
                FROM reviews where doctorID = :doctorID";
        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':doctorID', $doctorID);
        $pst->execute();
        $reviews = $pst->fetch(\PDO::FETCH_OBJ);
        return $reviews;

    }

    public function insert($doctorID, $prof, $friendly, $know,  $db){
        $sql = "INSERT INTO reviews (doctorID, prof, friendly, know)
                VALUES (:doctorID, :prof, :friendly, :know)";

        $pst = $db->prepare($sql);

        $pst->bindParam(':doctorID', $doctorID);
        $pst->bindParam(':prof', $prof);
        $pst->bindParam(':friendly', $friendly);
        $pst->bindParam(':know', $know);

        $count = $pst->execute();
        return $count;

    }



}