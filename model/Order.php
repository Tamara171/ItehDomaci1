<?php

class Order{
public $sifraL;
public $naziv;
public $kolicina;
public $datum;

public static function getAll(mysqli $conn)
{
    $query = "SELECT * FROM lekovi";
    return $conn->query($query);
}


public static function getById($sifraL, mysqli $conn){
    $query = "SELECT * FROM lekovi WHERE sifraL=$sifraL";

    $myObj = array();
  
    if($msqlObj = $conn->query($query)){
        while($red = $msqlObj->fetch_array(1)){
            $myObj[]= $red;
        }
    }

    return $myObj;

}




}





?>