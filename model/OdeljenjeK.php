<?php

include_once('response.php');

class OdeljenjeK
{
public $id;
public $naziv;




public function __construct($id,$naziv){
    $this->id=$id;
    $this->naziv=$naziv;
    
    

}
public static function getAll()
{
    include_once('dbBroker.php');
    global $mysqli;
    $sql = "SELECT * FROM odeljenje";

    if(!($result = $mysqli->query($sql))) {
        echo "ERROR" . $mysqli->mysql_error;
        exit();
    }

    $arrayResult = array();
    while($row = $result->fetch_object()) {
        $odeljenje = new OdeljenjeK($row->id,$row->naziv);
        
        array_push($arrayResult, $odeljenje);
    }
    return $arrayResult;
}

public function addNew()
{
    include_once('dbBroker.php');
    global $mysqli;
    $query = "INSERT INTO odeljenje(id,naziv) VALUES 
    ('"
        . $mysqli->real_escape_string($this->id) . "','"
        . $mysqli->real_escape_string($this->naziv) . "
    ')";

        if ($mysqli->query($query)) {
            return true;
        }
        else {
            return false;
        }


}
public static function getById($id){    
    include_once ('dbBroker.php');
    global $mysqli;

    $sql = " SELECT * FROM odeljenje WHERE id=".$id;

    if(!($result = $mysqli->query($sql))) {
        echo "ERROR" . $mysqli->mysql_error;
        exit();
    }
    #$odeljenje = null;
    while($row = $result->fetch_object()){
        $odeljenje= new OdeljenjeK($row->id,$row->naziv);
        
    }

    return $odeljenje;
}
public function deleteById(){
    include_once ('dbBroker.php');
    global $mysqli;

    $sql = "DELETE FROM odeljenje WHERE id=".$this->id;

    if ($mysqli->query($sql)) {
        echo json_encode(new Response(1, "Odeljenje je izbrisano."));
        return true;
    } else {
        echo json_encode(new Response(0, "Odeljenje je trenutno u upotrebi."));
        return false;
    }
}

public function edit(){
    include_once('dbBroker.php');
    global $mysqli;
    $query = "UPDATE odeljenje SET naziv = '" .$this->naziv .  "' WHERE id = $this->id";
    if ($mysqli->query($query)) {
        return true;
    } else {
        return false;
    }
}  

public function edit2(){
    include_once('dbBroker.php');
    global $mysqli;
    $query = "UPDATE odeljenje SET naziv = '" . $this->naziv .  "' WHERE id = $this->id";
    if ($mysqli->query($query)) {
        return true;
    } else {
        return false;
    }
}


}

?>
  