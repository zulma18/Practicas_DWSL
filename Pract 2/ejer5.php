<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galardonar a Empleados</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Calcular Bono de Empleado</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre del Empleado</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="anios" class="form-label">Años Trabajando</label>
                                <input type="number" class="form-control" id="anios" name="anios" required min="0">
                            </div>
                            <button type="submit" class="btn btn-primary">Calcular Bono</button>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $nombre = htmlspecialchars($_POST["nombre"]);
                            $anios = intval($_POST["anios"]);
                            $bono = 0;

                            // Determina el bono de acuerdo a los años trabajados
                            if ($anios >= 10) {
                                $bono = 2000.00;
                            } elseif ($anios >= 5) {
                                $bono = 1000.00;
                            } elseif ($anios >= 3) {
                                $bono = 700.00;
                            } elseif ($anios >= 2) {
                                $bono = 500.00;
                            } else {
                                $bono = 0; // No aplica para bono si tiene menos de 2 años
                            }

                            // Mostrar los resultados
                            echo '<div class="mt-4 alert alert-info">';
                            echo "<strong>Empleado:</strong> $nombre<br>";
                            echo "<strong>Años Trabajados:</strong> $anios<br>";
                            if ($bono > 0) {
                                echo "<strong>Bono a recibir:</strong> $$bono.00";
                            } else {
                                echo "El empleado no aplica para un bono.";
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
