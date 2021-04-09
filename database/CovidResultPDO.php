<?php
namespace WebApp2\Database;
/**
 * this class execute the crud operation on the covid_result table
 */
 class CovidResultPDO{
    private $dbcon;
    function __construct(){
        $this->dbcon = Database::getDb();
    }
    // this function get the covid result details related to a specific result 
    public function getCovidResult($result){
        $query = "SELECT * FROM covid_results WHERE result=:result";
        $pdostm = $this->dbcon->prepare($query);
        $pdostm->bindParam(':result', $result);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetch(\PDO::FETCH_OBJ);
        return $results;
     }



 }