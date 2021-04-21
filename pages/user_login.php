<?php

use WebApp2\Database\{Database,User};
require_once 'vendor/autoload.php';
if(isset($_POST['login'])){


    $username = $_POST['username'];
    $password = $_POST['password'];
    $flag = "";
    $sucessmsg ="";

    if(empty($username)) {
        $firsterr = " Please enter username";
        $flag = true;
    }

    $pattern = "/[a-zA_Z0-9]{6,14}/";
    if(empty($password)){
        $passerr = " Please enter password";
        $flag = true;
    }



    if ($flag == false){

        $db = Database::getDb();
        $s = new User();

        $result = $s->isUserExists($db, $username,$password);

        if ($result){
            $user = $s->findUser($db, $username, $password);
            $userInfo = $s->findUserInfo($db,$user->id);
            $_SESSION['user'] = $userInfo;

            if ($userInfo->role=="patient"){
                header("location: index.php?page=patient_dashboard");
            ///add conditions for admin and doctor login here
            } else if ($userInfo->role == "admin") {
                header("location: index.php?page=admin_dashboard");
            }

            }
        if ($result==false) {
            $passerr = "Incorrect username or password";
        }
//
        }

//




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
    <form action="" method="POST" class="container" >
        <h1 class="h3 mb-3 fw-normal">QC/HC Login</h1>
        <div class="form-group">
        <label for="floatingInput">Username</label>
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
        <span class = "errormsg"><?= isset($firsterr)? $firsterr: ''; ?></span>
        </div>
        <div class="form-group">

        <label for="floatingPassword">Password</label>
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <span class = "errormsg"><?= isset($passerr)? $passerr: ''; ?></span>
        </div>
        <div class="form-group">
            <input class=" login btn btn-primary" name="login" type="submit" value="Login">

        </div>
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
