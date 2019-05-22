<?php
#error_reporting(0);

require_once("modelo.php");

$datos=array($_POST);

foreach ($datos as $fila) {
    $fila['rolprofesional'];
    $fila['rolgerente'];
     $fila['rolauxAdmin'];
    
    if(!isset($fila['rolprofesional'])){
        echo "no hay seleccion";
    }
}

#print_r($datos);


exit;
$ingresar=new guardar;
$verifica=$ingresar->IngresarEmpleado($_POST);



if(isset($verifica)){
   

?>
<script type="text/javascript">
alertify.success('DATOS GUARDADOS CON EXITO', 1.5, function () {
/*window.location = "../principal/principal.php";*/
});
   /*LIMPIO LOS COMBOBOX */
 <?php
  header('index.php');
 ?>
</script>	
<?php
}else{
?>
 <script type="text/javascript">
 alertify.error('Ocurrio un Error, Intente nuevamente.').dismissOthers();
 </script>
<?php
}

?>