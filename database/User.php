<?php


namespace WebApp2\Database;

class User
{
    public function addUser($fname, $lname, $username, $email, $password, $db) {

        $newPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (firstname, lastname, username, password, email, user_role_id)
                VALUES (:firstname, :lastname, :username, :password, :email, 2)";
        $pst = $db->prepare($sql);

        $pst->bindParam(":firstname", $fname);
        $pst->bindParam(":lastname", $lname);
        $pst->bindParam(":username", $username);
        $pst->bindParam(":password", $newPassword);
        $pst->bindParam(":email", $email);

        $count = $pst->execute();
        return $count;
    }

    public function deleteUser($id, $db){

        $sql = "DELETE FROM users WHERE id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;

    }

}