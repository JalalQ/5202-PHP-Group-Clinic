<?php
session_start();
$id = $_SESSION['user']->id;
use WebApp2\Database\{Database,Appointment,AdminHelpdeskPDO};

require_once 'vendor/autoload.php';


$s = new Appointment();

if(isset($_POST['send'])) {

    $message = $_POST['message'];
    $status = $_POST['status'];

    $dbcon = Database::getDb();
    $c = new AdminHelpdeskPDO();

    $m = $c->addMessage($id, $message, $status, $dbcon);
    var_dump($m);

    if ($m){
        $success = "Thank you for submitting your request. Our admin team will email you within 24 hours.";
    }

}
$dbcon = Database::getDb();
$AppointmentDate = $s->getPatientAppointment($dbcon, $_SESSION["user"]->id);



?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QC/HC - admin dashboard</title>

    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
    <!-- Style FOR HEADER AND FOOTER -->
    <link rel="stylesheet" href="css/HeaderFooter.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/patient_dashboard.css">

</head>

<body>
<?php

include_once 'header.php';
?>

<!--<div class="row">-->
    <main class="col-lg-12 order-1">


            <!--3 COLUMNS-->
            <h1 class
                ="py-4">Hi, <?=$_SESSION['user']->firstname . " " . $_SESSION['user']->lastname ?></h1><!--User name will be retrieved from database-->
            <div class="row container-fluid" id="card_col-3">
                <div class="col-lg-4 mt-3"><!--APPOINTMENT DATE-->
                    <div class="card shadow-sm text-center" id="card_number">
                        <div class="nav-link card_item">
                            <p class="h1 d-block"><?=$AppointmentDate->date?></p><!--Data will be retrieved from database-->
                            <p>Your next appointment</p>
                        </div>
                    </div>
                </div>
<!--                <div class="col-lg-4 mt-3"><!-Patient Info-->
<!--                    <div class="card shadow-sm text-center" id="card_patients">-->
<!--                        <a href="index.php?page=patient_info" class="nav-link">-->
<!--                            <span class="h2 card_item">My Info <i class="fas fa-hospital-user"></i></span>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-lg-4 mt-3"><!--Book Appointment with Doctor-->
                    <div class="card shadow-sm text-center" id="card_doctors">
                        <a href="index.php?page=covid_questionnaire_start" class="nav-link">
                            <span class="h2 card_item">Book an Appointment <i class="fas fa-user-md"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--END OF 3 COLUMNS-->

            <!--APPOINTMENTS-->
<!--            <section class="card my-4 shadow-sm" id="section_appointment">-->
<!--                <h2 class="my-3 ml-3">Appointments</h2>-->
<!--<!                <a href="#" class="nav-link mb-2 detail-links" >Check more</a>-->
<!--                <div class="container-fluid">-->
<!--                    <div class="calendar mb-3"><!-table will be generated using PHP-->
<!--                        <table class="table overflow-scroll">-->
<!--                            <thead>-->
<!--                            <tr>-->
<!---->
<!--                                <th>Date</th>-->
<!--                                <th>Time</th>-->
<!--                                <th>Doctor Name</th>-->
<!--                                <th></th>-->
<!--                             <th>Doctor4</th>-->
<!--                            </tr>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                            <tr>-->
<!--                                <td>March 25th, 2021</td>-->
<!--                                <td>10:00 am</td>-->
<!--                                <td>John Smith</td>-->
<!--                                <td> <a href="#" class="nav-link mb-2 detail-links" >Cancel</a></td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>March 28th, 2021</td>-->
<!--                                <td>10:00 am</td>-->
<!--                                <td>Jane Smith</td>-->
<!--                                <td> <a href="#" class="nav-link mb-2 detail-links" >Cancel</a></td>-->
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
            <!--END OF APPOINTMENTS-->

            <!--HELPDESK-->

            <section class="card mb-4 shadow-sm" id="section_helpdesk">
                <h2 class="my-3 ml-3">Helpdesk</h2>
                <p class="my-3 ml-3">Having problems with your account? Contact our help desk for support.</p>
                <div class="container-fluid pb-3"><!--Data will be retrieved from database using PHP-->
                    <form method="POST" action="" name="contact-form" id="contact-form">



                        <div class="form-group">
                            <label for="comment">What do you need help with?<span>*</span></label>
                            <textarea class="form-control" id="comment" name="message" required></textarea>
                        </div>

                        <div class="form-group">

                            <input type="hidden" name="status" value="New" id ="hidden">

                        </div>
                        <button type="submit" name="send" class="btn btn-dark btn-lg">Send</button>
                    </form>
                    <span class = "msg"><?= isset($success)? $success: ''; ?></span>
                </div>
            </section>
            <!--END OF HELPDESK-->

        </div>
    </main>




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
<!--CUSTOM JS-->
<script type="text/javascript" src="js/admin_dashboard.js"></script>

<!-- End Script Source Files -->




</body>
</html>