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
    $flag = false;
//    $sucessmsg ="";
    $s = new PatientPDO();
//    $d = $s->usernameExists($username);
    if(empty($firstname)) {
        $firsterr = " Please enter first name";
        $flag = true;
    }

    if(empty($lastname)) {
        $lasterr = " Please enter last name";
        $flag = true;
    }


    if(empty($username)){
        $usererr = "please enter a username";
        $flag = true;
    }
    else if ($s->usernameExists($username)){
        $result = $s->usernameExists($username);
            $usererr = "Username already exists";
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

    $hash_password = password_hash($password,PASSWORD_DEFAULT);

//    var_dump($_POST);


    $c = $s->addPatient($firstname, $lastname, $username, $hash_password, $email, $user_role_id);


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
    <title>Patient Register</title>

    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- contact CSS -->
    <link rel="stylesheet" href="css/patient_register.css">
    <!-- Style FOR HEADER AND FOOTER -->
    <link rel="stylesheet" href="css/HeaderFooter.css">
    <script src="https://kit.fontawesome.com/c03ea9a48c.js" crossorigin="anonymous"></script>


</head>

<body>
<?php

include_once 'header.php';
?>
<div class="contact-content-wrapper container">

    <h1>Register to Book an Appointment</h1>
    <p>Already have an account? Please <a id = "account"href="index.php?page=user_login"> login now.</a></p>

    <span class = "msg"><?= isset($sucessmsg)? $sucessmsg: ''; ?></span>

    <form method="POST" action="" name="register-form" id="contact-form">

        <label id="contact-form-req"><span>*</span> indicates a required field.</label>
        <div class="form-group">
            <label for="firstname">first name<span>*</span></label>
            <input type="text" class="form-control" id="firstname" value="<?= isset($firstname) ? $firstname : ''; ?>" name="firstname">
            <span class = "errormsg"><?= isset($firsterr)? $firsterr: ''; ?></span>

        </div>

        <div class="form-group">
            <label for="lastname">last name<span>*</span></label>
            <input type="text" class="form-control" id="lastname" value="<?= isset($lastname) ? $lastname : ''; ?>" name="lastname">
            <span class = "errormsg"><?= isset($lasterr)? $lasterr: ''; ?></span>

        </div>

        <div class="form-group">
            <label for="username">username<span>*</span></label>
            <input type="text" class="form-control" id="username" value="<?= isset($username) ? $username : ''; ?>" name="username">
            <span class = "errormsg"><?= isset($usererr)? $usererr: ''; ?></span>

        </div>

        <div class="form-group">
            <label for="password">password<span>*</span></label>
            <input type="password" class="form-control" value="<?= isset($password) ? $password : ''; ?>" id="password" name="password">
            <span class = "errormsg" ><?= isset($passerr)? $passerr: ''; ?></span>
        </div>

        <div class="form-group">
            <label for="email">Email<span>*</span></label>
            <input type="email" class="form-control" id="email" name="email" value="<?= isset($email) ? $email : ''; ?>" placeholder="name@example.com">
            <span class = "errormsg" ><?= isset($emailerr)? $emailerr: ''; ?></span>

        </div>

        <div class="form-group">

            <input type="hidden" name="user_role_id" value="1" id ="hidden">

        </div>

        <input type="submit" name="register" class="btn btn-dark btn-lg" value="Register">

    </form>

</div>

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