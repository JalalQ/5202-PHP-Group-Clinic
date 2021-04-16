<?php
use WebApp2\Database\{Database, AdminAppointmentPDO};
require_once 'vendor/autoload.php';
date_default_timezone_set('America/Toronto');

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