<?php
//Page created by Jalaluddin Qureshi

use WebApp2\Database\Database;
use WebApp2\Database\DoctorPDO;
use WebApp2\Database\ReviewsPDO;

require_once 'vendor/autoload.php';

$d = new DoctorPDO();
$doctorsList = $d->getAllDoctors(Database::getDb());

$r = new ReviewsPDO();

//var_dump($review);

//after any user submits feedback for the doctor.
if(isset($_POST['confirmReview'])){

    $doctorID = $_POST['id'];
    $prof = $_POST['professional'];
    $friendly = $_POST['friendly'];
    $know = $_POST['know'];

    $dbcon = Database::getDb();
    $reviews = new ReviewsPDO();

    $count = $reviews->insert($doctorID, $prof, $friendly, $know, $dbcon);

    //As I have required="required" for all the inputs count will alway be equal to one,
    //and there is no need to further evluate its value.
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

include 'header.php';
include 'doctorBody.php';
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