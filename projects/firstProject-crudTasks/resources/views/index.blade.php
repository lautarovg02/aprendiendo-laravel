@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class=" m-2 text-white text-center text-capitalize">CRUD de Tareas</h2>
        </div>
        <div class="col-12 d-flex justify-between gap-4 p-4">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">Crear tarea</a>
        </div>
    </div>

    @if (Session::get('success'))
    <div class="alert alert-success m-2">
            <strong>{{Session::get('success')}}</strong> 
    </div>
    @endif


    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Tarea</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td class="fw-bold">{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->dua_date}}</td>
                <td>
                    <span class="badge bg-warning fs-6">{{$task->status}}</span>
                </td>
                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{$tasks->links()}}
    </div>
</div>
@endsection