<?php
include ('glavna.php');
include ('model/Lek.php');
include ('model/Lista.php');
include ('model/OdeljenjeK.php');

if(isset($_POST['save'])){
    $lek = new Lek($_POST['sifra'], $_POST['kolicina'], $_POST['id'],  $_POST['datum']);
    
    $lek->addNew();
    header('Location: lekovi.php');
}
?>


<div class="container">
    <form class="well form-horizontal" action=" " method="post" id="album_form">
        <fieldset>

            <legend>Dodaj narudzbu</legend>

           
            <div class="form-group">
                <label class="col-md-4 control-label">Izaberi lek</label>
                <div class="col-md-4 form-inline">
                    <select name="sifra" class="form-control right" required onchange="handleSelectLista(this)">
                        <option value="">Lek</option>
                        <?php
                        $lista = Lista::getAll();
                        if(count($lista) > 0){
                            foreach ($lista as $l) {
                                echo "<option value=".$l->sifra.">".$l->nazivLeka." </option>";
                            }
                        }
                        else {
                            echo "<option value". " " ."> There are no bands available.</option>";
                        }
                        ?>
                         <script type="text/javascript">
                        function handleSelectLista(elm) {
                            if(elm.value == "dodajLek.php"){
                                window.location = elm.value;
                            }
                        }
                    </script>

                        
                    
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
            <label class="col-md-4 control-label">Unesi kolicinu</label>
                <div class="col-md-4">
                    <input name="kolicina" placeholder="Kolicina" class="form-control" type="text" required minlength="2">
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Izaberi odeljenje</label>
                <div class="col-md-4 form-inline">
                    <select name="id" class="form-control right" required onchange="handleSelectOdeljenje(this)">
                        <option value="">Odejenje</option>
                        <?php
                        $odeljenja = OdeljenjeK::getAll();
                        if(count($odeljenja) > 0){
                            foreach ($odeljenja as $o) {
                                echo "<option value=".$o->id.">".$o->naziv." </option>";
                            }
                        }
                        else {
                            echo "<option value". " " ."> There are no genres available.</option>";
                        }
                        ?>
                         <script type="text/javascript">
                        function handleSelectOdeljenje(elm) {
                            if(elm.value == "dodajOdeljenje.php"){
                                window.location = elm.value;
                            }
                        }
                    </script> 
                        
                    </select>

                 
                </div>
                <div class="form-group">
                <label class="col-md-4 control-label">Datum </label>
                <div class="col-md-4">
                    <input name="datum" placeholder="Datum" class="form-control" type="date" required minlength="4" maxlength="4">
                </div>

            </div>  
            </div>  
                <div class="col-md-4 form-inline">
                    <button type="submit" name="save" class="btn btn-primary">Sačuvaj!</button>
                </div>
            </div>  

        </fieldset>
    </form>
</div>
