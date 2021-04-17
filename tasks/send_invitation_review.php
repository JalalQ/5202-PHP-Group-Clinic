<?php
use WebApp2\ObjectManagers\{MailManager,PatientManager};
use WebApp2\Database\{Database,PatientPDO};
require_once '../vendor/autoload.php';

$manager = new PatientManager();
$manager->sendInvitationReview();
echo "invitations sent";
?>
