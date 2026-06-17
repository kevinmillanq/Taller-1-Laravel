<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{

   public function frm_sumar()
    {

        return view('frm_sumar');

    }

    public function sumar(Request $request){

    $numero1=$request->numero1;
    $numero2=$request->numero2;

    $resultado=$numero1+$numero2;

    return $resultado;

    }


return resultado             public function frm_multiplicar()
    {

        $resultado = $num1 * $num2;

        return "El resultado de la multiplicación es: " . $resultado;
    }

    public function dividir($num1, $num2)
    {

        $resultado = $num1 / $num2;

        return "El resultado de la división es: " . $resultado;
    }

    public function cuadratica($a, $b, $c){
        if ($a == 0) {
        return "a no puede ser cero en una funcion cuadratica";
    }
    $discriminante = ($b ** 2) - (4 * $a * $c);

    if ($discriminante < 0) {
        return "El resultado no tiene soluciones reales el discriminante es negativo: " . $discriminante . ").";
    }

    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

    return "Las solucion de la ecuacion cuadratica son: X1 = " . $x1 . " y X2 = " . $x2;
    }

    public function areaTriangulo($a, $b, $c){
        $s = ($a + $b + $c) / 2;
        $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
        return "El area del triangulo es: " . $area;
    }

    public function areaCirculo($a){
        $area = pi() * ($a ** 2);
        return "El area del circulo es: " . $area;
    }

    public function factorial($num){
        if ($num < 0) {
            return "El factorial no está definido para numeros negativos";
        } elseif ($num == 0 || $num == 1) {
            return "El factorial de " . $num . " es: 1";
        } else {
            $factorial = 1;
            for ($i = 2; $i <= $num; $i++) {
                $factorial *= $i;
            }
            return "El factorial de " . $num . " es: " . $factorial;
        }
    }

    public function primo($num){
        if ($num <= 1) {
            return $num . " no es un numero primo.";
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return $num . " no es un numero primo.";
            }
        }
        return $num . " es un numero primo.";
    }

    public function amigos($num1, $num2){
        $sumaNum1 = 0;
        $sumaNum2 = 0;

        for ($i = 1; $i < $num1; $i++) {
            if ($num1 % $i == 0) {
                $sumaNum1 += $i;
            }
        }

        for ($j = 1; $j < $num2; $j++) {
            if ($num2 % $j == 0) {
                $sumaNum2 += $j;
            }
        }

        if ($sumaNum1 == $num2 && $sumaNum2 == $num1) {
            return $num1 . " y " . $num2 . " son friends";
        } else {
            return $num1 . " y " . $num2 . " no son friends";
        }
    }
}
