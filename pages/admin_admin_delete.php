<?php
 
use WebApp2\Database\{Database,AdminAllUsersPDO};
require_once 'vendor/autoload.php';

if($_SESSION['user']->role !== "admin") {
    header("location: index.php?page=user_login");
}

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $dbcon = Database::getDb();

    $admin = new AdminAllUsersPDO();
    $a = $admin->deleteUser($dbcon, $id);
    if($a){
        //$deleteMsg = "Deleted successfully.";
        header("Location: index.php?page=admin_admins");
    }
    else {
        echo "Failed to delete. Please try it again.";
    }
}
