<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use WebApp2\Database\{Database, AdminAppointmentCalenderPDO, AdminHelpdeskPDO};

require_once 'vendor/autoload.php';
require_once 'functions/AdminDashboard.php';

date_default_timezone_set('America/Toronto');

$dbcon = Database::getDb();

//Get data from the data table for appointments
$newAppointments = new AdminAppointmentCalenderPDO();
$doctors = $newAppointments->getAllDoctors($dbcon);
$todaysApp = $newAppointments->getAllAppointmentsToday($dbcon);
//var_dump($todaysApp);

//Get functions
$getFunctions = new AdminDashboard();

//Time periods for appointments
$time_periods = array ("11:00","11:30", "12:00", "12:30", "13:00", "13:30", "14:00", "14:30", "15:00","15:30", "16:00", "16:30", "17:00", "17:30", "18:00", "18:30");

//Get data from the data table for helpdesk
$newHelpdesk = new AdminHelpdeskPDO();
$newInqs = $newHelpdesk->getNewInquiries($dbcon);
//var_dump($newInqs);

//When reply message at helpdesl is send, send email to questioner email address
if(isset($_POST['addReply'])){
    if($_POST['reply'] == "") {
        $replyError = "Please enter your reply message.";
    } else {
        $reply = $_POST['reply'];
        $id = $_POST['id'];
        $responder = 1;
        $newReply = $newHelpdesk->addReply($dbcon, $id, $reply, $responder);

        if($newReply){
            $newInqs = $newHelpdesk->getNewInquiries($dbcon);
            $questionerInfo = $newHelpdesk->getQuestionerInfo($dbcon, $id);
            //Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = '';                     //SMTP username
                $mail->Password   = '';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom('ikumine@gmail.com', 'Mailer');
                $mail->addAddress($questionerInfo[0]->email, $questionerInfo[0]->firstname." ".$questionerInfo[0]->lastname);     //Add a recipient
                //$mail->addAddress('ellen@example.com');               //Name is optional
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                //Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Reply to Inquiry';
                $mail->Body    = $questionerInfo[0]->reply_message;
                $mail->AltBody = $questionerInfo[0]->reply_message;

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

        } else {
            echo "Failed to reply. Please try again.";
        }
    }

}
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
        <link rel="stylesheet" href="css/admin-style/admin_dashboard.css">

	</head>

	<body>
		<?php include_once 'header.php'; ?>

        <div class="d-lg-flex align-items-stretch w-100">
            <?php include_once 'admin_sidebar.php'; ?>
            <main class="w-100 order-2" id="admin_main">
                <div class="container-fluid">
                    <button class="btn btn-secondary my-4" type="button" id="sidebar_nav_btn">Admin Menu</button>

                    <!--3 COLUMNS-->
                    <h1 class="pb-4">Hi, user name</h1><!--User name will be retrieved from database-->
                    <div class="row container-fluid" id="card_col-3">
                        <div class="col-lg-4 mt-3"><!--APPOINTMENT NUMBER-->
                            <div class="card shadow-sm text-center" id="card_number">
                                <div class="nav-link card_item">
                                    <p class="h1 d-block"><?= count($todaysApp); ?></p><!--Data will be retrieved from database-->
                                    <p><span><?= date("m/d"); ?></span>'s appointment number</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3"><!--PATIENTS-->
                            <div class="card shadow-sm text-center" id="card_patients">
                                <a href="#" class="nav-link">
                                    <span class="h2 card_item">Patients <i class="fas fa-hospital-user"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3"><!--DOCTORS-->
                            <div class="card shadow-sm text-center" id="card_doctors">
                                <a href="#" class="nav-link">
                                    <span class="h2 card_item">Doctors <i class="fas fa-user-md"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--END OF 3 COLUMNS-->

                    <!--APPOINTMENTS-->
                    <section class="card my-4 shadow-sm" id="section_appointment">
                        <h2 class="mt-3 mb-1 ml-3">Appointments</h2>
                        <a href="index.php?page=admin_dashboard_appointments" class="nav-link mb-2 detail-links" >Check Weekly Calendar</a>
                        <div class="container-fluid">
                            <div class="calendar mb-3">
                                <table class="table overflow-scroll">
                                    <thead>
                                        <tr>
                                            <th><?= date("m/d") ?></th>
                                            <?php foreach($doctors as $doctor) { ?>
                                                <th><?= $doctor->first_name." ".$doctor->last_name; ?></th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($t = 0; $t < count($time_periods); $t++) { ?>
                                            <tr>
                                                <td><?= $time_periods[$t]; ?></td>

                                                <!-- Doctor 1-->
                                                <?php $doc1 = $getFunctions->getDoctorsAppointment($dbcon, $newAppointments,1,date('Y-m-d'),$time_periods[$t]);
                                                    if(empty($doc1)) {
                                                ?>
                                                <td>&emsp;</td>
                                                <?php } else { ?>
                                                <td><?= $getFunctions->timeFormat($doc1[0]->time)." ".$doc1[0]->firstname." ".$doc1[0]->lastname ;; ?></td>
                                                <?php } ?>

                                                <!-- Doctor 2 -->
                                                <?php $doc2 = $getFunctions->getDoctorsAppointment($dbcon, $newAppointments,2, date('Y-m-d'),$time_periods[$t]);
                                                    if(empty($doc2)) {
                                                ?>
                                                <td>&emsp;</td>
                                                <?php } else { ?>
                                                <td><?= $getFunctions->timeFormat($doc2[0]->time)." ".$doc2[0]->firstname." ".$doc2[0]->lastname ;; ?></td>

                                            </tr>
                                        <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!--END OF APPOINTMENTS-->

                    <!--HELPDESK-->
                    <section class="card mb-5 shadow-sm" id="section_helpdesk">
                        <h2 class="mt-3 mb-1 ml-3">Helpdesk</h2>
                        <a href="index.php?page=admin_dashboard_helpdesk" class="nav-link mb-2 detail-links">Check All Messages</a>

                        <div class="container-fluid pb-3"><!--Data will be retrieved from database using PHP-->

                            <div class="accordion" id="accordionExample">
                                <?php if(empty($newInqs)) { ?>
                                    <div class="card">
                                        <div class="card-header card-bg">
                                            <p class="mb-0">There is no new inquiry.</p>
                                        </div>
                                    </div>
                                <?php } else { foreach($newInqs as $newInq) { ?>
                                    <div class="card">
                                        <div class="card-header card-bg section_helpdesk_item" id="heading<?= $newInq->id; ?>">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left section_helpdesk_btn" type="button" data-toggle="collapse" data-target="#collapse<?= $newInq->id; ?>" aria-expanded="true" aria-controls="collapse<?= $newInq->id; ?>">
                                                    <?= $newInq->id." ".$newInq->submitted_date." ".$newInq->firstname." ".$newInq->lastname." ".$newInq->status; ?>
                                                </button>
                                            </h2>
                                        </div>

                                        <!--MESSAGE OUTPUT-->
                                        <div id="collapse<?= $newInq->id; ?>" class="collapse" aria-labelledby="heading<?= $newInq->id; ?>" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Message: <?= $newInq->message; ?></p>

                                                <!-- REPLY FORM -->
                                                <form method="post" action="" name="helpForm">
                                                    <div class="form-group">
                                                        <input type="hidden" id="inquiryId" name="id" value="<?= $newInq->id; ?>"/>
                                                        <label for="reply">Reply Message: </label>
                                                        <textarea id="reply" name="reply" class="form-control"></textarea>
                                                        <span><?= isset($replyError) ? $replyError : ""; ?></span>
                                                    </div>
                                                    <input type="submit" class="btn btn-info" id="helpBtn" name="addReply" value="Reply to this message" />
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!--END OF MESSAGE OUTPUT-->
                                <?php }} ?>
                            </div>
                        </div>
                    </section>

                    <!--END OF HELPDESK-->
                </div>
            </main>
        </div>

        <?php include_once 'footer.php'; ?>

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