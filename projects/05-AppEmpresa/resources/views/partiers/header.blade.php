<header class="bg-dark text-white p-4">  
    <div class="container">  
        <h1 class="display-4">Generando pruebas para la bd</h1>  
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route('company.index') }}" class="nav-link {{ request()->routeIs('company.*') ? 'active' : '' }}">Empresas</a></li>
          </ul>
    </div>  
</header>