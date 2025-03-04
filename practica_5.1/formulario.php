<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Personas</title>
</head>
<body>
    <h1>Formulario de Personas</h1>

    <!-- Formulario para ingresar nombre, apellido, edad y seleccionar criterio de búsqueda -->
    <form action="index.php" method="GET">
        <fieldset>
            <legend>Formulario</legend>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa el nombre" value="<?php echo isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : ''; ?>">
            <br><br>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ingresa el apellido" value="<?php echo isset($_GET['apellido']) ? htmlspecialchars($_GET['apellido']) : ''; ?>">
            <br><br>

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" placeholder="Ingresa la edad" value="<?php echo isset($_GET['edad']) ? htmlspecialchars($_GET['edad']) : ''; ?>">
            <br><br>

            <label for="criterio">Buscar por:</label>
            <select id="criterio" name="criterio">
                <option value="nombre" <?php echo isset($_GET['criterio']) && $_GET['criterio'] == 'nombre' ? 'selected' : ''; ?>>Nombre</option>
                <option value="apellido" <?php echo isset($_GET['criterio']) && $_GET['criterio'] == 'apellido' ? 'selected' : ''; ?>>Apellido</option>
                <option value="edad" <?php echo isset($_GET['criterio']) && $_GET['criterio'] == 'edad' ? 'selected' : ''; ?>>Edad</option>
            </select>
            <br><br>

            <button type="submit">Buscar</button>
        </fieldset>
    </form>

    <!-- Resultados de la búsqueda -->
    <fieldset>
        <legend>Resultado</legend>
        <?php if (isset($personas) && count($personas) > 0): ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($personas as $persona): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($persona->nombre); ?></td>
                            <td><?php echo htmlspecialchars($persona->apellido); ?></td>
                            <td><?php echo htmlspecialchars($persona->edad); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No se encontraron resultados.</p>
        <?php endif; ?>
    </fieldset>
</body>
</html>
