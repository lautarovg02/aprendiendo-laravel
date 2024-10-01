@extends('layouts.plantilla')
@section('title', 'Cursos create')

@section('content')
    <h1>En esta pagina podras crear un curso </h1>
    <form action="{{ route('cursos.store') }}" method="post">
        @csrf

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror

        <label for="">
            Slug:
            <br>
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>

        @error('slug')
        <br>
        <span>{{ $message }}</span>
        <br>
        @enderror

        <label for="">
            Descripcion:
            <br>
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label>

        @error('description')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror

        <label for="">
            Categoria:
            <br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        @error('category')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
