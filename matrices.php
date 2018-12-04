<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrices</title>
</head>
<body>
    <h2>Arrays</h2>
    <h4>Operaciones:</h4>
    <?php
        /* Para crear una matriz tendremos que poner después del nombre y el signo igual, la palabra 
        reservada array y entre paréntesis los datos que contendra. Pueden ser números, cadenas de texto, 
        booleanos, objetos... Cada dato ocupará una posicion en el array. El índice del array empieza por cero */
        $meses = array("Enero", 
        "Febrero", 
        "Marzo", 
        "Abril", 
        "Mayo", 
        "Junio", 
        "Julio", 
        "Agosto", 
        "Septiembre", 
        "Octubre", 
        "Noviembre",
        "Diciembre");
        /* con print_r nos muestra los elementos del array precedidos por su indice */
        print_r($meses);
        echo "<p>Podremos mostrar todos los elementos de un array mediante un <strong>for</strong></p>";
        $elementos = count($meses);
        for ($i=0; $i < $elementos ; $i++) { 
            echo "Elemento ".$i." del array es: ".$meses[$i]."<br>";
        }

        echo "<p>Lo recomendable es hacerlo con un <pre>foreach</pre></p>";
        foreach ($meses as $key => $value) {
            echo "Elemento ".$key." del array es: ".$value."<br>";
        }
        /* Otra forma más sencilla sería:
            foreach ($meses as $mes){
                echo $mes."<br>";
            }   
            Nos muestra los elementos, en este caso, mes.
        */
            echo "<hr>";
        /* Ejemplo con un array de números */
        $num = array(1,2,3,4,5);
            print_r($num);
        echo "<p>Agregar un elemento array[]=6</p>";
        $num[]= 6;
        print_r($num);
        echo "<p>Agregar o cambiar un elemento array[12] = 13</p>";
        $num[12]=13;
        print_r($num);
        echo "<p>Para re-indexar utilizamos array_values.</p>";
        echo "<p>array = array_values(array).</p>";
        $num = array_values($num);
        print_r($num);
        echo "<p>Para eliminar cada elemento, pero dejar el mismo array intacto, utilizamos un
        foreach con la función unset(array[elemento])</p>";
        foreach ($num as $elemento => $valor) {
            unset($num[$elemento]);
        }
        echo "<p>Aparece el array vacio:</p>";
        print_r($num);
    ?>
</body>
</html>