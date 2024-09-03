<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<!-- login.blade.php -->
<body>
    <main class="container align-center p-5">
        <h3>Inicia Sesion</h3>
        <form action="{{ route('inicia-sesion') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="emailInput" required value="{{ old('email') }}" autocomplete="off">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="passwordInput" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="checkbox" class="form-check-input" name="remember" id="rememberCheck">
                <label for="rememberCheck" class="form-check-label">Mantener sesión iniciada</label>
            </div>
            <div>
                <p>¿No tienes cuenta? <a href="{{ route('inicia-sesion') }}">Regístrate</a></p>
            </div>
            <button type="submit" class="btn btn-primary">Acceder</button>
        </form>
    
        <!-- Mensajes de error generales -->
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </main>
    </body>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
