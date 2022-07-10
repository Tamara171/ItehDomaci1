<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "style.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>

    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet"> 


    <title>Bolnička apoteka</title>
    
</head>
<body>
    <div class = "container">
        <nav>
            <div class = "logo">
                <span>Bolnička apoteka Opšte bolnice Zvornik</span>
                <img class="logoSlika" src="slike/grb.jpg" height="65px" width="100px" >
              
            </div>

            <ul>
                <li><a href="index.php">Početna</a></li>
                <li><a href="lista.php">Lekovi</a></li>
                <li><a href="odeljenje.php">Odeljenja</a></li>
                <li><a href="lekovi.php">Nabavka</a></li>
              
                
                
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dodaj<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="dodajLek.php">Novi lek</a></li>
                        <li><a href="dodajOdeljenje.php">Novo odeljenje</a></li>
                        <li><a href="dodajNabavku.php">Nova narudzbina</a></li>
                        
                    </ul>
                </li>
           
            </ul>
        </nav>

    </div>



</body>
</html>