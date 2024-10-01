@extends('layouts.plantilla')
@section('title', 'Cursos Edit')

@section('content')
    <h1>En esta pagina podras editar un curso </h1>
    <form action="{{ route('cursos.update', $curso) }}" method="post">
        @csrf
        @method('put')
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
        </label>

        @error('name')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror

        <label for="">
            Descripcion:
            <br>
            <textarea name="description" rows="5">{{ old('description', $curso->description) }}</textarea>
        </label>

        <label for="">
            Slug:
            <br>
            <input type="text" name="slug" value="{{old('slug', $curso->slug)}}">
        </label>

        @error('slug')
        <br>
        <span>{{ $message }}</span>
        <br>
        @enderror

        @error('description')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror


        <label for="">
            Categoria:
            <br>
            <input type="text" name="category" value="{{ old('category',$curso->category) }}">
        </label>

        @error('category')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
