<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <!-- A través de un formulario recogemos los datos introducidos por el usuario.
        en action deberemos introducir el nombre del archivo php donde enviaremos los datos
        para su procesamiento -->
    <form action="datos-x-GET.php" method="get" name="ejemplo">Introduce un número para mostrar su tabla de multiplicar: 
    <input type="text" name="numero">
    <input type="submit" value="enviar">
    </form>
    <?php
        /* con isset comprobamos que la variable numero esta definida y con is_numeric si es un número */
        if (isset($_GET['numero']) && is_numeric($_GET['numero'])) {
            $numero = $_GET['numero'];
        } else {
            $numero = 5;
            echo "<p>Debe introducir un número</p>";
            echo "<p>Número por defecto: 5</p>";
        }
              
        echo "<h2>Tabla de multiplicar del número: ".$numero."</h2>";
        for ($i=1; $i <= 10 ; $i++) { 
            echo $i." x ".$numero." = ".($i*$numero)."<br>";
        }

    ?>
</body>
</html>