<?php
use WebApp2\Database\{Database, AdminAppointmentPDO};
require_once 'vendor/autoload.php';
date_default_timezone_set('America/Toronto');

$dbcon = Database::getDb();
$newAppointments = new AdminAppointmentPDO();
$appos = $newAppointments->getAllAppointmentsInfo($dbcon);

$nextDay = date('Y-m-d', strtotime(' +1 day'));
//var_dump($nextDay);

$i = 0;
while($i < count($appos) ){
    if($appos[$i]->date = $nextDay){
        $patientName = $appos[$i]->firstname.' '.$appos[$i]->lastname;
        $docName = $appos[$i]->first_name.' '.$appos[$i]->last_name;

        // Create the Transport
        $transport = new \Swift_SmtpTransport('smtp.googlemail.com', 587,'tls');
        $transport->setUsername('ikumine@gmail.com');
        $transport->setPassword('Iikkmm0130@');

        // Create the Mailer using your created Transport
        $mailer = new \Swift_Mailer($transport);

        // Create a message
        $message = new \Swift_Message('QC/HC Appointment Reminder');
        $message ->setFrom(['ikumine@gmail.com' => 'QC/HR']);
        $message ->setTo([$appos[$i]->email => $patientName]);
        $type = $message->getHeaders()->get('Content-Type');
        $type->setValue('text/html');
        $type->setParameter('charset', 'utf-8');
        //generate the page content
        $content = content_reminder($patientName, $docName, $appos[$i]->date, $appos[$i]->time_slot);
        $message ->setBody($content);
        //echo $content;
        $result = $mailer->send($message);
    }
    $i++;
}
function content_reminder($patientName, $docName, $date, $time) {
    $reminderMsg = "<!DOCTYPE html>
<html lang='en'>
<head>

    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, viewport-fit=cover'>
    <meta name='email reminder' description='QC/HC Appointment Reminder'>
    <meta http-equiv='X-UA-Compatible'' content='ie=edge'>
    <title>QC/HC - Appointment Reminder</title>

    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' integrity='sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu' crossorigin='anonymous'>
    <script src='https://kit.fontawesome.com/c03ea9a48c.js' crossorigin='anonymous'></script>
    <!-- Style CSS -->
    <style type='text/css'>
        /*============= TOP BAR HEADER =============*/
        header
        {
            background-color: #276678!important;
            height: 7rem;
        }
        .logo {
        font-family: sans-serif;
            font-size: 40px;
            text-align: center;
            border: 4px white solid;
            border-radius: 12px;
            padding: 1rem;
        }
        nav a {
        color: white;
    }
        nav a:hover {
        color: gray;
    }
        .top-bar {
        background: #709fb0;
        height: 2.8rem;
            padding: 0.5rem 0;
        }
        nav{
        padding-top: 1rem;
            padding-left: 0.5em;

        }
        .content-wrapper{
        max-width: 1000px;
            margin: auto;
            padding: 0 10px 0 10px;
        }
        h1{
        color: #276678;
    }
        .info {
        font-weight: bold;
        }
    </style>
</head>
<body>
<header>
    <!--Navbar -->
    <nav class='navbar navbar-expand-lg navbar-dark cyan'>
        <a class='navbar-brand font-bold logo' href='http://localhost:8888/Web-App-2/index.php?page=home'>QC/HC</a>
    </nav>
    <!--/.Navbar -->
</header>
<main class='content-wrapper'>
    <h1>Appointment Reminder</h1>
    <p>Dear. $patientName</p>
    <p>This is a friendly reminder for your appointment with <span class='info'>$docName</span> on <span class='info'>$date / </span><span class='info'>$time</span>. Please try to arrive 15 minutes early to fill out the intake form if this is your first visit.</p>
    <p>If you would like to cancel or reschedule, please contact us at 705-123-4567. Otherwise, we look forward to seeing you. Have a wonderful day!</p>
    <p>Warm regards,</p>
    <p>QC/HC</p>
</main>
</body>
</html>";
    return $reminderMsg;
}
