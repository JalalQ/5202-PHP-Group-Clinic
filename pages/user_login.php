<?php
use WebApp2\Database\{Database,PatientPDO};
require_once 'vendor/autoload.php';
if(isset($_POST['register'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $user_role_id = $_POST['user_role_id'];
    $flag = "";
    $sucessmsg ="";

    if(empty($firstname)) {
        $firsterr = " Please enter first name";
        $flag = true;
    }
    if($email == ""){
        $emailerr =  " please enter email";
        $flag = true;

    } else if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
        $emailerr =  " please enter valid email";
        $flag = true;

    }

    $pattern = "/[a-zA_Z0-9]{6,14}/";
    if(empty($password)){
        $passerr = " Please enter password";

        $flag = true;

    }

//if validation occures flag = true , if flag is still false insert intp ndatabase

    if ($flag == false){



//    var_dump($_POST);
        $db = Database::getDb();
        $s = new PatientRegisterAddPDO();
        $c = $s->addPatient($firstname, $lastname, $username, $password, $email, $user_role_id, $db);


        if ($c) {
            $sucessmsg = "Thank you for registering. Please login to book an appointment";
        } else {
            $sucessmsg = "problem registering";
        }
    }

//    }
//$sucessmsg = "Thank you for registering. Please loging to book an appointment";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="contact" description=" QC/HC clinic contact">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QC/HC Login</title>

    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- contact CSS -->
    <link rel="stylesheet" href="css/login.css">
    <!-- Style FOR HEADER AND FOOTER -->
    <link rel="stylesheet" href="css/HeaderFooter.css">
    <script src="https://kit.fontawesome.com/c03ea9a48c.js" crossorigin="anonymous"></script>


</head>

<body>
<?php

include_once 'header.php';
?>
<main class="form-signin">
    <form action="" method="POST">
        <h1 class="h3 mb-3 fw-normal">QC/HC Login</h1>
        <label for="floatingInput">Email</label>
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
        <label for="floatingPassword">Password</label>
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <input class="w-100 login btn btn-primary btn-sm" name="login" type="submit" value="Login">
    </form>
</main>

<?php
include_once 'footer.php';
?>
<!-- Script Source Files -->

<!-- jQuery -->
<script src="js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap 4.5 JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Font Awesome -->
<script src="js/all.min.js"></script>

<!-- End Script Source Files -->




</body>
</html>