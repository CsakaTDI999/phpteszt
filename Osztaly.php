<?php

require_once 'db.inc.php';
 
class Osztaly{

    private $osztalyId;
    private $ozstalyNev;

    function __construct($osztalyId,$db){

        $sql = "SELECT osztalyNev FROM osztalyok WHERE osztalyId = ".$osztalyId;
        if($result = $db->dbSelect($sql)){
            $osztalySor = $result->fetch_assoc();
            $this->osztalyNev = $osztalySor['osztalyNev'];
            $this->osztalyId = $osztalyId;
    }
 }

 public function getNev(){
    return $this->osztakyNev;
 }

 public function getAll($db){
    $osztalyok = array();

    $sql = "SELECT osztalyId, osztalyNev FROM osztalyok ";

    if($result = $db->dbSelect($sql)){
        while($row = $result->fetch_assoc()){
            $osztalyok[$row['osztalyId']] = $row['osztalyNev'];
        }
    }
    return $osztalyok;
}
}
 