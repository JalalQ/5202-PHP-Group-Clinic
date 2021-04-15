<?php
session_start();



use WebApp2\Database\Database;
use WebApp2\Database\DoctorPDO;
use WebApp2\Database\Days;
use WebApp2\Database\Time_Slots;
use WebApp2\Database\Appointment;

require_once 'Database/Database.php';
require_once 'Database/User.php';
require_once 'Database/DoctorPDO.php';
require_once 'Database/Time_Slots.php';
require_once 'Database/Days.php';
require_once 'Database/Appointment.php';

$d = new DoctorPDO();
$doctors = $d->getAllDoctors(Database::getDb());
$d = new Days();
$days = $d->getAllDays(Database::getDb());

$t = new Time_Slots();
$times = $t->getTimeSlots(Database::getDb());

require_once 'vendor/autoload.php';


if (isset($_POST['book'])) {

    $doctor = $_POST['doctor'];
    $patient = $_POST['patient'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $id = 1;

    $db = Database::getDb();
    $a = new Appointment();
    $appointment = $a->addAppointment($doctor, $patient, $day, $time, $subject, $message, $db);

    if($appointment){
        header("Location: index.php?page=confirmAppointment");
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
<body>
<?php include_once 'header.php'; ?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                <div class="row">
                    <div class="col text-center">
                        <h1>Register for Appointment</h1>
                        <p class="text-h3">Complete the following form to hear back from one of our medical professionals</p>
                    </div>
                </div>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="doctor">Doctor :</label>
                        <select  name="doctor" class="form-control" id="doctor" >
                            <?php foreach ($doctors as $doctor) {
                                $select = "";
                                $selected = $select == $doctor->id ? "selected" : "";?>
                                <option <?=$selected?> value="<?=$doctor->id?>"><?= "Dr ".$doctor->first_name . " ". $doctor->last_name?></option>

                            <?php } ?>
                        </select>
                        <span style="color: #ff0000">
                            </span>
                    </div>
                    <div class="form-group">
                        <label for="day">Day :</label>
                        <select  name="day" class="form-control" id="day" >
                            <?php foreach ($days as $day) {
                                $select = "";
                                $selected = $select == $day->id ? "selected" : "";?>
                                <option <?=$selected?> value="<?=$day->id?>"> <?= $day->date?></option>

                            <?php } ?>
                        </select>
                        <span style="color: #ff0000">
                            </span>
                    </div>
                    <div class="form-group">
                        <label for="time">Time Slot (Your Doctor Will Confirm Time) :</label>
                        <select  name="time" class="form-control" id="time" >
                            <?php foreach ($times as $time) {
                                $select = "";
                                $selected = $select == $time->id ? "selected" : "";?>
                                <option <?=$selected?> value="<?=$time->id?>"> <?= $time->time_slot?></option>

                            <?php } ?>
                        </select>
                        <span style="color: #ff0000">
                            </span>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Message for Doctor:</label>
                        <input type="text" name="message" id="message" class="form-control" placeholder="Message">
                    </div>

                    <input type="hidden" name="patient" id="patient" value="1" >

                    <div class="row justify-content-start mt-4">
                        <div class="col">
                            <button class="btn btn-primary mt-4" name="book">Book Now</button>
                        </div>
                    </div>

                </form>



            </div>
        </div>
    </div>
</section>
<?php include_once 'footer.php'; ?>

</body>



<!-- jQuery -->
<script src="js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap 4.5 JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Font Awesome -->
<script src="js/all.min.js"></script>

