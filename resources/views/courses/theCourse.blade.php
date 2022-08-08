{{-- Header section --}}
@extends('layout.layout')

{{-- Title section --}}
@section('title', 'Curso de' . $course )

{{-- Body section --}}
@section('content')
    <h1>
        Bienvenido al curso de {{ $course }}
    </h1>
@endsection