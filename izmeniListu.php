<?php
include('model/Lista.php');

if(isset($_GET['sifra'])){
    $sifra = $_GET['sifra'];
    $lista =Lista::getById($sifra);
    

}


if(isset($_GET['update'])){
    $lista = Lista::getById($_GET['sifra']);
    $lista->nazivLeka = $_GET['nazivLeka'];
    $lista->mg = $_GET['mg'];
    
    $lista->edit();
    header('Location: lista.php');

}

?>
<div class="container">
    <form class="well form-horizontal" action="izmeniListu.php" method="get" id="band_form1">
        <input hidden name="sifra" value="<?php echo $lista->sifra?>"/>

        <fieldset>

            <legend>Izmeni lekove</legend>

            <div class="form-group">
                <label class="col-md-4 control-label">Naziv leka</label>
                <div class="col-md-4">
                    <input name="nazivLeka" value="<?php echo $lista->nazivLeka; ?>" class="form-control" type="text" required minlength="2">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">mg</label>
                <div class="col-md-4">
                    <input name="mg" value="<?php echo $lista->mg; ?>" class="form-control" type="text" required minlength="2">
                </div>
            </div>

            
           
            <div class="col-md-4 form-inline">
                <button type="submit" id="update" name="update" class="btn btn-primary">Sačuvaj izmene</button>
            </div>
        </fieldset>
    </form>
</div>