@extends('layouts.app')
@section('content')
    <div>
        <h2 class="text-center">Excercise 1</h2>
        <hr>

        <a class="btn btn-secondary btn-sm mb-3" href="{{ route('menu')  }}"><< Menú</a>

        <form action="{{ route('exercise.1.calculate') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="number-1">Número 1</label>
                <input class="form-control" id="number-1" name="num1" type="number" required>
            </div>
            <div class="form-group">
                <label for="number-2">Número 2</label>
                <input class="form-control" id="number-2" name="num2" type="number" required>
            </div>
            <div class="form-group">
                <label for="number-3">Número 3</label>
                <input class="form-control" id="number-3" name="num3" type="number" required>
            </div>
            <div class="form-group">
                <label for="number-4">Número 4</label>
                <input class="form-control" id="number-4" name="num4" type="number" required>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-secondary btn-sm" type="submit">
                    Calcular
                </button>
            </div>
        </form>
    </div>
@endsection
