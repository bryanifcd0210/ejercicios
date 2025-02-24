<?php
$curso = "DESARROLLO DE AAPLICACIONES CON TECNOOGIA WEB"; // Variable global

function datos_curso() {
    $fecha = "21 de septiembre";
    $empresa = "CAS TRAINING";
    
    echo "El curso llamado " . $GLOBALS['curso'] . ", de la empresa " . $empresa . ", finaliza el día " . $fecha . ".";
}

datos_curso();
?>
