<!-- resources/views/test_batteries/create.blade.php -->

@extends('layouts.app')

@section('title', "Nova Bateria para $student->name")

@section('content')
<div class="container">
    <h2>Nova Bateria de Testes para {{ $student->name }}</h2>

    <form action="{{ route('test_batteries.store', $student->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="year">Ano</label>
            <input type="number" name="year" class="form-control" required min="2000" max="{{ date('Y') }}">
        </div>
        <button type="submit" class="btn btn-success mt-3">Salvar Bateria</button>
    </form>
</div>
@endsection
