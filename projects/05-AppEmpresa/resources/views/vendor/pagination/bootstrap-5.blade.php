@if ($paginator->hasPages())  
    <nav>  
        <ul class="pagination">  
            {{-- Botón de "Primero" --}}  
            @if ($paginator->onFirstPage())  
                <li class="disabled page-item" aria-disabled="true"><span class="page-link">&laquo;</span></li>  
            @else  
                <li class="page-item"><a class="page-link" href="{{ $paginator->url(1) }}" rel="prev">&laquo;</a></li>  
            @endif  

            {{-- Enlaces a páginas --}}  
            @foreach ($elements as $element)  
                {{-- "Elipsis" cuando hay demasiadas páginas --}}  
                if (is_string($element)) {  
                    <li class="disabled page-item"><span class="page-link">{{ $element }}</span></li>  
                }  

                {{-- Enlaces a páginas --}}  
                if (is_array($element)) {  
                    foreach ($element as $page => $url) {  
                        if ($page == $paginator->currentPage()) {  
                            <li class="active page-item"><span class="page-link">{{ $page }}</span></li>  
                        } else {  
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>  
                        }  
                    }  
                }  
            @endforeach  

            {{-- Botón de "Último" --}}  
            @if ($paginator->hasMorePages())  
                <li class="page-item"><a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}" rel="next">&raquo;</a></li>  
            @else  
                <li class="disabled page-item" aria-disabled="true"><span class="page-link">&raquo;</span></li>  
            @endif  
        </ul>  
    </nav>  
@endif