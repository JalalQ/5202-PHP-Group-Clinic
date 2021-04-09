<?php
namespace WebApp2\Database;
class AdminHelpdeskPDO
{
    //get all inquiries
    public function getInquiries($dbcon)
    {
        $query = "SELECT * FROM helpdesk";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $inquiries = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $inquiries;
    }

    //get only new inquiry
    public function getNewInquiries($dbcon)
    {
        $query = "SELECT helpdesk.id, helpdesk.message, helpdesk.submitted_date, helpdesk.status, helpdesk.responder_id, users.firstname, users.lastname, users.email FROM helpdesk, users WHERE helpdesk.questioner_id = users.id AND status = 'NEW'";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $newInquiries = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $newInquiries;
    }

    //get all information based on questioner ID
    public function getAllInfoForQuestioner($dbcon)
    {
        $query = "SELECT helpdesk.id, helpdesk.message, helpdesk.submitted_date, helpdesk.status, helpdesk.responder_id, users.firstname, users.lastname, users.email FROM helpdesk, users WHERE helpdesk.questioner_id = users.id";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $questioner = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $questioner;
    }

    //get questioner information by questioner ID
    public function getQuestionerInfo($dbcon, $id)
    {
        $query = "SELECT helpdesk.id, helpdesk.questioner_id, helpdesk.reply_message, users.firstname, users.lastname, users.email FROM helpdesk, users WHERE helpdesk.questioner_id = users.id AND helpdesk.id = :id";
        $pdostm = $dbcon->prepare($query);
        $pdostm->bindParam(':id', $id);
        $pdostm->execute();

        $questionerInfo = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $questionerInfo;
    }

    //get all information base on responder ID
    public function getAllInfoForResponder($dbcon)
    {
        $query = "SELECT helpdesk.id, helpdesk.questioner_id, helpdesk.message, helpdesk.submitted_date, helpdesk.status, helpdesk.responder_id, helpdesk.responded_date, helpdesk.reply_message, users.firstname, users.lastname, users.email FROM helpdesk, users WHERE helpdesk.responder_id = users.id";
        $pdostm = $dbcon->prepare($query);
        $pdostm->execute();

        $responder = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $responder;
    }

    //add reply information to the database
    public function addReply($dbcon, $id, $reply, $responder)
    {
        $query = "UPDATE helpdesk SET status = 'Responded', responder_id = :responder, responded_date = NOW(), reply_message = :reply WHERE id = :id";

        $pdostm = $dbcon->prepare($query);

        $pdostm->bindParam(':responder', $responder);
        $pdostm->bindParam(':reply', $reply);
        $pdostm->bindParam(':id', $id);

        $newReply = $pdostm->execute();

        return $newReply;

    }
}
