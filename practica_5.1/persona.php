<?php
class Persona {
    public $nombre;
    public $apellido;
    public $edad;

    // Constructor para inicializar los valores
    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    // Método estático para obtener una lista de personas registradas
    public static function obtenerPersonas() {
        return [
            new Persona("Juan", "Pérez", 25),
            new Persona("Ana", "Gómez", 30),
            new Persona("Pedro", "Sánchez", 22),
            new Persona("María", "Lopez", 28),
            new Persona("Luis", "Martínez", 35),
        ];
    }

    // Método para buscar personas según un criterio de búsqueda (nombre, apellido, edad)
    public static function buscarPersonasPorCriterio($criterio, $valor) {
        $personas = self::obtenerPersonas();
        $resultado = [];

        foreach ($personas as $persona) {
            // Comprobar si el criterio es nombre, apellido o edad
            if ($criterio === 'nombre' && stripos($persona->nombre, $valor) !== false) {
                $resultado[] = $persona;
            } elseif ($criterio === 'apellido' && stripos($persona->apellido, $valor) !== false) {
                $resultado[] = $persona;
            } elseif ($criterio === 'edad' && stripos($persona->edad, $valor) !== false) {
                $resultado[] = $persona;
            }
        }

        return $resultado;
    }
}
?>
