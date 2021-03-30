<?php

namespace PHP\Classes;

class doctorCrud
{
    //the View Operation
    public function getdoctorById($id, $dbcon){
        $sql = "SELECT * FROM doctor where id = :id";
        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();

        $doctor = $pst->fetch(\PDO::FETCH_OBJ);
        return $doctor;
    }

    //the update operation
    public function updateDoctor($id, $first_name, $last_name, $cpso_reg, $email, $education, $expertise, $biography, $personal, $db){

        $sql = "Update doctor
                set first_name = :first_name,
                last_name = :last_name,
                cpso_reg = :cpso_reg,
                email = :email,
                education = :education,
                expertise = :expertise,
                biography = :biography,
                personal = :personal
                WHERE id = :id
        ";

        $pst =  $db->prepare($sql);

        $pst->bindParam(':id', $id);
        $pst->bindParam(':first_name', $first_name);
        $pst->bindParam(':last_name', $last_name);
        $pst->bindParam(':cpso_reg', $cpso_reg);
        $pst->bindParam(':email', $email);
        $pst->bindParam(':education', $education);
        $pst->bindParam(':expertise', $expertise);
        $pst->bindParam(':biography', $biography);
        $pst->bindParam(':personal', $personal);


        $count = $pst->execute();

        return $count;
    }


    public function deleteDoctor($id, $db){
        $sql = "DELETE FROM doctor WHERE id = :id";

        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;

    }


    public function addDoctor($first_name, $last_name, $cpso_reg, $email, $education, $expertise, $biography, $personal, $db)
    {
        $sql = "INSERT INTO doctor (first_name, last_name, cpso_reg, email, education, expertise, biography, personal)
              VALUES (:first_name, :last_name, :cpso_reg, :email, :education, :expertise, :biography, :personal) ";
        $pst = $db->prepare($sql);
        
        $pst->bindParam(':first_name', $first_name);
        $pst->bindParam(':last_name', $last_name);
        $pst->bindParam(':cpso_reg', $cpso_reg);
        $pst->bindParam(':email', $email);
        $pst->bindParam(':education', $education);
        $pst->bindParam(':expertise', $expertise);
        $pst->bindParam(':biography', $biography);
        $pst->bindParam(':personal', $personal);

        $count = $pst->execute();
        return $count;
    }


}