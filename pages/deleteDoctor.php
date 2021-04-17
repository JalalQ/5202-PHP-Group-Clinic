<?php
use WebApp2\Database\Database;
use WebApp2\Database\DoctorPDO;

require_once 'vendor/autoload.php';

if($_SESSION['user']->role !== "admin") {
    header("Location: ./index.php?page=error");
}

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $dbcon = Database::getDb();

    $doctor_del = new DoctorPDO();
    $count = $doctor_del->deleteDoctor($id, $dbcon);
    if($count){
        header('Location:  index.php?page=doctorAdmin');
    }
    else {
        echo "problem deleting";
    }


}