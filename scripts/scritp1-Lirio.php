<?php
/**
* Función de una calculadora
* Cada función representa las operaciones básicas
* de suma, resta, multiplicación y división.
*
* @author Jesús Bono
* @version 2.0
* @access public
* @package calculator
*/

/**
* Función básica de suma
* @param float El primer número (puede ser cion decimales) a sumar
* @param float El segundo número (puede ser cion decimales) a sumar
* @return float el resultado de la suma
* @version 1.0
*/
function sumar($num1, $num2) {
  return $num1 + $num2;
}

/**
* Función básica de resta
* @param float El primer número (puede ser cion decimales) a restar
* @param float El segundo número (puede ser cion decimales) a restar
* @return float el resultado de la resta
* @version 1.0
*/
function restar($num1, $num2) {
  return $num1 - $num2;
}

/**
* Función básica de multiplicación
* @param float El primer número (puede ser cion decimales) a multiplicar
* @param float El segundo número (puede ser cion decimales) a multiplicar
* @return float el resultado de la multiplicación
* @version 1.0
*/
function multiplicar($num1, $num2) {
  return $num1 * $num2;
}

/**
* Función básica de división
* @param float El primer número (puede ser cion decimales) a dividir
* @param float El segundo número (puede ser cion decimales) a dividir
* @return float el resultado de la división
* @version 1.0
*/
function dividir($num1, $num2) {
  if ($num2 == 0) {
    return "Error: No se puede dividir entre cero.";
  } else {
    return $num1 / $num2;
  }
}

?>
