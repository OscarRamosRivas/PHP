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
    <h2>Matriz Asociativa</h2>
    <?php
        /* Un matriz asociativo es aquel que cambiamos los índices
        numéricos por nombres.
        $arr["nombre"]="Oscar";
        $a = array("nombre" => "Oscar",
                    "apellido" => "Ramos"
                    );
        */
        $persona = array(
            "nombre" => "Pepe",
            "apellido" => "Pérez",
            "edad" => 33,
            "casado" => "si",
            "hijos" => 2
        );
        //print_r($persona);
        foreach ($persona as $key => $value) {
           echo "La propiedad <strong>".$key."</strong> tiene el valor: ".$value."<br>";
        }
    ?>
    <h2>Matriz Asociativa Multidimensional</h2>
    <?php
        $notas = array(
            "Matematicas" => array(
                "Evaluacion1" => 5,
                "Evaluacion2" => 6,
                "Evaluacion3" => 5.5
            ),
            "Lengua" => array(
                "Evaluacion1" => 8,
                "Evaluacion2" => 9,
                "Evaluacion3" => 9.5
            ),
            "Ingles" => array(
                "Evaluacion1" => 4,
                "Evaluacion2" => 5,
                "Evaluacion3" => 5.5
            )
        );
            //print_r($notas);
            $promedio = 0;
        foreach ($notas as $key => $asignatura) {
            /* sacamos los datos de la "primera" dimensión del array */
                echo "Asignatura: <strong>".$key."</strong><br>";
            foreach ($asignatura as $value => $nota) {
                echo "Evaluacion: ".$value." nota: ".$nota."<br>";
                $promedio += $nota;
            }   
                $media = $promedio/3;
                /* con la función number_format(), muestro el número con 2 decimales 
                y como separador la coma(,) */
                echo "<ins>La nota media es</ins>: ".number_format($media,2,',',' ')."<br>";      
                $promedio=0;//reinicializo la variable
        }
    ?>
</body>
</html>