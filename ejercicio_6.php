<!-- Formulario HTML -->
<form method="POST">
    Edad: <input type="number" name="edad" required>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST['edad'];
    $precio = 600;

    if ($edad < 15) {
        $precio = 0;
        echo "El viaje es gratis.";
    } elseif ($edad > 50) {
        $precio = 600 * 0.5;
        echo "El viaje tiene un descuento del 50%, el precio es: " . $precio;
    } else {
        echo "El precio normal del viaje es: " . $precio;
    }
}
?>
