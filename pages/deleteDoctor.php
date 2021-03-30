<?php
use PHP\classes\Database;
use PHP\classes\doctorCrud;

require_once 'vendor/autoload.php';

//
require_once 'classes/Database.php';
require_once 'classes/doctorCrud.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $dbcon = Database::getDb();

    $doctor_del = new doctorCrud();
    $count = $doctor_del->deleteDoctor($id, $dbcon);
    if($count){
        header('Location:  index.php?page=doctorAdmin');
    }
    else {
        echo "problem deleting";
    }


}