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

?>
