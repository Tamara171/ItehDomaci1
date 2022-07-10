<?php
include ('model/Lista.php');

if (isset ($_GET['sifra'])){
    $sifra=$_GET['sifra'];
    $lista = Lista::getById($sifra);
    $lista->deleteById();
}
