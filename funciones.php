<?php

    function mayor($num1, $num2, $num3 = 100)
    {
        /*
        Pongo los 3 números en un array para poder recorrerlo con
        un bucle de repetición foreach.
        Es extensible a cualquier cantidad de números de entrada.
        */
        $arrayNum = [$num1, $num2, $num3];

        // Inicializo el máximo local el el valor del primer elemento.
        $numMax = $arrayNum[0];

        /*
        Recorro el array, verificando todos los elementos y en caso
        que alguno de estos sea mayor que el máximo local, lo sobreescribo.
        */
        foreach ($arrayNum as $value) {
            if ($value > $numMax) {
                $numMax = $value;
            }
        }
        return $numMax;
    }


    function tabla($base, $limite = 100)
    {   
        /*
        Si $base y $limite son iguales, asigno la $base como único elemento
        del array de salida. Caso contrario, determino el signo del incremento
        para determinar el sentido de crecimiento.
        */
        if ($base == $limite) {
            $arraySalida = [$base];
        } else {
            $sgnIncremento = ($limite > $base) ? 1 : -1 ;
            //var_dump($sgnIncremento);
            /*
            
             */
            for ($i=$base; $i <> $limite+$sgnIncremento ; $i+=$sgnIncremento) { 
                $arraySalida[] = $i;
            }
        }
        return $arraySalida;
    }


echo(mayor(-5,0));

var_dump(tabla(-5));