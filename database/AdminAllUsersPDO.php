<?php
namespace WebApp2\Database;

class AdminAllUsersPDO {

    /* PATIENTS */
    //get all patients
    public function getPatients($dbcon) {

        $query = "SELECT users.id, users.firstname, users.lastname, users.username, users.email  FROM users, user_roles 
                    WHERE users.user_role_id = user_roles.id 
                      AND user_roles.type = 'patient'";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $patiens = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $patiens;
    }

    /* ADMINS */
    //get all admins
    public function getAdmins($dbcon) {

        $query = "SELECT users.id, users.firstname, users.lastname, users.username, users.email FROM users, user_roles 
                    WHERE users.user_role_id = user_roles.id 
                      AND user_roles.type = 'admin'";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $admins = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $admins;
    }

    //get any user by ID
    public function getUserById($dbcon, $id) {

        $query = "SELECT * FROM users, user_roles 
                    WHERE users.user_role_id = user_roles.id 
                      AND users.id = :id";
        $pdostm = $dbcon->prepare($query);
        $pdostm->bindParam(':id', $id);
        $pdostm->execute();

        $patient = $pdostm->fetch(\PDO::FETCH_OBJ);
        return $patient;
    }

    //Update any users in user table
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

    //Delete any users in user table
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
