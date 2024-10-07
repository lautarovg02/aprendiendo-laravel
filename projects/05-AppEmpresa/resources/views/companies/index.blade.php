@extends('plantilla')  

@section('title', "Empresas")  

@section('content')  
    <h1 class="mb-4">Empresas</h1>  

    @if($companies->count() > 0)  
        <ul class="list-group">  
            @foreach ($companies as $company)  
                <li class="list-group-item"><a href="{{route('employee.index', $company)}}">{{ $company->company_name }}</a></li>  
            @endforeach  
        </ul>  
        <div class="mt-4">  
            {{ $companies->links() }} <!-- Paginación -->  
        </div>  
    @else  
        <div class="alert alert-warning" role="alert">  
            No se encontraron empresas.  
        </div>  
    @endif  
@endsection  