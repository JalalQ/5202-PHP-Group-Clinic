<?php
use PHP\Classes\{Database,Faq};
require_once 'vendor/autoload.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $dbcon = Database::getDb();

    $f = new Faq();
    $faq = $f->deleteFaq($dbcon, $id);
    if($faq){
        //$deleteMsg = "Deleted successfully.";
        header("Location: index.php?page=admin_faq");
    }
    else {
        echo "Failed to delete.";
    }


}
