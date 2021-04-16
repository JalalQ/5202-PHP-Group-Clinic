<?php
namespace WebApp2\Database;

class AdminAllUsersPDO {

    /* PATIENTS */
    //get all patients
    public function getPatients($dbcon) {

        $query = "SELECT * FROM users WHERE user_role_id = 1";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $patiens = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $patiens;
    }

    //get a patient by id
    public function getPatientById($dbcon, $id) {

        $query = "SELECT * FROM users WHERE user_role_id = 1 AND id = :id";
        $pdostm = $dbcon->prepare($query);
        $pdostm->bindParam(':id', $id);
        $pdostm->execute();

        $patient = $pdostm->fetch(\PDO::FETCH_OBJ);
        return $patient;
    }

    /* USERS */
    //get all users
    public function getUsers($dbcon) {

        $query = "SELECT * FROM users WHERE user_role_id = 4";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $users = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $users;
    }

    /* ADMINS */
    //get all admins
    public function getAdmins($dbcon) {

        $query = "SELECT * FROM users WHERE user_role_id = 2";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $admins = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $admins;
    }

    //get an admin by id
    public function getAdminById($dbcon, $id) {

        $query = "SELECT * FROM users WHERE user_role_id = 2 AND id = :id";
        $pdostm = $dbcon->prepare($query);
        $pdostm->bindParam(':id', $id);
        $pdostm->execute();

        $admin = $pdostm->fetch(\PDO::FETCH_OBJ);
        return $admin;
    }

    //Update all users in user table
    public function updateUser($dbcon, $id, $fname, $lname, $username, $email, $role)
    {
        $query = "UPDATE users SET firstname = :fname, lastname = :lname, username = :username, email = :email, user_role_id = :role WHERE id = :id";
        ;
        $pdostm = $dbcon->prepare($query);

        $pdostm->bindParam(':fname', $fname);
        $pdostm->bindParam(':lname', $lname);
        $pdostm->bindParam(':username', $username);
        $pdostm->bindParam(':email', $email);
        $pdostm->bindParam(':role', $role);
        $pdostm->bindParam(':id', $id);

        $patient = $pdostm->execute();
        return $patient;
    }

    //Delete all users in user table
    public function deleteUser($dbcon, $id)
    {
        $query = "DELETE FROM users WHERE id = :id";

        $pdostm = $dbcon->prepare($query);
        $pdostm->bindParam(':id', $id);
        $faq = $pdostm->execute();
        return $faq;
    }

    //get user role
    public function getRoles($dbcon) {

        $query = "SELECT * FROM user_roles";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $roles = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $roles;
    }
}
