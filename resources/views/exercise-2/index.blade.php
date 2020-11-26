@extends('layouts.app')
@section('content')
    <div>
        <h2 class="text-center">Ejercicio 2</h2>
        <hr>

        <a class="btn btn-secondary btn-sm mb-3" href="{{ route('menu')  }}"><< Menú</a>

        <form action="{{ route('exercise.2.calculate') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="salary">Salario</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">COP</span>
                    </div>
                    <input class="form-control" id="salary" name="salary" type="number" required>
                </div>

            </div>
            <div class="form-group text-center">
                <button class="btn btn-secondary btn-sm" type="submit">
                    Calcular
                </button>
            </div>
        </form>

        @isset ($salaryInfo)
            <div class="mt-5">
                <p>
                    <strong>Salario base:</strong> ${{ $salary  }}.
                </p>
                <p>
                    <strong>Deducción 1:</strong> ${{ $salaryInfo['deduction1']  }}.
                </p>
                <p>
                    <strong>Deducción 2:</strong> ${{ $salaryInfo['deduction2']  }}.
                </p>
                <hr>
                <p>
                    <strong>Salario total:</strong> ${{ $salaryInfo['totalSalary']  }}.
                </p>
            </div>
        @endisset
    </div>
@endsection
