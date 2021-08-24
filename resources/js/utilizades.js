var url = 'http://127.0.0.1:8000';

function llenarDatosServicio(id) {
    var url = URL + "categorias/show/";
    //console.log(external);
    $.ajax({
        url: url,
        dataType: 'json',
        data: 'id=' + id,
        type: 'GET',
        success: function(data, textStatus, jqXHR) {
            console.log(data);

        }
    });
};

