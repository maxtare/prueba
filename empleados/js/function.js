function cargar() {

    /* FUNCION QUE GUARDA Y VALIDA EL INGRESO DE EMPLEADOS A LA BASE DE DATOS*/
    $("#btnIngresarEmpleado").click(function() {
        var nombre = document.getElementById('nombre').value;
        var email = document.getElementById('email').value;
        var sexo = document.getElementById('sexo').value;
        var area = document.getElementById('area').value;
        var descripcion = document.getElementById('descripcion').value;
        var boletin = document.getElementById('boletin').value;
        var profesional = document.getElementById('profesional').value;
        var gerente = document.getElementById('gerente').value;
        var auxAdmin = document.getElementById('auxAdmin').value;


        if (nombre == '') {
            alertify.error('Ingrese Nombre').dismissOthers();
            document.getElementById('nombre').focus();

        } else if (email == '') {
            alertify.error('Ingrese Email').dismissOthers();
            document.getElementById('email').focus();

        } else if (sexo == '') {
            alertify.error('Seleccione un Sexo').dismissOthers();
            document.getElementById('sexo').focus();

        } else if (area == '') {
            alertify.error('Ingrese Area').dismissOthers();
            document.getElementById('area').focus();

        } else if (descripcion == '') {
            alertify.error('Ingrese Descripcion').dismissOthers();
            document.getElementById('descripcion').focus();

        } else if (profesional == '' || gerente == '' || auxAdmin == '') {
            alertify.error('Debe Seleccionar un Rol').dismissOthers();
            document.getElementById('profesional').focus();

        } else {

            var datos = "tipoequipo=" + tipoequipo + "&marca=" + marca + "&memoria=" + memoria + "&disco=" + disco + "&referencia=" + referencia + "&serial=" + serial + "&color=" + color + "&so=" + so + "&office=" + office + "&pantalla=" + pantalla + "&procesador=" + procesador + "&frmtime=" + frmtime;
            $.ajax({
                type: 'post',
                url: "../php/IngresaEmpleados.php",
                data: datos,
                dataType: 'html',
                success: function(data) {
                    $("#respuesta").html(data); /*aca se coloca el div donde se quiere mostrar el resultado*/
                    /*alert("Registro Borrado con Exito!!");	*/
                }
            });
        }
    });

}