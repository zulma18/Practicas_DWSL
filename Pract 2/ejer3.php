<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificar Tipo de Triángulo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Identificar Tipo de Triángulo</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="lado1" class="form-label">Lado 1</label>
                                <input type="number" class="form-control" id="lado1" name="lado1" required min="1">
                            </div>
                            <div class="mb-3">
                                <label for="lado2" class="form-label">Lado 2</label>
                                <input type="number" class="form-control" id="lado2" name="lado2" required min="1">
                            </div>
                            <div class="mb-3">
                                <label for="lado3" class="form-label">Lado 3</label>
                                <input type="number" class="form-control" id="lado3" name="lado3" required min="1">
                            </div>
                            <button type="submit" class="btn btn-primary">Identificar Triángulo</button>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $lado1 = intval($_POST["lado1"]);
                            $lado2 = intval($_POST["lado2"]);
                            $lado3 = intval($_POST["lado3"]);

                            // Verifica si los lados pueden formar un triángulo
                            if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
                                if ($lado1 == $lado2 && $lado2 == $lado3) {
                                    $tipoTriangulo = "Equilátero";
                                } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                                    $tipoTriangulo = "Isósceles";
                                } else {
                                    $tipoTriangulo = "Escaleno";
                                }

                                echo '<div class="mt-4 alert alert-success">';
                                echo "El triángulo es: $tipoTriangulo";
                                echo '</div>';
                            } else {
                                echo '<div class="mt-4 alert alert-danger">';
                                echo "Los valores ingresados no forman un triángulo válido.";
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
