//obtener informacion de la tabla
function obtenerDatos(datos1) {
        var d = datos1.split('||');
        $('#Ids').val(d[0]);
        $('#txtCedu').val(d[1]);
        $('#txtNom').val(d[2]);
        $('#txtApell').val(d[3]);
        $('#txtDire').val(d[4]);
        $('#txtTelef').val(d[5]);
    }

function obtenerDatos2(datos1) {
        var d = datos1.split('||');
        $('#Ids').val(d[0]);
        $('#txtMater').val(d[1]);
        $('#txtDescr').val(d[2]);
    }
//AJAX para actualizar la información 
function actualizarDatos(){

    let id1=$('#Ids').val();
    let c=$('#txtCedu').val();
    let n=$('#txtNom').val();
    let a=$('#txtApell').val();
    let d=$('#txtDire').val();
    let t=$('#txtTelef').val();

    $.ajax({
    url: '?c=updateDatos',
    type: 'post',
    data: {
    'Ids': id1,
    'txtCedu': c,   
    'txtNom': n,
    'txtApell': a,
    'txtDire': d,
    'txtTelef': t,
    },
    success: function(response){
    $('#txtCedu').val('');
    $('#txtNom').val('');
    $('#txtApell').val('');
    $('#txtDire').val('');
    $('#txtTelef').val('');
    location.reload();
}
    }); 
    }
    function actualizarMateria(){

    let id1=$('#Ids').val();
    let m=$('#txtMater').val();
    let des=$('#txtDescr').val();

    $.ajax({
    url: '?c=updateM',
    type: 'post',
    data: {
    'Ids': id1,
    'txtMater': m,   
    'txtDescr': des,
    },
    success: function(response){
    $('#txtMater').val('');
    $('#txtDescr').val('');
    location.reload();
}
    }); 
    }