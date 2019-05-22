function cargar() {

    /* FUNCION QUE GUARDA Y VALIDA EL INGRESO DE EMPLEADOS A LA BASE DE DATOS*/
    $("#btnIngresarEmpleado").click(function() {
        var nombre = document.getElementById('nombre').value;
        var email = document.getElementById('email').value;
        var sexoMasculino_validacion = document.getElementById("sexoM").checked;
        var sexoFemenino_validacion = document.getElementById("sexoF").checked;
        var area = document.getElementById('area').value;
        var descripcion = document.getElementById('descripcion').value;
        var boletin_validacion = document.getElementById("boletin").checked;
        var profesional_validacion = document.getElementById("profesional").checked;
        var gerente_validacion = document.getElementById("gerente").checked;
        var auxAdmin_validacion = document.getElementById("auxAdmin").checked;

        if (sexoMasculino_validacion) {
            var sexo = document.getElementById('sexoM').value;
        }
        if (sexoFemenino_validacion) {
            var sexo = document.getElementById('sexoF').value;
        }

        if (boletin_validacion == true) {
            var boletin = document.getElementById('boletin').value;
        }
        if (profesional_validacion == true) {
            var rolprofesional = document.getElementById("profesional").value;
        }
        if (gerente_validacion == true) {
            var rolgerente = document.getElementById("gerente").value;
        }
        if (auxAdmin_validacion == true) {
            var rolauxAdmin = document.getElementById("auxAdmin").value;
        }

        if (nombre == '') {
            alertify.error('Ingrese Nombre').dismissOthers();
            document.getElementById('nombre').focus();

        } else if (email == '') {
            alertify.error('Ingrese Email').dismissOthers();
            document.getElementById('email').focus();

        } else if (sexoMasculino_validacion == '' && sexoFemenino_validacion == '') {
            alertify.error('Debe INgresar Un sexo').dismissOthers();
            document.getElementById('sexoM').focus();

        } else if (area == '') {
            alertify.error('Ingrese Area').dismissOthers();
            document.getElementById('area').focus();

        } else if (descripcion == '') {
            alertify.error('Ingrese Descripcion').dismissOthers();
            document.getElementById('descripcion').focus();

        } else if (profesional_validacion == false && gerente_validacion == false && auxAdmin_validacion == false) {
            alertify.error('Debe Seleccionar un Rol').dismissOthers();

        } else {

            var datos = "nombre=" + nombre + "&email=" + email + "&sexo=" + sexo + "&area=" + area + "&descripcion=" + descripcion + "&boletin=" + boletin + "&rolprofesional=" + rolprofesional + "&rolgerente=" + rolgerente + "&rolauxAdmin=" + rolauxAdmin;
            $.ajax({
                type: 'post',
                url: "php/ingresarEmpleados.php",
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