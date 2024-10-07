@extends('plantilla')  

@section('title', "Empleados")  

@section('content')  
    <h1 class="mb-4">Empleados de {{$company->company_name}}</h1>  

    @if($employees->count() > 0)  
        <ul class="list-group">  
            @foreach ($employees as $employee)  
                <li class="list-group-item">{{$employee->name}} {{$employee->lastname}} - {{$employee->dni}}</li>  
            @endforeach  
        </ul>  
        <div class="mt-4">  
            {{ $employees->links() }} <!-- Paginación -->  
        </div>  
    @else  
        <div class="alert alert-warning" role="alert">  
            No se encontraron empleados.  
        </div>  
    @endif  
@endsection  