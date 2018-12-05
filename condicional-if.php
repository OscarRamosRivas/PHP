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
echo "<hr>";
/* También podemos utilizarlo con else, que mostrará su contenido cuando 
no se cumpla la condición del if */
for ($i=1; $i <= 20 ; $i++) { 
    if ($i%2 == 0) {
        echo "El número ".$i." es par.<br>";
    }else {
        echo "El número ".$i." es impar.<br>";
    }
}
echo "<hr>";
/* Por último, con if podemos generar una estructura con mas condiciones
usando elseif */
$aleatorio = mt_rand(0,100);//mt_rand() para sacar un numero aleatorio entre 0 y 100
print_r($aleatorio);
echo "<br>";
if ($aleatorio == 0) {
    echo "Lo has clavado en ".$aleatorio;
} elseif ($aleatorio > 0 && $aleatorio <= 10) {
    echo $aleatorio." esta entre 1 y 10.";
} elseif ($aleatorio > 10 && $aleatorio <= 20) {
    echo $aleatorio." esta entre 10 y 20.";
} elseif ($aleatorio > 20 && $aleatorio <= 30){
    echo $aleatorio." esta entre 20 y 30.";
} else {
    echo $aleatorio." es mayor de 30";
}
echo "<br>";
/* Hay otra estructura condicional que podemos utilizar es switch */
$aleatorio2 = mt_rand(0,10);
print_r($aleatorio2);
echo "<br>";
switch ($aleatorio2) {
    case 1:
        echo "Ha salido el 1";
        break;
    case 2:
        echo "Ha salido el 2";
        break;
    case 3:
        echo "Ha salido el 3";
        break;
    case 4:
        echo "Ha salido el 4";
        break;
    case 5:
        echo "Ha salido el 5";
        break;
    case 6:
        echo "Ha salido el 6";
        break;
    case 7:
        echo "Ha salido el 7";
        break;
    case 8:
        echo "Ha salido el 8";
        break;
    case 9:
        echo "Ha salido el 9";
        break;
    case 10:
        echo "Ha salido el 10";
        break;
    default:
        echo "Ha salido el 0";
        break;
}
?>