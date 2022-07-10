<?php
include('glavna.php');
include('model/Lek.php');
include('model/OdeljenjeK.php');
include('model/Lista.php');
include('dbBroker.php');


?>

<script type = "text/javascript" src="js/lekovi.js"></script>



<div class="container">
    <table id="lekovi-table" class="table table-hover">
        <thead>
        <tr>
             <th>
                Šifra nabavke
            </th>
            <th>
                 Naziv leka
            </th>
            <th>
               Količina
            </th>

            <th>
                Odeljenje
            </th>
            <th>
                Datum
            </th>
            
        </tr>
        </thead>

        
        <tbody><?php
        $lekovi = Lek::getAll();
        if(count($lekovi) == 0){
            echo "<h3>Ne postoje podaci o lekovima</h3>";
        }
        else{
            foreach ($lekovi as $lek){
                echo "<tr>
                
                    <td>".$lek->sifraNabavke."</td>
                     <td>".Lista::getById($lek->sifra)->nazivLeka." </td>
                     <td>".$lek -> kolicina."</td>
                     <td>".OdeljenjeK::getById($lek->id)->naziv."</td>
                     <td>".$lek-> datum."</td>

  
        </tr>";
            }
        }
        ?>
        </tbody>
    </table>

      <div class="col-md-2" style = "font-family: cursive;">
        <button id="btn-sortiraj" class="btn btn-normal" style="padding: 5px; background-color: yellow; border: 2px solid rgb(89, 157, 224); height:40px;font-size: 15px; border-radius: 15px;" onclick="sortTable()">Sortiraj tabelu</button>
          </div>


        <input type="text" id="myInput" placeholder="Pretraži po nazivu..." style="margin-left:15px; color:black; font-family:cursive; display:inline-block; padding: 5px; background-color:white; border: 2px solid rgb(89, 157, 224); height:40px; width: 200px; font-size: 15px; border-radius: 15px;"onkeyup="funkcijaZaPretragu()">
            
      

        </div>
   <div id="lekovi-edit">

</div>
</body>

<script>

           function funkcijaZaPretragu() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("lekovi-table");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
          }
     

         function sortTable() { 
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("lekovi-table");
            switching = true;

            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[4];
                    y = rows[i + 1].getElementsByTagName("TD")[4];
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
          }

</script>


    
