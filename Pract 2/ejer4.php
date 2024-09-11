<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="ejer4.php" method="post">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Numero del dia a mostrar: </label>
                    <input type="text" class="form-control" name="txtDia">
                </div>
                <div class="col-md-3 mt-4">
                    <button class="btn btn-info">Mostrar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
   if (isset ($_POST["txtDia"])){
        switch($_POST["txtDia"]){
            case 1:
                $dia = "Lunes";
                break;
            case 2:
                $dia = "Martes";
                break;
            case 3:
                $dia = "Miercoles";
                break;  
            case 4:
                $dia = "Jueves";
                break; 
            case 5:
                $dia = "Viernes";
                break; 
            case 6:
                $dia = "Sabado";
                break;    
            case 7:
                $dia = "Domingo";
                break; 
            default:
                echo "Dia no existente";
                break;
        }
   }
   
   echo "<br>";
   echo "Resultado: $dia";

?>