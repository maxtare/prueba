<?php

require_once('php/modelo.php');
$areas= new listaCombo;
$lista=$areas->listaAreas();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CREAR EMPLEADO</title>

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="include/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="include/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="include/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="include/alertifyjs/css/alertify.min.css">
    

    <script src="include/jquery/jquery-3.3.1.js"></script>
    <script src="include/bootstrap/bootstrap.js"></script>
    <script src="include/bootstrap/bootstrap.min.js"></script>
    <script src="include/alertifyjs/alertify.js"></script>
    <script src="include/alertifyjs/alertify.min.js"></script>
    <script src="js/function.js"></script>
    <script language="javascript">
        $(document).ready(cargar);
    </script>

</head>
    <body>

<div class="container">
<div class="formcontent">

<div class="alert alert-warning" role="alert">
  <span>Los Campos Con Asteriscos(*) Son Obligatorios</span>
</div>

<form name="miForm">
<div class="form-group row" name="miForm">
    <label for="inputText" class="col-sm-2 col-form-label">Nombre Completo *</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">
    </div>
  </div>  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email *</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
    <label for="input" class="col-sm-2 col-form-label">Sexo *</label>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="sexoM" value="M">
          <label class="form-check-label" for="gridRadios1">
           &nbsp;&nbsp;&nbsp;&nbsp;Masculino
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="sexoF" value="F">
          <label class="form-check-label" for="gridRadios2">
          &nbsp;&nbsp;&nbsp;&nbsp;Femenino
          </label>
        </div>
      </div>
    </div>
  </fieldset>

<div class="input-group">
<label for="inputText">Area *</label>
<select id="area" name="area" class="form-control" tabindex="5">
<option value="">.....</option>
<?php while($fila=mysqli_fetch_assoc($lista)){ ?>
<?php echo '<option value="'.$fila['id_Areas'].'">'.$fila['Nombre'].'</option>';?>
<?php } ?>
</select>
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion *</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Descripcion de la Experiencia del Empleado"></textarea>
  </div>
</br></br></br>
  <div class="chkEmpleados">
    <input type="checkbox" class="form-check-input" id="boletin" value="1">
    <label class="form-check-label" for="exampleCheck1"> &nbsp;&nbsp;&nbsp;&nbsp;Deseo Recibir Boletin Informativo</label>
  </div>
  </br></br>
  <div class="chkEmpleados">
    <input type="checkbox" class="form-check-input" id="profesional" name="profesional" value="1" required>
    <label class="form-check-label" for="exampleCheck1"> &nbsp;&nbsp;&nbsp;&nbsp;Profesional de Proyectos-Desarrollador</label>
  </div>
  </br>
  <div class="chkEmpleados">
    <input type="checkbox" class="form-check-input" id="gerente" name="gerente" value="2">
    <label class="form-check-label" for="exampleCheck1"> &nbsp;&nbsp;&nbsp;&nbsp;Gerente Estratégico</label>
  </div>
  </br>
  <div class="chkEmpleados">
    <input type="checkbox" class="form-check-input" id="auxAdmin" name="auxAdmin" value="3">
    <label class="form-check-label" for="exampleCheck1"> &nbsp;&nbsp;&nbsp;&nbsp;Auxiliar Administrativo</label>
</br></br>
    <div class="col-sm-10">
      <button type="button" id="btnIngresarEmpleado" name="btnIngresarEmpleado" class="btn btn-primary">Guardar</button>
    </div>
</div>

  
   
  </div>
</form>
<div id="respuesta"></div>

</div> 
</div>


    
    </body>
</html>