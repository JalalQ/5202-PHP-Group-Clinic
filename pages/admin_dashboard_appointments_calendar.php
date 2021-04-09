<?php
use WebApp2\Database\{Database, AdminAppointmentCalenderPDO};
require_once 'vendor/autoload.php';
date_default_timezone_set('America/Toronto');

$dbcon = Database::getDb();
$new = new AdminAppointmentCalenderPDO();
$appointments = $new->getAppointmentsForWeeklyCalendar($dbcon);
//var_dump($appointments);

$data = array();

foreach($appointments as $row)
{
    $data[] = array(
        //'id'   => $row["id"],
        'url' => 'url',
        'title' => $row["firstname"]." ".$row['lastname'],
        'start' => $row["date"]."T".$row["time"],
        'end' => $row["date"]."T".$row["time"]
    );
}
//var_dump($data);
//echo $data;
echo json_encode($data);



