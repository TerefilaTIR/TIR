<?php

/**
 * Clase
 * 
 * @package TIR
 * @license http://creativecommons.org/license/by-sa/4.0/legalcode Creative 
 * Commons 4.0
 * @author Teresa Iglesias Rodríguez
 * @version 1.0
 */
class Clase {

    /** 
     * @var int CONSTANTE Valor constante 
    */
    const CONSTANTE = 1;
    
    /** 
     * @var String Variable de acceso público
     */
    public $variablePublica;
    
    /** 
     * @var String Variable de acceso restringido
     */
    private $variablePrivada;
    
    /**
     * Constructor de la clase Clase
     * 
     * @param String $variablePublica valor público
     * @param String $variablePrivada valor privado
     * @return void 
     */
    function __construct($variablePublica, $variablePrivada) {
        $this->variablePublica = $variablePublica;
        $this->variablePrivada = $variablePrivada;
    }
    
    /**
     * Obtiene el valor asignado a la variable pública
     * 
     * @return String valor asignado a la variable pública
     */
    function getVariablePublica() {
        return $this->variablePublica;
    }
    
    /**
     * Obtiene el valor asignado a la variable privada
     * 
     * @return String valor asignado a la variable pública
     */
    function getVariablePrivada() {
        return $this->variablePrivada;
    }

    /**
     * Establece el valor de la variable pública
     * 
     * @param type $variablePublica valor a asignar la variable pública
     */
    function setVariablePublica($variablePublica) {
        $this->variablePublica = $variablePublica;
    }
    
    /**
     * Establece el valor de la variable privada
     * 
     * @param String $variablePrivada valor a asignar la variable privada
     */
    function setVariablePrivada($variablePrivada) {
        $this->variablePrivada = $variablePrivada;
    }

    /**
     * Determina si la palabra introducida es palíndromo
     * 
     * @param String $palabra palabra a comprobar
     * @return boolean true (1) si la palabra es palíndromo, false (0) en caso
     * contrario
     */
    public static function esPalindromo($palabra) {
        return $palabra == strrev($palabra);
    }

    /**
     * Determina si el número introducido es primo
     * 
     * @param number $numero número a comprobar
     * @return boolean true (1) si el número es primo, false (0) en caso
     * contrario
    */
    public static function esPrimo($numero) {
        for ($i = 2; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    /**
     * Determina cual de los números introducidos es el mayor. En caso de ser 
     * iguales devuelve el primero
     * 
     * @param number $numero1 primer número a comparar
     * @param number $numero2 segundo número a comparar
     * @return number el número mayor
     */
    public static function devolverMayor($numero1, $numero2) {
        return ($numero1 >= $numero2) ? $numero1 : $numero2;
    }

    /**
     * Despeja X para una ecuación de primer grado de la forma
     * aX + b = 0
     * 
     * @param number $a coeficiente a
     * @param number $b coeficiente b
     * @return number valor de X
     */
    public static function resolverEcuacionPrimerGrado($a, $b) {
        return -$b / $a;
    }

    /**
     * Determina si el año proporcionado es bisiesto
     * 
     * @param number $ano año a comprobar
     * @return boolean true (1) si el año es bisiesto, false (0) en caso
     * contrario
     */
    public function esBisiesto($ano) {
        return ($ano % 100 != 0) && (($ano % 4 == 0) || ($ano % 400 == 0));
    }
}

?>