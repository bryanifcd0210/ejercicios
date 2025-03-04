<?php
// Incluir el modelo Persona.php
include_once 'Persona.php';

// Variable para almacenar el resultado de la búsqueda
$resultado = '';

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $edad_min = $_POST['edad_min'] ?? 0;
    $edad_max = $_POST['edad_max'] ?? 0;
    $criterio = $_POST['criterio'] ?? '';

    // Lógica de búsqueda según el criterio
    if ($criterio == 'nombre' && !empty($nombre)) {
        $persona = new Persona($nombre, "", 0);
        $resultado = "Buscando por nombre: " . $persona->getNombre();
    } elseif ($criterio == 'apellidos' && !empty($apellidos)) {
        $persona = new Persona("", $apellidos, 0);
        $resultado = "Buscando por apellido: " . $persona->getApellidos();
    } elseif ($criterio == 'edad' && !empty($edad_min) && !empty($edad_max)) {
        $resultado = "Buscando por rango de edad: $edad_min - $edad_max años";
    } elseif ($criterio == 'nombre_apellidos' && !empty($nombre) && !empty($apellidos)) {
        $persona = new Persona($nombre, $apellidos, 0);
        $resultado = "Buscando por nombre: " . $persona->getNombre() . " y apellido: " . $persona->getApellidos();
    } elseif ($criterio == 'edad_rango' && !empty($edad_min) && !empty($edad_max)) {
        $resultado = "Buscando por rango de edad: $edad_min - $edad_max años";
    } else {
        $resultado = "Por favor, complete los campos correctamente.";
    }
}

// Incluir la vista
include 'index.html'; // Esto incluye el formulario HTML y muestra el resultado.
?>
