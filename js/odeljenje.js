$(document).ready(function () {

    $("#odeljenje-table").tablesorter();

});

function izmeniOdeljenje(id) {
    $.ajax({
        type: 'GET',
        url: 'izmeniOdeljenje.php',
        data: 'id=' + id,
        cache: false,
        success: function (response) {
            $('#container').hide();
            $('#odeljenje-edit').append(response);
        },
        error: function (error) {
            alert("Error editing song: " + error.status);
        }
    });
}

function obrisiOdeljenje(id) {
    $.ajax({
        type: 'GET',
        url: 'obrisiOdeljenje.php',
        data: 'id=' + id,
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
            alert("Greška pri brisanju odeljenja: " + error.status);
        }
    });
}