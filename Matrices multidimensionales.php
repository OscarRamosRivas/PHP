<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrices Multidimensionales</title>
</head>
<body>
    <h2>Matriz Bidimensional</h2>
    <?php
        /* Mediante un bucle for rellenare una matriz de dos dimensiones.
            array[x][y];
        */
        $contador=1;
        for ($i=1; $i <=5 ; $i++) { 
            for ($j=1; $j <=5 ; $j++) { 
                $matriz[$i][$j] = $contador;
                $contador++;
            }
        }
        echo "<table>";
        for ($i=1; $i <=5 ; $i++) { 
            echo "<tr>";
            for ($j=1; $j <=5 ; $j++) { 
                echo "<td>".$matriz[$i][$j]."</td>";  
            }
            echo "</tr>"; 
        }
        echo "</table>";
    ?>
    
</body>
</html>