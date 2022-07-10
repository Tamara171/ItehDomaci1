

<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "bolnicka_apoteka";

global $mysqli;
$mysqli= new mysqli($server, $user, $password, $database);
if ($mysqli->error) {
    printf("Connection failed: %s\n", $mysqli->error);
    exit();
}
$mysqli->set_charset("utf8");

?>