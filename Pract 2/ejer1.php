<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor y Menor de Tres Números</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Evaluar Mayor y Menor de Tres Números</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="num1" class="form-label">Número 1</label>
                                <input type="number" class="form-control" id="num1" name="num1" required step="1" min="0">
                            </div>
                            <div class="mb-3">
                                <label for="num2" class="form-label">Número 2</label>
                                <input type="number" class="form-control" id="num2" name="num2" required step="1" min="0">
                            </div>
                            <div class="mb-3">
                                <label for="num3" class="form-label">Número 3</label>
                                <input type="number" class="form-control" id="num3" name="num3" required step="1" min="0">
                            </div>
                            <button type="submit" class="btn btn-primary">Evaluar</button>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $num1 = intval($_POST["num1"]); //para convertir a decimal
                            $num2 = intval($_POST["num2"]);
                            $num3 = intval($_POST["num3"]);

                            $mayor = max($num1, $num2, $num3);
                            $menor = min($num1, $num2, $num3);
                            
                            echo '<div class="mt-4 alert alert-success">';
                            echo "El número mayor es: $mayor <br>";
                            echo "El número menor es: $menor";
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <!---<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
