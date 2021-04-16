<?php

session_start();

use WebApp2\Database\Database;
use WebApp2\Database\Appointment;
use WebApp2\Database\User;
use WebApp2\Database\Time_Slots;
use WebApp2\Database\Days;
use WebApp2\Database\DoctorPDO;

require_once 'database/Database.php';
require_once 'database/Time_Slots.php';
require_once 'database/Days.php';
require_once 'database/Appointment.php';
require_once  'database/User.php';
require_once 'database/DoctorPDO.php';

    $id = $_SESSION['user'];
    $db = Database::getDb();
    $u = new User;
    $currentUser = $u->findUserInfo($db, $id);

if (isset($_POST['book'])) {

    $doctor = $_POST['doctor'];
    $patient = $_POST['patient'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $dbcon = Database::getDb();
    $a = new Appointment();
    $d = new Days();
    $t = new Time_Slots();
    $doc = new DoctorPDO();
    $doct = $doc->getdoctorById($doctor , $dbcon);

    $days = $d->getDaysById($db, $day);
    $timeSlot = $t->getTimebyId($db, $time);
    $appointment = $a->addAppointment($doctor, $patient, $day, $time, $subject, $message, $db);
    if(!$appointment){
        header("Location: index.php?page=bookAppointment");
    }
}
?>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Query Crew - Health Clinic</title>

    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Style FOR HEADER AND FOOTER -->
    <link rel="stylesheet" href="css/HeaderFooter.css">


</head>
  <?php include_once 'header.php'; ?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 ">
                <div class="py-2">
                    <div class="box">
                        <h1>You've Booked An Appointment!</h1>
                        <div class="row">
                            <div class="confirmBox col-md-4 p-5">
                                <p class="h3 text-capitalize">Appointment Details</p>
                                <p class="h6 font-weight-bold">Day: <span
                                        class="font-weight-light"><?= $days[0]->date?></span></p>
                                <p class="h6 font-weight-bold">Time: <span
                                        class="font-weight-light"><?= $timeSlot[0]->time_slot ?></span></p>
                                <p class="h6 font-weight-bold">Doctor: <?=$doct->first_name . " ". $doct->last_name ?><span
                                        class="font-weight-light"></span>
                                </p>
                                <p class="h6 font-weight-bold">Regarding: <span
                                        class="font-weight-light"> <?= $subject ?> </span></p>
                                <p class="h6 font-weight-bold">Message for doctor: <span
                                        class="font-weight-light"> <?= $message ?> </span></p>
                            </div>
                            <div class="col-md-7 py-5">
                                <h2>Hello <?= $currentUser->firstname . " " .$currentUser->lastname ?></h2>
                                <h3>Next Steps For Your Road To Recovery</h3>
                                <p>Now that you have successfully booked an appointment, you will be contacted by one of
                                    our medical professionals to undergo a phone consultation followed by confirming
                                    your appointment time.</p>
                            </div>
                        </div>


                        <a class="btn btn-secondary" href="index.php?page=bookAppointment">Return</a>
                        <a class="btn btn-light" href="index.php?page=home">Home Page</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once 'footer.php'; ?>
<!-- jQuery -->
<script src="js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap 4.5 JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Font Awesome -->
<script src="js/all.min.js"></script>