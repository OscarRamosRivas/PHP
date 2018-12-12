<?php
function factorial($num)
{
    $resultado = 1;
    for ($x = $num; $x > 0; $x--) {
        $resultado *= $x;
    }
    return $resultado;
}


?>