<?php
// Incluir el modelo Persona
require_once 'Persona.php';

// Inicializar el array de personas
$personas = [];

// Verificar si hay criterios de búsqueda
if (isset($_GET['criterio']) && isset($_GET[$_GET['criterio']])) {
    $criterio = $_GET['criterio'];
    $valor = $_GET[$criterio];

    // Buscar las personas que coincidan con el criterio
    $personas = Persona::buscarPersonasPorCriterio($criterio, $valor);
}

// Incluir la vista y pasar las personas encontradas
require_once 'formulario.php';
?>
