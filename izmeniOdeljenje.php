<?php
include('model/OdeljenjeK.php');

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $odeljenje =OdeljenjeK::getById($id);
    

}


if(isset($_GET['update'])){
    $odeljenje = OdeljenjeK::getById($_GET['id']);
    $odeljenje->naziv = $_GET['naziv'];
   
    $odeljenje->edit();
    header('Location: odeljenje.php');

}

?>
<div class="container">
    <form class="well form-horizontal" action="izmeniOdeljenje.php" method="get" id="band_form1">
        <input hidden name="id" value="<?php echo $odeljenje->id?>"/>

        <fieldset>

            <legend>Izmeni odeljenje</legend>

            <div class="form-group">
                <label class="col-md-4 control-label">Naziv</label>
                <div class="col-md-4">
                    <input name="naziv" placeholder="Unesite naziv" value="<?php echo $odeljenje->naziv; ?>" type="text" required minlength="2">
                </div>
            </div>

           

           
            <div class="col-md-4 form-inline">
                <button type="submit" id="update" name="update" class="btn btn-primary">Sačuvaj izmene</button>
            </div>
        </fieldset>
    </form>
</div>