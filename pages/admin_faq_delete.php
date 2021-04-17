<?php
 
use WebApp2\Database\{Database,FaqPDO};
require_once 'vendor/autoload.php';

if($_SESSION['user']->role !== "admin") {
    header("location: index.php?page=user_login");
}

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $dbcon = Database::getDb();

    $f = new FaqPDO();
    $faq = $f->deleteFaq($dbcon, $id);
    if($faq){
        //$deleteMsg = "Deleted successfully.";
        header("Location: index.php?page=admin_faq");
    }
    else {
        echo "Failed to delete.";
    }


}
