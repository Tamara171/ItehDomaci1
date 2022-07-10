<?php
include('model/Lek.php');

if(isset($_GET['sifraL'])){
    $sifraL = $_GET['sifraL'];
    $lekovi =Lek::getById($sifraL);
    //echo '<script>console.log('.$band->id.')</script>';

}


if(isset($_GET['update'])){
    $lekovi = Lek::getById($_GET['sifraL']);
    $lekovi->naziv = $_GET['naziv'];
    $lekovi->datum = $_GET['datum'];
    $lekovi->kolicina = $_GET['kolicina'];
    $lekovi->odeljenje = $_GET['odeljenje'];
    $glumac->edit();
    header('Location: lekovi.php');

}

?>
<div class="container">
    <form class="well form-horizontal" action="izmeniLek.php" method="get" id="band_form1">
        <input hidden name="id" value="<?php echo $lekovi->sifraL?>"/>

        <fieldset>

            <legend>Izmeni lek</legend>

            <div class="form-group">
                <label class="col-md-4 control-label">Naziv</label>
                <div class="col-md-4">
                    <input name="naziv" value="<?php echo $lekovi->naziv; ?>" class="form-control" type="text" required minlength="2">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Datum</label>
                <div class="col-md-4">
                    <input name="datum" value="<?php echo $lekovi->datum; ?>" class="form-control" type="text" required minlength="2">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Kolicina</label>
                <div class="col-md-4">
                    <input name="kolicina" value="<?php echo $lekovi->kolicina; ?>" class="form-control" type="text" required minlength="2">
                </div>
            </div>

            
            <div class="form-group">
                <label class="col-md-4 control-label">Odeljenje</label>
                <div class="col-md-4">
                    <input name="odeljenje" value="<?php echo $lekovi->odeljenje; ?>" class="form-control" type="text" required minlength="2">
                </div>
            </div>
           

           
            <div class="col-md-4 form-inline">
                <button type="submit" id="update" name="update" class="btn btn-primary">Sačuvaj izmene</button>
            </div>
        </fieldset>
    </form>
</div>