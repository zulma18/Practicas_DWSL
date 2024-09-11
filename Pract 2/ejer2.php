<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Generar Tabla de Multiplicar</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="numero" class="form-label">Número Entero</label>
                                <input type="number" class="form-control" id="numero" name="numero" required step="1" min="0">
                            </div>
                            <button type="submit" class="btn btn-primary">Generar Tabla</button>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $numero = intval($_POST["numero"]); // Asegura que el número sea entero

                            echo '<div class="mt-4">';
                            echo "<h4>Tabla de multiplicar del número $numero:</h4>";
                            echo '<ul class="list-group">';
                            
                            for ($i = 1; $i <= 10; $i++) {
                                $resultado = $numero * $i;
                                echo "<li class='list-group-item'>$numero x $i = $resultado</li>";
                            }

                            echo '</ul>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
