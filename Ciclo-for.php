<?php
/*
    El ciclo for lo utilizamos para hacer un número de repeticiones.
    Para ello necesitamos el valor inicial($i), una condición(la que va 
    a indicar al bucle que termine) y el valor de incremento o decremento.
*/

//Contar del 1 al 10
for ($i=1; $i <= 10; $i++) { 
    echo $i."<br>";
}

//También podemos contar hacia atrás
for ($x=10; $x >=1 ; $x--) { 
    echo $x."<br>";
}

/*Podemos indicar el salto de número
Aquí nos contará de 3 en 3 hasta 30
*/
for ($z=0; $z <= 30; $z= $z + 3) { 
    echo " - ".$z;
}
?>