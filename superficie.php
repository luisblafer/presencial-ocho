<?php

    function triangulo($base, $altura)
    {
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;
        return ($base * $altura / 2);
    }

    function rectangulo($base, $altura)
    {
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;
        return ($base * $altura);
    }

    function cuadrado($lado)
    {
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;
        return ($lado * $lado);
    }

    function circulo($radio)
    {
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;
        return (pi() * pow($radio,2));
    }

    //echo(circulo(10));


?>