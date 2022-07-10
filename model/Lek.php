<?php

include_once('response.php');

class Lek
{
public $sifraNabavke;
public $sifra;
public $kolicina;
public $id;
public $datum;


public function __construct($sifra,$kolicina,$id,$datum){
    
    $this->sifra=$sifra;
    $this->kolicina=$kolicina;
    $this->id=$id;
    $this->datum=$datum;
   
    

}
public static function getAll()
{
    include_once('dbBroker.php');
    global $mysqli;
    $sql = "SELECT * FROM lekovi";

    if(!($result = $mysqli->query($sql))) {
        echo "ERROR" . $mysqli->mysql_error;
        exit();
    }

    $arrayResult = array();
    while($row = $result->fetch_object()) {
        $lekovi = new Lek($row->sifra,$row->kolicina, $row->id,$row->datum);
        $lekovi -> sifraNabavke = $row->sifraNabavke;
        array_push($arrayResult, $lekovi);
    }
    return $arrayResult;
}

public function addNew()
{
    include_once('dbBroker.php');
    global $mysqli;
    $query = "INSERT INTO lekovi(sifra,kolicina,id,datum) VALUES 
    ('"
       
        . $mysqli->real_escape_string($this->sifra) . "','"
        . $mysqli->real_escape_string($this->kolicina) . "','"
        . $mysqli->real_escape_string($this->id) . "','"
        . $mysqli->real_escape_string($this->datum) . "
    ')";

        if ($mysqli->query($query)) {
            return true;
        }
        else {
            return false;
        }


}

public static function getById($sifraNabavke){    
    include_once ('dbBroker.php');
    global $mysqli;

    $sql = "SELECT * FROM lekovi where sifraNabavke=".$sifraNabavke;

    if(!($result = $mysqli->query($sql))) {
        echo "ERROR" . $mysqli->mysql_error;
        exit();
    }
  # $lekovi=null;
    while($row = $result->fetch_object()){
        $lekovi = new Lek($row->sifra,$row->kolicina,$row->id,$row->datum);
        $lekovi->sifraNabavke = $row->sifraNabavke;
    }

    return $lekovi;
}
public function deleteById(){
    include_once ('dbBroker.php');
    global $mysqli;

    $sql = "DELETE FROM lekovi WHERE sifraNabavke=".$this->sifraNabavke;

    if ($mysqli->query($sql)) {
        echo json_encode(new Response(1, "Narud\zbina je izbrisan."));
        return true;
    } else {
        echo json_encode(new Response(0, "Narudzbina je trenutno u upotrebi."));
        return false;
    }
}

public function edit(){
    include_once('dbBroker.php');
    global $mysqli;
    $query = "UPDATE lekovi SET sifra = '" . $this->sifra . "', kolicina = '" . $this->kolicina . "', id = '" . $this->id . "', datum = '" . $this->datum . "' WHERE sifraNabavke = $this->sifraNabavke";
    if ($mysqli->query($query)) {
        return true;
    } else {
        return false;
    }
}   



}

?>
  

 



