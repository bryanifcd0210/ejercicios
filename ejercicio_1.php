<?php
function imprimirDatos($nombre, $apellido, $direccion) {
    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
    echo "Dirección: " . $direccion . "<br>";
}

$nombre = "Juan";
$apellido = "Pérez";
$direccion = "Calle Falsa 123";

imprimirDatos($nombre, $apellido, $direccion);
?>
