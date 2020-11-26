<?php

namespace App\Http\Controllers;

use App\Http\Requests\Exercise2Request;
use Illuminate\Http\Request;

class Exercise2Ctrl extends Controller
{
    /**
     * Display the view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('exercise-2.index');
    }

    /**
     * Calculate the numbers.
     *
     * @param  \App\Http\Requests\Exercise2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calculate(Exercise2Request $request)
    {
        $salary = (float) $request->input('salary');
        $salaryInfo = $this->calculateSalary($salary);

        return view('exercise-2.index', compact('salary','salaryInfo'));
    }

    /**
     * It does the deductions.
     *
     * @param  float $salary
     * @return array
     */
    private function calculateSalary(float $salary)
    {
        $baseSalary = 950000.0;
        $moreThanBase = $salary > $baseSalary;
        $deduction1 = (8 * $salary) / 100;
        $totalSalary = $salary - $deduction1;
        $deduction2 = 0;

        if ($moreThanBase && $salary <= 2000000) {
            $deduction2 = (1.5 * $salary) / 100;
        } else if ($moreThanBase && $salary > 2000000) {
            $deduction2 = (2.0 * $salary) / 100;
        }

        $totalSalary -= $deduction2;
        return ['totalSalary' => $totalSalary, 'deduction1' => $deduction1, 'deduction2' => $deduction2];
    }
}
