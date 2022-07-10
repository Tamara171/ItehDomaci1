<?php

include_once('response.php');

class Lista
{
public $sifra;
public $nazivLeka;
public $mg;


public function __construct($sifra,$nazivLeka,$mg){
    $this->sifra=$sifra;
    $this->nazivLeka=$nazivLeka;
    $this->mg=$mg;
 
    

}
public static function getAll()
{
    include_once('dbBroker.php');
    global $mysqli;
    $sql = "SELECT * FROM lista";

    if(!($result = $mysqli->query($sql))) {
        echo "ERROR" . $mysqli->mysql_error;
        exit();
    }

    $arrayResult = array();
    while($row = $result->fetch_object()) {
        $lista = new Lista($row->sifra,$row->nazivLeka,$row->mg);
        
        array_push($arrayResult, $lista);
    }
    return $arrayResult;
}

public function addNew()
{
    include_once('dbBroker.php');
    global $mysqli;
    $query = "INSERT INTO lista(sifra,nazivLeka,mg) VALUES 
    ('"
        . $mysqli->real_escape_string($this->sifra) . "','"
        . $mysqli->real_escape_string($this->nazivLeka) . "','"
        . $mysqli->real_escape_string( $this->mg). "
         
    ')";

        if ($mysqli->query($query)) {
            return true;
        }
        else {
            return false;
        }


}

public static function getById($sifra){    
    include_once ('dbBroker.php');
    global $mysqli;

    $sql = "SELECT * FROM lista where sifra=".$sifra;

    if(!($result = $mysqli->query($sql))) {
        echo "ERROR" . $mysqli->mysql_error;
        exit();
    }
    $lista = null;
    while($row = $result->fetch_object()){
        $lista = new Lista($row->sifra, $row->nazivLeka, $row->mg);
        
    }

    return $lista;
}
public function deleteById(){
    include_once ('dbBroker.php');
    global $mysqli;

    $sql = "DELETE FROM lista WHERE sifra=".$this->sifra;

    if ($mysqli->query($sql)) {
        echo json_encode(new Response(1, "Lek  je izbrisan."));
        return true;
    } else {
        echo json_encode(new Response(0, "Lek je trenutno u upotrebi."));
        return false;
    }
}

public function edit(){
    include_once('dbBroker.php');
    global $mysqli;
    $query = "UPDATE lista SET nazivLeka = '" . $this->nazivLeka . "', mg = '" . $this->mg .  "' WHERE sifra = $this->sifra";
    if ($mysqli->query($query)) {
        return true;
    } else {
        return false;
    }
}   



}

?>
  

 



