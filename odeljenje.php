<?php
include('glavna.php');
include('model/OdeljenjeK.php');
include('dbBroker.php');


?>

<script type = "text/javascript" src="js/odeljenje.js"></script>



<div class="container">
    <table id="odeljenje-table" class="table table-hover">
        <thead>
        <tr>
            <th>
              ID
            </th>
            <th>
                Naziv odeljenja
            </th>
           <th>
                Opcije
            </th>
            

       
        </tr>
        </thead>

        
        <tbody><?php
        $odeljenje = OdeljenjeK::getAll();
        if(count($odeljenje) == 0){
            echo "<h3>Ne postoje podaci o odeljenjima</h3>";
        }
        else{
            foreach ($odeljenje as $odelj){
                echo "<tr>
        <td>".$odelj->id."</td>
        <td>".$odelj->naziv."</td>
        

        <td>
        <ul class='list-inline m-0'>
        <li class='list-inline-item'>
            <button id='edit_odeljenje' name='edit_odeljenje' onclick='izmeniOdeljenje($odelj->id)' class='btn btn-primary btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Izmeni'> Izmeni </button>
        </li>
        <li class='list-inline-item'>
            <button id='delete_odeljenje' name='delete_odeljenje' onclick='obrisiOdeljenje($odelj->id)' class='btn btn-success btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Obriši'> Obriši </button>
        </li>
       
    </ul>
    </td>
        
        </tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>
<div id="odeljenje-edit">

</div>
