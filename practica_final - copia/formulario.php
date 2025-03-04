<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Personas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Formulario de Empleado</h1>

    <!-- Formulario para ingresar nombre, apellido, y seleccionar criterio de búsqueda -->
    <form action="index.php" method="GET">
        <fieldset>
            <legend>Formulario</legend>
            <label for="valor">Valor a buscar:</label>
            <input type="text" id="valor" name="valor" placeholder="Ingresa nombre o apellido" value="<?php echo isset($_GET['valor']) ? htmlspecialchars($_GET['valor']) : ''; ?>">
            <br><br>

            <label for="criterio">Buscar por:</label>
            <select id="criterio" name="criterio">
                <option value="nombre" <?php echo isset($_GET['criterio']) && $_GET['criterio'] == 'nombre' ? 'selected' : ''; ?>>Nombre</option>
                <option value="apellido" <?php echo isset($_GET['criterio']) && $_GET['criterio'] == 'apellido' ? 'selected' : ''; ?>>Apellido</option>
            </select>
            <br><br>

            <button type="submit">Buscar</button>
        </fieldset>
    </form>

    <!-- Resultados de la búsqueda -->
    <fieldset>
        <legend>Resultado</legend>
        <?php if (count($personas) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Años de trabajo</th>
                        <th>Tipo de Empleado</th>
                        <th>Regalo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($personas as $persona): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($persona->nombre); ?></td>
                            <td><?php echo htmlspecialchars($persona->apellido); ?></td>
                            <td><?php echo htmlspecialchars($persona->años_tr); ?></td>
                            <td><?php echo htmlspecialchars($persona->tipoEmpleado()); ?></td>
                            <td><?php echo htmlspecialchars($persona->regalo); ?></td>
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