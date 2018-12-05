<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factorial de un número</title>
</head>

<body>
    
    <!-- 
        La variable global $PHP_SELF sirve para enviar el formulario
        al mismo fichero.
    -->
    <form action="<?php $PHP_SELF ?>" method="post">
        Introduce el número para hallar su factorial:<input type="text" name="numfact" id="">
        <input type="submit" value="Calcular">
    </form>
    <?php
        $factorial= 1;
        $numfact = $_POST['numfact'];
        
        if (isset($_POST['numfact']) && is_numeric($_POST['numfact'])) {
            
        for ($cont = 1; $cont <= $numfact ; $cont++) { 
            $factorial *= $cont;
        }
        echo "El factorial de ".$numfact." es: ".$factorial."<br>";
        } else {
            echo "Debe introducir un número";
        }      
    ?>
</body>

</html>