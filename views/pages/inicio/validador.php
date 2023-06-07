<?php
session_start(); 
?>

<!doctype html>


<head><title>  Validando....</title></head>
<body >
<?php
$conexion=mysqli_connect("localhost","root","snopdog","bd_usuarios_sistema") or die("No se puede entablar conexion con el servidor de la base de datos");

if (isset($_POST["boton"])){
	$usuario=$_POST["corr"];
	$password=$_POST["con"];
	$sql="SELECT * from administrador where CORREO_ELECTRONICO='$usuario' and CONTRASEÑA='$password'";
	$result = $conexion->query($sql);
	if(mysqli_num_rows($result)>0){
		$row = $result->fetch_assoc();
		$_SESSION["CORREO_ELECTRONICO"]=$row["CORREO_ELECTRONICO"];
		echo "Iniciando sesion para".$_SESSION["CORREO_ELECTRONICO"]."<p>";
		echo "<script> window.location='../../../';</script>";
	}
	else{
		echo "<script> alert ('Usuario o contraseña incorrectos o inexistentes.');</script>";
		echo "<script> window.location='iniciarsesion.php'; </script>";
	}

	/*if(pg_num_rows($query)>0){
		$row=pg_fetch_array($query);
		$_SESSION["CORREO_ELECTRONICO"]=$row["CORREO_ELECTRONICO"];
		echo "Iniciando sesion para".$_SESSION["CORREO_ELECTRONICO"]."<p>";
		echo "<script> window.location='../../../template.php';</script>";
	}
	else{
		echo "<script> alert ('Usuario o contraseña incorrectos o inexistentes.');</script>";
		echo "<script> window.location='iniciarsesion.php'; </script>";
	}*/
}
  

?>

</body>