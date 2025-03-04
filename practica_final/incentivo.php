<?php

class Empleado {
    public $nombre;
    public $apellido;
    public $anios_empresa;
    public $regalo;
    public $sueldoBase;

    public function __construct($nombre, $apellido, $anios_empresa) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->anios_empresa = $anios_empresa;
        $this->asignarRegalo();
    }

    // Asigna el regalo según los años en la empresa
    public function asignarRegalo() {
        if ($this->anios_empresa <= 3) {
            $this->regalo = "Cesta navideña";
            $this->sueldoBase = 2000; // Sueldo base para nuevo
        } elseif ($this->anios_empresa > 3 && $this->anios_empresa <= 5) {
            $this->regalo = "Camiseta personalizada";
            $this->sueldoBase = 2500; // Sueldo base para medio
        } else {
            $this->regalo = "Viaje todo pagado";
            $this->sueldoBase = 3000; // Sueldo base para honor
        }
    }
}

// Crear 5 instancias de empleados (de ejemplo)
$empleados = [
    new Empleado("Juan", "Pérez", rand(0, 3)), // Empleado nuevo
    new Empleado("Ana", "Gómez", rand(3, 5)), // Empleado medio
    new Empleado("Carlos", "Rodríguez", rand(6, 15)), // Empleado honor
    new Empleado("Laura", "Martínez", rand(0, 3)), // Empleado nuevo
    new Empleado("Pedro", "López", rand(6, 15)) // Empleado honor
];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Recibimos los datos del formulario
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $tipo_empleado = $_GET['tipo_empleado'];

    // Establecemos los años en la empresa según el tipo
    if ($tipo_empleado == 'nuevo') {
        $anios_empresa = rand(0, 3);  // Años aleatorios entre 0 y 3
    } elseif ($tipo_empleado == 'medio') {
        $anios_empresa = rand(3, 5);  // Años aleatorios entre 3 y 5
    } else {
        $anios_empresa = rand(6, 15);  // Años aleatorios más de 5
    }

    // Crear el objeto Empleado
    $empleado = new Empleado($nombre, $apellido, $anios_empresa);

    // Calcular el sueldo total con el incremento por beneficios
    $incrementoPorBeneficios = 800;
    $sueldoTotal = $empleado->sueldoBase + $incrementoPorBeneficios;

    // Mensaje a mostrar en el alert
    $mensaje = "Feliz Navidad {$empleado->nombre} {$empleado->apellido}. Al ser un {$tipo_empleado}, te corresponde un {$empleado->regalo} y tu sueldo este mes será de {$sueldoTotal} euros por beneficios anuales.";

    // Mostrar el mensaje como un alert
    echo "<script>alert('$mensaje');</script>";
}

// Aquí puedes imprimir las instancias de los empleados
echo "<h3>Lista de Empleados:</h3>";
echo "<ul>";
foreach ($empleados as $empleado) {
    echo "<li>";
    echo "Nombre: {$empleado->nombre} {$empleado->apellido} | ";
    echo "Años en la empresa: {$empleado->anios_empresa} | ";
    echo "Regalo: {$empleado->regalo} | ";
    echo "Sueldo Base: {$empleado->sueldoBase} euros";
    echo "</li>";
}
echo "</ul>";

?>
