<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promoción Viaje</title>
</head>
<body>
    <h2>Ingrese su edad para calcular el precio del viaje</h2>
    <form method="POST">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        <input type="submit" value="Calcular Precio">
    </form>

    <?php
    $precio_normal = 600;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST['edad'];

        if ($edad < 15) {
            $precio = 0;  
        } elseif ($edad > 50) {
            $precio = $precio_normal * 0.5;  
        } else {
            $precio = $precio_normal; 
        }
        echo "<h3>El precio del viaje es: €" . $precio . "</h3>";
    }
    ?>
</body>
</html>
