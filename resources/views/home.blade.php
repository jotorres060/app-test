@extends('layouts.app')
@section('content')
    <div class="text-center">
        <ul class="list-group">
            <a href="{{ route('exercise.1.index') }}">
                <li class="list-group-item py-4">Ejercicio 1</li>
            </a>
            <a href="{{ route('exercise.2.index') }}">
                <li class="list-group-item py-4">Ejercicio 2</li>
            </a>
            <a href="#">
                <li class="list-group-item py-4">Ejercicio 3</li>
            </a>
        </ul>
    </div>
@endsection
