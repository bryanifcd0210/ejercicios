<?php
// Incluir el archivo con las funciones y sueldos base
include 'datos_empresa.php';

// Recoger los datos enviados por el formulario
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$email = $_GET['email'];
$antiguedad = $_GET['antiguedad'];

// Determinar el sueldo y el incentivo
$sueldoEmpleado = 0;
$incentivo = "";

// Según el tipo de antigüedad, asignar los valores correspondientes
switch ($antiguedad) {
    case 'nuevo':
        $sueldoEmpleado = $sueldoEmpleadoNuevo;
        $incentivo = incentivoEmpleadoNuevo();
        break;
    case 'medio':
        $sueldoEmpleado = $sueldoEmpleadoMedio;
        $incentivo = incentivoEmpleadoMedio();
        break;
    case 'honor':
        $sueldoEmpleado = $sueldoEmpleadoHonor;
        $incentivo = incentivoEmpleadoHonor();
        break;
}

// Incremento por beneficios
$incrementoPorBeneficios = 800;
$sueldoFinal = $sueldoEmpleado + $incrementoPorBeneficios;

// Generar el script de JavaScript para mostrar el alert
echo "<script type='text/javascript'>
    alert('🎄 ¡Feliz Navidad $nombre $apellidos! 🎄\\n\\nComo empleado $antiguedad, te corresponde el siguiente incentivo de Navidad: $incentivo.\\n\\nTu sueldo este mes será de $sueldoFinal euros por beneficios anuales.\\n\\n¡Gracias por tu esfuerzo y dedicación!');
</script>";
?>
