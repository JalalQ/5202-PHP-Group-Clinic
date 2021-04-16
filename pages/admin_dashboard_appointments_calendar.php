<?php
session_start();
use WebApp2\Database\{Database, AdminAppointmentPDO};
require_once 'vendor/autoload.php';
date_default_timezone_set('America/Toronto');

if($_SESSION['user']->role !== "admin") {
    header("location: index.php?page=user_login");
}

$dbcon = Database::getDb();
$newAppointment = new AdminAppointmentPDO();
$appointments = $newAppointment->getAllAppointmentsInfo($dbcon);
//var_dump($appointments);

$data = array();

foreach($appointments as $row) {
    $data[] = array(
        //'id'   => $row["id"],
        'url' => 'url',
        'title' => "Dr. ".$row->first_name . " " . $row->last_name,
        'start' => $row->date . "T" . $row->time_slot,
        'end' => $row->date . "T" . $row->time_slot
    );
}
//var_dump($data);
//echo $data;
echo json_encode($data,JSON_PRETTY_PRINT);