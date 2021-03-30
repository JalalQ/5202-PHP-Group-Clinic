<?php
use WebApp2\Database\{Database,FaqPDO};
require_once 'vendor/autoload.php';

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
