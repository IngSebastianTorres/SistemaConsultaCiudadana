<?php
session_start(); 
session_destroy();
echo "cesion cerrada";
echo "<script> window.location='/SistemaDeConsultaCiudadana/views/pages/inicio/iniciarsesion.php';</script>";
?>

