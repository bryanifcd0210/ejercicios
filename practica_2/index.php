<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Piezas LEGO</title>
    <style>
        body{
            background-color:rgb(238, 235, 34);
        }
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .form-group label {
            width: 45%;
        }
        .form-group input, .form-group select {
            width: 45%;
        }
        .form-group input[type="text"] {
            text-align: right;
        }
        .form-group button {
            margin-top: 10px;
            width: 100%;
            padding: 10px;
            background-color:rgb(158, 158, 140);
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Lego Parts</h1>
    <h2>Compra de Piezas LEGO </h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="llantas">Llantas</label>
            <input type="text" id="llantas" name="llantas" placeholder="Cantidad">
        </div>
        <div class="form-group">
            <label for="aceite">Aceite</label>
            <input type="text" id="aceite" name="aceite" placeholder="Cantidad">
        </div>
        <div class="form-group">
            <label for="bujias">Bujías</label>
            <input type="text" id="bujias" name="bujias" placeholder="Cantidad">
        </div>
        <div class="form-group">
            <label for="como-nos-conocio">¿Cómo nos conoció?</label>
            <select id="como-nos-conocio" name="como-nos-conocio">
                <option value="tik_tok">TikTok</option>
                <option value="web">Web</option>
                <option value="otros">Otros</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" name="enviar">Enviar el pedido</button>
        </div>
    </form>

    <?php
    // Precios constantes de las piezas
    $precios = [
        'llantas' => 5, // Precio por llanta
        'aceite' => 3,  // Precio por aceite
        'bujias' => 2   // Precio por bujía
    ];

    if (isset($_POST['enviar'])) {
        // Validar que las cantidades sean números y no vacíos
        $llantas = isset($_POST['llantas']) && is_numeric($_POST['llantas']) ? (int)$_POST['llantas'] : 0;
        $aceite = isset($_POST['aceite']) && is_numeric($_POST['aceite']) ? (int)$_POST['aceite'] : 0;
        $bujias = isset($_POST['bujias']) && is_numeric($_POST['bujias']) ? (int)$_POST['bujias'] : 0;
        $comoNosConocio = isset($_POST['como-nos-conocio']) ? $_POST['como-nos-conocio'] : '';

        // Calcular el total del pedido
        $total = ($llantas * $precios['llantas']) + ($aceite * $precios['aceite']) + ($bujias * $precios['bujias']);

        // Obtener la fecha actual
        $fechaActual = date("Y-m-d H:i:s");

        // Mostrar el resultado
        echo "<h3>Resumen de su pedido:</h3>";
        echo "<p><strong>Llantas:</strong> $llantas x \$" . $precios['llantas'] . " = \$" . ($llantas * $precios['llantas']) . "</p>";
        echo "<p><strong>Aceite:</strong> $aceite x \$" . $precios['aceite'] . " = \$" . ($aceite * $precios['aceite']) . "</p>";
        echo "<p><strong>Bujías:</strong> $bujias x \$" . $precios['bujias'] . " = \$" . ($bujias * $precios['bujias']) . "</p>";
        echo "<p><strong>Total del pedido:</strong> \$" . $total . "</p>";
        echo "<p><strong>¿Cómo nos conoció?</strong> " . ucfirst($comoNosConocio) . "</p>";
        echo "<p><strong>Fecha y hora del pedido:</strong> $fechaActual</p>";
    }
    ?>
</div>

</body>
</html>
