<?php
namespace WebApp2\Database;
 class PagePDO{
     private $dbcon;
        function __construct(){
            $this->dbcon = Database::getDb();
  }
     public function getPage($pageTitle){
         $query = "SELECT * FROM pages WHERE pages.title=:title";
         $pdostm = $this->dbcon->prepare($query);
         $pdostm->bindParam(':title', $pageTitle);
         $pdostm->execute();

         //fetch all result
         $results = $pdostm->fetch(\PDO::FETCH_OBJ);
         return $results;
     }



 }
 