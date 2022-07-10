<?php
include ('glavna.php');
include ('model/Lista.php');


if(isset($_POST['save'])){
    $odeljenje= new Lista($_POST['sifra'], $_POST['nazivLeka'], $_POST['mg']);
    $odeljenje->addNew();
    header('Location: Lista.php');
}
?>


<div class="container">
    <form class="well form-horizontal" action=" " method="post" id="album_form">
        <fieldset>

            <legend>Dodaj novi lek</legend>

            <div class="form-group">
            <label class="col-md-4 control-label">Sifra</label>
                <div class="col-md-4">
                    <input name="sifra" placeholder="sifra" class="form-control" type="text" required minlength="1">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Naziv leka</label>
                <div class="col-md-4">
                    <input name="nazivLeka" placeholder="Naziv leka" class="form-control" type="text">
                </div>

            </div>  

            <div class="form-group">
                 <label class="col-md-4 control-label">mg</label>
                <div class="col-md-4">
                    <input name="mg" placeholder="mg" class="form-control" type="text">
                </div>

            </div> 
            
            
                <div class="col-md-4 form-inline">
                    <button type="submit" name="save" class="btn btn-primary">Sačuvaj!</button>
                </div>
            </div>  

        </fieldset>
    </form>
</div>
