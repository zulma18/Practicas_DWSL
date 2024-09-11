<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ejercicio 6t</title>
</head>
<body>
    <div class="container">
        <div class="card m-auto mt-5">
            <form action="ejer6.php" method="post">
                <div class="row m-5 Justify=content-center">
                    <div class="col-md-4">
                        <label for="">Nombre Empleado:</label>
                        <input type="text" class="form-control" name="txtNombre">
                    </div>
                    <div class="col-md-4">
                        <label for="">Cantidad Vendida:</label>
                        <input type="text" class="form-control" name="txtCantidad">
                    </div>
                    <div class="row Justify-content-center mb-4">
                        <div class="col-md-4">
                            <button tpe="submit" class="btn btn-success">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    $nombre = $_POST["txtNombre"];
    $cantidad = $_POST["txtCantidad"];
    $comision = 0;
    $salario = 850;
    //echo $nombre;
    //echo $cantidad

    if($cantidad >= 10000 && $cantidad < 12000){
        $comision = 10000 *0.03;
    }
    else if ($cantidad >= 12000 && $cantidad < 15000){
        $comision = 12000*0.05;
    }
    else if ($cantidad == 15000){
        $comision = 15000*0.1;
    }
    else {
        $comision = 0;
    }

    echo "<br><br>";
    echo "Empleado: $nombre <br>";
    echo "Comision obtenida: $comision <br>";
    echo "Total Pago: ".($salario+$comision);
        



?>