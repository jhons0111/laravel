{{-- Header section --}}
@extends('layout')

{{-- Title section --}}
@section('title')
    Curso de {{ $course }}
@endsection

{{-- Body section --}}
@section('content')
    <h1>
        Bienvenido al curso de {{ $course }}
    </h1>
@endsection