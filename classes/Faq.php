<?php
namespace PHP\Classes;
  class Faq {

     //get all faq
     public function getFaqs($dbcon) {

         $query = "SELECT * FROM faqs";
         $pdostm = $dbcon->prepare($query);
         $pdostm->execute();

         $faqs = $pdostm->fetchAll(\PDO::FETCH_OBJ);
         return $faqs;
     }

     //get a faq by id
     public function getFaqById($dbcon, $id) {

         $query = "SELECT question, answer FROM faqs WHERE id = :id";
         $pdostm = $dbcon->prepare($query);
         $pdostm->bindParam(':id', $id);
         $pdostm->execute();

         $faq = $pdostm->fetch(\PDO::FETCH_OBJ);
         return $faq;
     }

     //add faq
     public function addFaq($dbcon, $question, $answer)
     {
         $query = "INSERT INTO faqs (question, answer) VALUES (:question, :answer) ";
         $pdostm = $dbcon->prepare($query);

         $pdostm->bindParam(':question', $question);
         $pdostm->bindParam(':answer', $answer);

         $faq = $pdostm->execute();
         return $faq;
     }

     //update faq
     public function updateFaq($dbcon, $id, $question, $answer)
     {
         $query = "UPDATE faqs SET question = :question, answer = :answer WHERE id = :id";

         $pdostm = $dbcon->prepare($query);

         $pdostm->bindParam(':question', $question);
         $pdostm->bindParam(':answer', $answer);
         $pdostm->bindParam(':id', $id);

         $faq = $pdostm->execute();

         return $faq;
     }

     //delete faq
     public function deleteFaq($dbcon, $id)
     {
         $query = "DELETE FROM faqs WHERE id = :id";

         $pdostm = $dbcon->prepare($query);
         $pdostm->bindParam(':id', $id);
         $faq = $pdostm->execute();
         return $faq;
     }
  }
