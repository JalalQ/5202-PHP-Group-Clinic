<?php
use WebApp2\Database\{Database, DoctorPDO, AdminAppointmentPDO, AdminHelpdeskPDO};
use WebApp2\ObjectManagers\{MailManager, AdminMail};
require_once 'vendor/autoload.php';

date_default_timezone_set('America/Toronto');

if($_SESSION['user']->role !== "admin") {
    header("location: index.php?page=user_login");
}

//Get data from the data table
$dbcon = Database::getDb();

//Appointments data
$newAppointments = new AdminAppointmentPDO();
$todaysApp = $newAppointments->getAllAppointmentsToday($dbcon);
$times = $newAppointments->getAllTimeslots($dbcon);

//Doctors data
$newDocs = new DoctorPDO();
$docs = $newDocs->getAllDoctors($dbcon);

//Helpdesk data
$newHelpdesk = new AdminHelpdeskPDO();
$newInqs = $newHelpdesk->getNewInquiries($dbcon);

//When the reply button is clicked, send email to questioner's email address
if(isset($_POST['addReply'])){
    if($_POST['reply'] == "") {
        $replyError = "Please enter your reply message.";
    } else {
        $reply = $_POST['reply'];
        $id = $_POST['id'];
        $responder = $_SESSION['user']->id; //get admin name from session info
        $newReply = $newHelpdesk->addReply($dbcon, $id, $reply, $responder);

        if($newReply) {
            $username = $newInqs[0]->firstname . ' ' . $newInqs[0]->lastname;

            //$mailer = new MailManager();
            //var_dump($mailer);
            $transport = new \Swift_SmtpTransport('smtp.mail.yahoo.com', 587,'tls');
            $transport->setUsername('webbapp2@yahoo.com');
            $transport->setPassword('pjqncuhsekjhvkmq');

            // Create the Mailer using your created Transport
            $mailer = new \Swift_Mailer($transport);

            // Create a message
            $inquiry = new AdminMail();
            $message = new \Swift_Message('QC/HC Helpdesk');
            $message->setFrom(['webbapp2@yahoo.com' => 'QC/HR']);
            $message->setTo([$newInqs[0]->email => $username]);
            $type = $message->getHeaders()->get('Content-Type');
            $type->setValue('text/html');
            $type->setParameter('charset', 'utf-8');

            //generate the page content
            $content = $inquiry->content_inquiry($username, $reply);
            $message->setBody($content);

            //echo $content;
            $result = $mailer->send($message);
            $newInqs = $newHelpdesk->getNewInquiries($dbcon);
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
    <link rel="stylesheet" href="css/admin-style/admin_sidebar.css">

</head>

<body>
<?php include_once 'header.php'; ?>

<div class="d-lg-flex align-items-stretch w-100">
    <?php include_once 'admin_sidebar.php'; ?>
    <main class="w-100 order-2" id="admin_main">
        <div class="container-fluid">
            <button class="btn btn-secondary my-4" type="button" id="sidebar_nav_btn">Admin Menu</button>

            <!--3 COLUMNS-->
            <h1 class="pb-4">Hi, <span><?= $_SESSION['user']->username; ?></span></h1><!--User name will be retrieved from database-->
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
                        <a href="index.php?page=admin_patients" class="nav-link">
                            <span class="h2 card_item">Patients <i class="fas fa-hospital-user"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mt-3"><!--DOCTORS-->
                    <div class="card shadow-sm text-center" id="card_doctors">
                        <a href="index.php?page=doctorAdmin" class="nav-link">
                            <span class="h2 card_item">Doctors <i class="fas fa-user-md"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--END OF 3 COLUMNS-->

            <!--APPOINTMENTS-->
            <section class="card my-4 shadow-sm" id="section_appointment">
                <h2 class="mt-3 mb-1 ml-3">Today's appointments</h2>
                <div class="row mb-2">
                    <div class="col-lg-6">
                        <a href="index.php?page=admin_dashboard_appointments" class="nav-link detail-links" >Check Weekly Calendar</a>
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-secondary d-inline-block float-lg-right mr-3" type="submit" name="reminder" id="reminder">Send a reminder</button>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="todays-calendar mb-3">
                        <table class="table overflow-scroll">
                            <thead>
                            <tr>
                                <th><?= date("m/d") ?></th>
                                <?php foreach($docs as $doc) { ?>
                                    <th><?= $doc->first_name." ".$doc->last_name; ?></th>
                                <?php } ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php for($t = 0; $t < count($times); $t++) { ?>
                                <tr>
                                <td><?= $times[$t]['time_slot']; ?></td>
                                <!-- Doctor-->
                                <?php foreach($docs as $d){
                                    $doc = $newAppointments->getAppointmentsByDoctorTime($dbcon, $d->id, date('Y-m-d'), $times[$t]['time_slot']);
                                    if(empty($doc)) {
                                        echo "<td>&emsp;</td>";
                                ?>
                                <?php } else { ?>
                                     <td><?= $doc[0]->time_slot." ".$doc[0]->firstname." ".$doc[0]->lastname ;; ?></td>
                                <?php }} ?>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!--END OF APPOINTMENTS-->

            <!--HELPDESK-->
            <section class="card mb-5 shadow-sm" id="section_helpdesk">
                <h2 class="mt-3 mb-1 ml-3">New Messages</h2>
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
                                <div class="card-header alert alert-danger" id="heading<?= $newInq->id; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left helpdesk_btn" type="button" data-toggle="collapse" data-target="#collapse<?= $newInq->id; ?>" aria-expanded="true" aria-controls="collapse<?= $newInq->id; ?>">
                                            <?=$newInq->status." ".$newInq->submitted_date." ".$newInq->firstname." ".$newInq->lastname; ?>
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
<script type="text/javascript" src="js/admin_sidebar.js"></script>

<!-- End Script Source Files -->

</body>
</html>
