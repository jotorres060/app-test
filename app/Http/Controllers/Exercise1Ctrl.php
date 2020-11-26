<?php

namespace App\Http\Controllers;

use App\Http\Requests\Exercise1Request;
use Illuminate\Http\Request;

class Exercise1Ctrl extends Controller
{
    /**
     * Display the view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('exercise-1.index');
    }

    /**
     * Calculate the numbers.
     *
     * @param  \App\Http\Requests\Exercise1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calculate(Exercise1Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $num3 = $request->input('num3');
        $num4 = $request->input('num4');
        $evaluation = $this->evaluate($num1, $num2, $num3, $num4);

        if ($evaluation !== null) {
            return redirect()->back()->withInput()->withErrors($evaluation);
        }

        $result = $this->extractMaxMinTotal($num1, $num2, $num3, $num4);
        return redirect()->back()->with('status', $result);
    }

    /**
     * Evaluation of numbers.
     *
     * @param  int $num1
     * @param  int $num2
     * @param  int $num3
     * @param  int $num4
     * @return void | string
     */
    private function evaluate(int $num1, int $num2, int $num3, int $num4)
    {
        if ($num2 > $num1) {
            return 'La segunda variable es mayor que la primera.';
        }

        if ($num3 < $num1) {
            return 'La tercera variable no puede ser menor que la primera.';
        }

        $par3 = ($num3 % 2) == 0;
        $par4 = ($num4 % 2) == 0;

        if ($par3 && $par4) {
            return 'La cuarta variable debe ser impar.';
        }

        if (!$par3 && !$par4) {
            return 'La cuarta variable debe ser par.';
        }
    }

    /**
     * Extract the max, min and total value.
     *
     * @param  int $num1
     * @param  int $num2
     * @param  int $num3
     * @param  int $num4
     * @return string
     */
    private function extractMaxMinTotal(int $num1, int $num2, int $num3, int $num4)
    {
        $numbers = collect([$num1, $num2, $num3, $num4]);
        $maximum = $numbers->max();
        $minimum = $numbers->min();
        $total = $numbers->sum();
        return "Máximo: (". $maximum .") Mínimo: (".$minimum.") Total: (".$total.")";
    }
}
