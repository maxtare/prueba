<?php
#CLASE CONEXION A LA BD*********************************

	class conexion{
		
      function enlacebd(){
		include("conexion.php");
	    $canal = mysqli_connect($servidor,$usuario,$clave);
		mysqli_select_db($canal,$bd);
		return $canal;	
	}
	}
   

//CLASE QUE SIRVE PARA LISTAR AREAS*************************
	class listaCombo{


		function listaAreas(){

			$canal=new conexion;
			$con=$canal->enlacebd();
			$sql="SELECT * FROM areas";
			$resultado=mysqli_query($con,$sql) or die(mysqli_error());
			return $resultado;
			$cerrar=mysql_close();
			unset($resultado);
		}
	}

	
    
?> 