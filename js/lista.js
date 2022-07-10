$(document).ready(function () {

    $("#lista-table").tablesorter();

});

function izmeniListu(sifra) {
    $.ajax({
        type: 'GET',
        url: 'izmeniListu.php',
        data: 'sifra=' + sifra,
        cache: false,
        success: function (response) {
            $('#container').hide();
            $('#lista-edit').append(response);
        },
        error: function (error) {
            alert("Error editing song: " + error.status);
        }
    });
}

function obrisiListu(sifra) {
    $.ajax({
        type: 'GET',
        url: 'obrisiListu.php',
        data: 'sifra=' + sifra,
        dataType: 'json',   
        cache: false,
        success: function (response) {
            if (response.status == 1) {
                location.reload();
            }
            else {
                alert(response.message);
            }
        },
        error: function (error) {
            alert("Error deleting list: " + error.status);
        }
    });
}