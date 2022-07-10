{{-- Header section --}}
@extends('layout')

{{-- Title section --}}
@section('title')
    Home page
@endsection

{{-- Body section --}}
@section('content')
    <h1>
        Home page
        {{ app()->version() }}
    </h1>
    <
    <h2>
        Variable value: {{ $name }}
    </h2>
@endsection