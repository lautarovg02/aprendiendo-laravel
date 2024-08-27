@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class=" m-2 text-white text-center text-uppercase">Crud de Tareas</h2>
        </div>
        <div class="col-12 d-flex justify-between gap-4 p-4">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">Crear tarea</a>     
            <div class="d-flex w-50 gap-4 justify-content-center ">
                <h5>Filtra las tareas:</h5>
                <form action="{{ route('tasks.searchByStatus') }}" method="GET" class="d-flex gap-3 ">
                        <select name="status" class="form-select w-50" id="">
                            <option selected>Estado</option>
                            <option value="Pendiente">Pendiente</option>
                            <option value="En progreso">En progreso</option>
                            <option value="Completada">Completada</option>
                        </select>
                        <button type="submit"  class="btn btn-primary">Buscar</button>
                </form>
              
            </div>
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
                    @if ($task->status == 'Completada')
                        <span class="badge bg-success fs-6">{{$task->status}}</span>
                    @elseif ($task->status == 'Pendiente')
                        <span class="badge bg-danger fs-6">{{$task->status}}</span>
                    @else
                        <span class="badge bg-warning fs-6">{{$task->status}}</span>
                    @endif
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