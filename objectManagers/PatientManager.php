<?php
namespace WebApp2\ObjectManagers;

class PatientManager{
  private $pdo;

  function __construct(){
    $pdo = new PatientPDO();
  }

 //send invitations to review doctors to patients who have appointment on the current date
  public function sendInvitationReview(){
    //retrieve patients of the current date
    patients = $pdo->getPatientsOfTheDay();
    $mailManager = new MailManager();
    //send invitation to each patient
    foreach ($patients as $patient) {
      $mailManager->sendRequestReview($patient);
    }

  }


}
?>
