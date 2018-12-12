<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones</title>
</head>
<body>
    <form action="funciones.php" method="post">
        Introduce el número para calcular su factorial:<input type="text" name="num" id="factorial">
        <input type="submit" value="Factorial">
    </form>
    <p>Resultado:</p>
    <?php
    include('varias_funciones.php');//referencia al archivo con nuestras funciones
    if ($_POST) {
        $num = $_POST['num'];
        if (isset($_POST['num']) && is_numeric($_POST['num'])) {
            echo "El factorial de " . $num . " es: " . "<strong>" . factorial($num) . "</strong>";
        } else {
            echo "Debe introducir un número.";
        }
    }
    ?>
</body>
</html>