<?php
/* 
    Con el condicional if podremos ejecutar un código, si se cumple la condición
    que le pasamos.
    Escribiremos if (condición) { código a ejecutar }
*/

//Utilizaremos un bucle for para mostrar sólo los números pares
//$i%2 muestra el resto de $i dividido entre 2
for ($i=1; $i <= 20 ; $i++) { 
    if ($i%2 == 0) {
        echo "El número ".$i." es par.<br>";
    }
}

?>