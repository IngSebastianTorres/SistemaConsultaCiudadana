<?php
session_start();
if(isset($_SESSION["CORREO_ELECTRONICO"])){
	echo"";
}
else{
	echo '<script>window.location="iniciarsesion.php";</script>';
}
$perfil=$_SESSION["CORREO_ELECTRONICO"]; #FUNCION DE SESSION QUE PERMITE MANTENER LA SESSION ACTIVA EN LA WEB PARA TODAS LAS PAGINAS HACER METODO
?>