<?php
// Clase base Empleado
class Empleado {
    public $nombre;
    public $apellido;
    public $años_tr;
    public $regalo;

    public function __construct($nombre, $apellido, $años_tr) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->años_tr = $años_tr;
        $this->regalo = $this->determinarRegalo();
    }

    // Método para determinar el tipo de empleado
    public function tipoEmpleado() {
        if ($this->años_tr <= 5) {
            return "Empleado Nuevo";
        } elseif ($this->años_tr > 5 && $this->años_tr < 10) {
            return "Empleado Normal";
        } else {
            return "Empleado Honor";
        }
    }

    // Método para determinar el regalo basado en los años en la empresa
    public function determinarRegalo() {
        if ($this->años_tr <= 5) {
            return "Regalo: ROLEX";
        } elseif ($this->años_tr > 5 && $this->años_tr < 10) {
            return "Regalo: VIAJE TODO PAGADO";
        } else {
            return "Regalo: COCHE NUEVO";
        }
    }

    // Método estático para buscar empleados por nombre o apellido
    public static function buscarPersonasPorCriterio($criterio, $valor, $personas) {
        $resultado = [];

        foreach ($personas as $persona) {
            // Comprobar si el criterio es nombre, apellido
            if ($criterio === 'nombre' && stripos($persona->nombre, $valor) !== false) {
                $resultado[] = $persona;
            } elseif ($criterio === 'apellido' && stripos($persona->apellido, $valor) !== false) {
                $resultado[] = $persona;
            }
        }

        return $resultado;
    }
}

// Crear 5 instancias de empleados
$empleado1 = new Empleado("Juan", "Perez", 3);
$empleado2 = new Empleado("Ana", "Gomez", 7);
$empleado3 = new Empleado("Carlos", "Martinez", 12);
$empleado4 = new Empleado("Laura", "Hernandez", 2);
$empleado5 = new Empleado("Luis", "Ramirez", 15);

// Guardar las instancias de empleados en un array
$empleados = [$empleado1, $empleado2, $empleado3, $empleado4, $empleado5];

$personas = [];

// Procesar la búsqueda si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['criterio'], $_GET['valor'])) {
    $criterio = $_GET['criterio'];  // 'nombre' o 'apellido'
    $valor = $_GET['valor'];        // Valor a buscar
    
    // Llamar al método de búsqueda de la clase Empleado
    $personas = Empleado::buscarPersonasPorCriterio($criterio, $valor, $empleados);
}
?>