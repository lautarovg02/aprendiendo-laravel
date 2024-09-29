@extends('layouts.plantilla')
@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Biervenido al curso de {{$curso->name}}</h1>
    <p><strong>Category:{{$curso->category}}</strong></p>
    <p>{{$curso->description}}</p>
@endsection
