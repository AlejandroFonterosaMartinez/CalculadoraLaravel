<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index()
    {
        return view('calculadora.index');
    }

    public function calcular(Request $request)
    {
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $operacion = $request->input('operacion');

        switch ($operacion) {
            case 'suma':
                $resultado = $numero1 + $numero2;
                break;
            case 'resta':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                break;
            case 'division':
                $resultado = $numero2 != 0 ? $numero1 / $numero2 : 'No se puede dividir por cero';
                break;
            default:
                $resultado = 'Operación no válida';
        }

        return view('calculadora.resultado', compact('resultado'));
    }
}
