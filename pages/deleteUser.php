<?php

use WebApp2\Database\Database;

use WebApp2\Database\User;

require_once 'vendor/autoload.php';
require_once 'database/Database.php';
require_once 'database/User.php';


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $db = Database::getDb();

    $s = new User();
    $count = $s->deleteUser($id, $db);
    if ($count) {
        header("Location: index.php?page=deletedUser");
    } else {
        echo " problem deleting";
    }
}
