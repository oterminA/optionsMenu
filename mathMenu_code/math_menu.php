<?php

    /**
     * muestra el nro en orden inverso al ingresado
     * @param int $elNro
     * @return int
    */

    function modNumInverso($elNro){
        //Int $dig, $invertido
        //Float $num
        $invertido = 0;
        $num = $elNro;
        do {
            $dig = $num % 10;
            $invertido = ($invertido * 10) + $dig;
            $num = floor($num / 10);
        }while ($num);
        return $invertido;
    }

    /**
     * suma los digitos de un numero ingresado
     * @param int $elNro
     * @return int
    */

    function modSumaDigitos($elNro){
        //Int $dig, $suma
        //Float $num
        $num = $elNro;
        $suma = 0;
        while ($num > 0){
            $dig = $num % 10;
            $suma = $suma + $dig;
            $num = (int) ($num / 10);
        }
        return $suma;
    } 

    /**
     * devuelve la cantidad de divisores de un numero ingresado
     * @param int $elNro
     * @return int
    */

    function modDivisores($elNro){
        //Int $i, $cont
        $i = 2;
        $cont = 0;
        while ($i <= $elNro){
            if ($elNro % $i == 0){
                $cont = $cont + 1;
            }
            $i = $i + 1;
        }
        return $cont;
    }

    /**
     * retorna true o false si el numero ingresado es primo
     * @param int $elNro
     * @return boolean
    */

    function modEsPrimo ($elNro) {
        //Int $i
        //Boolean $rta
        $i = 2;
        $rta = false; /*inicialmente lo considero primo*/
        while (!$rta && $i < ($elNro-1)){
            if ($elNro % $i == 0){
                /*si entra acá es porque NO es primo*/
                $rta = true;
            }
            $i = $i + 1;
        }
        return $rta;
    }

    //PROGRAMA menu
    //menú de opciones
    //
    //

    do {
        echo "Elija un numero: \n 1-Número inverso \n 2-Suma de dígitos \n 3-Cantidad de divisores \n 4-Es primo? \n 5-Salir\n Opción >>>> ";
        $respuesta = trim(fgets(STDIN));
        if ($respuesta < 5 || $respuesta >= 1){
            switch ($respuesta) {
                case 1:
                    echo "Número entero: \n";
                    $numero = trim(fgets(STDIN));
                    $inverso = modNumInverso($numero);
                    echo "El número inverso es: " . $inverso . "\n";
                break;
                case 2:
                    echo "Número entero: \n";
                    $numero = trim(fgets(STDIN));
                    $suma = modSumaDigitos($numero);
                    echo "La suma de los digitos es: " . $suma . "\n";
                break;
                case 3:
                    echo "Número entero: \n";
                    $numero = trim(fgets(STDIN));
                    $div = modDivisores($numero);
                    echo "La cantidad de divisores es: " . $div . "\n";
                break;
                case 4:
                    echo "Número entero: \n";
                    $numero = trim(fgets(STDIN));
                    $primo = modEsPrimo($numero);
                    if ($primo) {
                        echo "Es primo. \n";
                    }else {
                        echo "No es primo. \n";
                    }
                break;
                default:
                    echo "Opción incorrecta, error. \n";
                break;
            }
        }
    } while ($respuesta !== 5);
    echo "Ha salido del menú de opciones.\n";
?>
