
function cancelar(){
    if (window.confirm("¿Está seguro de que desea cancelar?")) {
        formulario.reset();
        return;
    }
}

document.addEventListener("DOMContentLoaded", function() {
document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});
function validarFormulario( evento){
    evento.preventDefault();
    let ced=document.getElementById("txtCedula").value;
    let nom=document.getElementById("txtNombre").value;
    let ape=document.getElementById("txtApellido").value;
    let direc=document.getElementById("txtAddress").value;
    let telef=document.getElementById("txtTelef").value; 

    if(ced=="" || nom=="" || ape=="" || direc=="" || telef==""){
        alert("Los campos no pueden quedar vacios");
        return;
    }else{
        let patronTel = /^[9|6]{1}([\d]{2}[-]*){3}[\d]{2}$/
        let patronNombre = /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
        if(ced.length==10 || patronNombre.test(nom)||patronNombre.test(ape)|| patronTel.test(telef)){
            alert("Datos del estudiante registrado");
            return;
        }
        this.submit();
    }
}
