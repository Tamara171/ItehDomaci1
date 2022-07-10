<?php
include('glavna.php');
include('model/Lista.php');
include('dbBroker.php');


?>

<script type = "text/javascript" src="js/lista.js"></script>



<div class="container">
    <table id="lista-table" class="table table-hover">
        <thead>
        <tr>
            <th>
              Šifra leka
            </th>
            <th>
                Naziv leka
            </th>
           <th>
               [mg]
            </th><th>
               Opcije
            </th>

            

       
        </tr>
        </thead>

        
        <tbody><?php
        $lista = Lista::getAll();
        if(count($lista) == 0){
            echo "<h3>Ne postoje podaci o lekovima na listi</h3>";
        }
        else{
            foreach ($lista as $list){
                echo "<tr>
        <td>".$list->sifra."</td>
        <td>".$list->nazivLeka."</td>
        <td>".$list->mg."</td>

        

        <td>
        <ul class='list-inline m-0'>
        <li class='list-inline-item'>
            <button id='edit_lista' name='edit_lista' onclick='izmeniListu($list->sifra)' class='btn btn-primary btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Izmeni'>Izmeni</button>
        </li>
        <li class='list-inline-item'>
            <button id='delete_lista' name='delete_lista' onclick='obrisiListu($list->sifra)' class='btn btn-success btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Obriši'>Obriši</button>
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
<div id="lista-edit">

</div>
