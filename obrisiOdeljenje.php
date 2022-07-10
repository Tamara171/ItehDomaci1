<?php
include ('model/OdeljenjeK.php');

if (isset ($_GET['id'])){
    $id=$_GET['id'];
    $id = OdeljenjeK::getById($id);
    $id->deleteById();
}