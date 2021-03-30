<?php
use WebApp2\Database\Database;
use WebApp2\Database\DoctorPDO;

require_once 'vendor/autoload.php';



$d = new DoctorPDO();
$id= $_POST['id'];

$dr = $d->getdoctorById($id, Database::getDb());
//var_dump($dr_by_id);

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

<header>
    <div class="wrapper">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark cyan">
                <a class="navbar-brand font-bold logo" href="index.php?page=home">QC/HC</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link active" href="index.php?page=home"></i> Home </a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</header>


<div class="wrapper">

    <div class="container">

        <div class="m-1 row-cols-1 float-right" style="margin-bottom: 1em;">
            <a href="index.php?page=doctorAdmin" id="btn_addStudent" class="btn btn-outline-success btn-lg ">Doctor Admin Panel</a>
        </div>

        <!-- doctor's information container -->
        <div class="wrapper">

            <?php include "doctorInformation.php"; ?>

        </div>
        <!-- end container -->

        <!-- Appointment -->
        <section class="my-4" id="section_appointment">
            <h2 class="mt-3 mb-1 ml-3">Weekly Appointment</h2>
            <div class="container-fluid">
                <div class="calendar mb-3"><!--table will be generated using PHP-->
                    <table class="table overflow-scroll">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>10:00</td>
                            <td></td>
                            <td>
                                <p>10:00 Appointment</p>
                                <p>10:30 Appointment</p>
                            </td>
                            <td>10:00 Appointment</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>11:00</td>
                            <td>11:00 Appointment</td>
                            <td>11:30 Appointment</td>
                            <td>11:00 Appointment</td>
                            <td>11:00 Appointment</td>
                        </tr>
                        <tr>
                            <td>12:00</td>
                            <td>
                                <p>12:00 Appointment</p>
                                <p>12:30 Appointment</p>
                            </td>
                            <td>12:30 Appointment</td>
                            <td>12:30 Appointment</td>
                            <td>12:00 Appointment</td>
                        </tr>
                        <tr>
                            <td>13:00</td>
                            <td>13:00 Appointment</td>
                            <td>13:00 Appointment</td>
                            <td>
                                <p>13:00 Appointment</p>
                                <p>13:30 Appointment</p>
                            </td>
                            <td>
                                <p>13:00 Appointment</p>
                                <p>13:30 Appointment</p>
                            </td>
                        </tr>
                        <tr>
                            <td>14:00</td>
                            <td>14:00 Appointment</td>
                            <td></td>
                            <td>14:30 Appointment</td>
                            <td>14:30 Appointment</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- Appointment -->

    </div>
    <!-- end wrapper -->
</div>

<?php

include 'footer.php';

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