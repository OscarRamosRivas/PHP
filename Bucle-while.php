<?php
/* 
    while es un bucle condicional. Se repetirá el código incluido entre las llaves, hasta 
    que deje de cumplirse la condición. 
    Para evitar un bucle infinito, tendremos que colocar un contador dentro de él.
*/

$numero = 1;
while ($numero <= 10) {
    //mostramos el contador del 1 al 10
    echo $numero."<br>";
    $numero++;
}
//nos muestra el valor de la variable después de salir del bucle.
echo $numero;
?>