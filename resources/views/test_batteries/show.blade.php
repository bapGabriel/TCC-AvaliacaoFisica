<!-- resources/views/test_batteries/show.blade.php -->

@extends('layouts.app')

@section('title', "Bateria de Testes do Ano $testBattery->year")

@section('content')
<div class="container">
    <h2>Bateria de Testes - Ano {{ $testBattery->year }}</h2>
    <p>Aluno: <a href="{{ route('students.show', $testBattery->student->id) }}">{{ $testBattery->student->name }}</a></p>

    <a href="{{ route('tests.create', $testBattery->id) }}" class="btn btn-primary mb-4">Adicionar Novo Teste</a>

    @if($testBattery->tests->isEmpty())
        <p>Nenhum teste cadastrado para esta bateria ainda.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Altura (cm)</th>
                    <th>Peso (kg)</th>
                    <th>Flexibilidade (cm)</th>
                    <th>Abdominais</th>
                    <th>Corrida 6 Min (m)</th>
                    <th>Medicine Ball (cm)</th>
                    <th>Salto Horizontal (cm)</th>
                    <th>Corrida no Quadrado (s)</th>
                    <th>Corrida 20 m (s)</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testBattery->tests as $test)
                    <tr>
                        <td>{{ $test->created_at->format('d/m/Y') }}</td>
                        <td>{{ $test->height }}</td>
                        <td>{{ $test->weight }}</td>
                        <td>{{ $test->flexibility }}</td>
                        <td>{{ $test->abdominals }}</td>
                        <td>{{ $test->run_6min }}</td>
                        <td>{{ $test->medicine_ball }}</td>
                        <td>{{ $test->horizontal_jump }}</td>
                        <td>{{ $test->square_run }}</td>
                        <td>{{ $test->run_20m }}</td>
                        <td>
                            <a href="{{ route('tests.edit', $test->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('tests.destroy', $test->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
