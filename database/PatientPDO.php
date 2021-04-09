<?php
namespace WebApp2\Database;

class PatientPDO
{
    private $dbcon;

    function __construct()
    {
        $this->dbcon = Database::getDb();
    }

    public function addPatient($firstname, $lastname, $username, $password, $email, $user_role_id)
    {
        $sql = "INSERT INTO users (firstname, lastname, username, password, email, user_role_id) 
              VALUES (:firstname, :lastname, :username, :password, :email, :user_role_id) ";
        $pst = $this->dbcon->prepare($sql);

        $pst->bindParam(':firstname', $firstname);
        $pst->bindParam(':lastname', $lastname);
        $pst->bindParam(':username', $username);
        $pst->bindParam(':password', $password);
        $pst->bindParam(':email', $email);
        $pst->bindParam(':user_role_id', $user_role_id);

        $count = $pst->execute();
        return $count;
    }

    public function usernameExists($username)
    {

        $sql = "SELECT * from users where username = :username";
        $pst = $this->dbcon->prepare($sql);

        $pst->bindParam(':username', $username);
        //execute returns 1 if successful and 0 if unsuccessful
        $isSuccessful = $pst->execute();
        if ($pst->rowCount()>0){
            return true;
        }
//        $results = $pst->rowCount()>0;
//
//        echo $pst->rowCount() . '</br>';
//        echo "results:" . $results ."</br>";
        return false;
    }

    //isuserExist
    public function isUserExists($username, $password)
    {
        $sql = "SELECT * from users where username = :username";
        $pst = $this->dbcon->prepare($sql);

        $pst->bindParam(':username', $username);
        if ($pst->execute()) {
            $results = $pst->fetch(\PDO::FETCH_OBJ);
            if (password_verify($password, $results[0]->password)) {

                return true;

            }
        }
        return false;
    }

}

?>