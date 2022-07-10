<?php
include ('glavna.php');
include ('model/OdeljenjeK.php');


if(isset($_POST['save'])){
    $odeljenje= new OdeljenjeK($_POST['id'], $_POST['naziv']);
    $odeljenje->addNew();
    header('Location: odeljenje.php');
}
?>


<div class="container">
    <form class="well form-horizontal" action=" " method="post" id="album_form">
        <fieldset>

            <legend>Dodaj novo odeljenje</legend>

            <div class="form-group">
            <label class="col-md-4 control-label">ID</label>
                <div class="col-md-4">
                    <input name="id" placeholder="ID" class="form-control" type="text" required minlength="1">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Naziv odeljenja</label>
                <div class="col-md-4">
                    <input name="naziv" placeholder="Naziv odeljenja" class="form-control" type="text">
                </div>

            </div>  
            
            
            
                <div class="col-md-4 form-inline">
                    <button type="submit" name="save" class="btn btn-primary">Sačuvaj!</button>
                </div>
            </div>  

        </fieldset>
    </form>
</div>
