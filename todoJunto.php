<?php
    $funcionesEjecutadas = 0;
    require_once ("funciones.php");
    require_once ("superficie.php");
    
    function superficieMayor($radio1, $radio2, $radio3)
    {
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;
        return circulo(mayor($radio1, $radio2, $radio3));
    }

    echo strpos("Me encanta php, a mi también me encanta php!", "php") . "<br>";

    echo "Superficie mayor: " . superficieMayor(1,5,3) . "<br>";
    echo "Funciones ejecutadas: " . $funcionesEjecutadas . "<br>";

?>