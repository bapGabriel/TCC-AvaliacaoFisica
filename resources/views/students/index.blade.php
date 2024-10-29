<!-- resources/views/student/index.blade.php -->

@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')
<div class="container">
<h1>Lista de Alunos</h1>
<ul>
    @foreach($students as $student)
        <li>{{ $student->name }}</li>
    @endforeach
</ul>
</div>
@endsection
