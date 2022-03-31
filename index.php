<?php

require "dbBroker.php";
require "model/user.php";

session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $uname = $_POST['username'];
    $upass = $_POST['password'];


    $korisnik = new User(1, $uname, $upass);

    $odg = User::logInUser($korisnik, $conn);

    if ($odg->num_rows == 1) {
        echo  `
        <script>
        console.log( "Uspešno ste pristupili sistemu");
        </script>
        `;
        $_SESSION['user_id'] = $korisnik->id;
        header('Location: home.php');
        exit();
    } else {
        echo `
        <script>
        console.log( "Neuspešna prijava na sistem");
        </script>
        `;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Pocetna stranica-LogIn</title>
</head>

<body>

    <div class="center">
        <h1>Opšta bolnica Zvornik</h1>
        
        <form method="POST" action="#">
            <div class="inputbox">
                <input type="text" required  class="input" id="input_text" name="username">
                <span>Korisničko ime </span>
            </div>
            <div class="inputbox">
                <input type="text" required  class="input" id="input_text"  name="password">
                <span>Šifra </span>
            </div>
            <div class="inputbox">
                <input type="submit" class="btn btn-primary" name="submit" value="Prijavi se">

            </div>
        </form>
    
    </div>

</body>

</html>