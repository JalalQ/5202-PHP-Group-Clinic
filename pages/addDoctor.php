<?php
use WebApp2\Database\Database;
use WebApp2\Database\DoctorPDO;

require_once 'vendor/autoload.php';

//once the data has been fetched. Update the content based on the new data provided by the user.
if(isset($_POST['confirmAdd'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $cpso_reg = $_POST['cpso_reg'];
    $email = $_POST['email'];
    $education = $_POST['education'];
    $expertise = $_POST['expertise'];
    $biography = $_POST['biography'];
    $personal = $_POST['personal'];

    $dbcon = Database::getDb();
    $doctor_update = new DoctorPDO();

    $count = $doctor_update->addDoctor($first_name, $last_name,
        $cpso_reg, $email, $education, $expertise, $biography, $personal, $dbcon);


    if($count){
        header('Location:  index.php?page=doctorAdmin');
    } else {
        echo "problem";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Query Crew - Health Clinic</title>

    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
    <!-- Style FOR HEADER AND FOOTER -->
    <link rel="stylesheet" href="css/HeaderFooter.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/admin-style/admin_dashboard.css">


</head>

<?php

    include_once 'header.php';
            
?>


<div class="wrapper">

    <div class="container">

        <div class="m-1 row-cols-1 float-right" style="margin-bottom: 1em;">
            <a href="index.php?page=doctorAdmin" id="btn_addStudent" class="btn btn-outline-success btn-lg ">Doctor Admin Panel</a>
        </div>

        <div class="wrapper">
            <h1 class="jumbotron-heading text-center" style="margin:1em 0em;">

                <u>Add New Doctor's Profile</u>

            </h1>
        </div>

        <!-- doctor's information container -->
        <div class="wrapper">

            <form action="" method="post">

                <input type="hidden" name="id" id="id" value="<?= $id; ?>" />


                <div class="form-group">
                    <label for="first_name">First Name :</label>
                    <input type="text" name="first_name" class="form-control"
                           id="first_name" placeholder="Enter First Name">
                    <span style="color: red"></span>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name :</label>
                    <input type="text" name="last_name" class="form-control"
                           id="last_name" placeholder="Enter Last Name">
                    <span style="color: red"></span>
                </div>

                <div class="form-group">
                    <label for="cpso_reg">CPOS Number :</label>
                    <input type="text" name="cpso_reg"  class="form-control"
                           id="cpso_reg" placeholder="Enter CPSO Number">
                    <span style="color: red"></span>
                </div>

                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" name="email"  class="form-control" id="email"
                           placeholder="Enter email">
                    <span style="color: red"></span>
                </div>

                <div class="form-group">
                    <label for="education">Education :</label>
                    <input type="text" name="education"  class="form-control"
                           id="education" placeholder="Enter education">
                    <span style="color: red"></span>
                </div>

                <div class="form-group">
                    <label for="expertise">Expertise :</label>
                    <input type="text" name="expertise" class="form-control"
                           id="expertise" placeholder="Enter Expertise">
                    <span style="color: red"></span>
                </div>

                <div class="form-group">
                    <label for="biography">Biography :</label>
                    <input type="text" name="biography"  class="form-control"
                           id="biography" placeholder="Enter biography">
                    <span style="color: red"></span>
                </div>

                <div class="form-group">
                    <label for="personal">Personal :</label>
                    <input type="text" name="personal"  class="form-control"
                           id="personal" placeholder="Enter personal">
                    <span style="color: red"></span>
                </div>

                <button type="submit" name="confirmAdd" class="btn btn-primary float-right" id="btn-submit">
                    Add Doctor's Profile
                </button>


            </form>

        </div>
        <!-- end container -->


    </div>
    <!-- end wrapper -->
</div>





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