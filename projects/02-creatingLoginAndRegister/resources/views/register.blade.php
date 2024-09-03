<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<!-- register.blade.php -->
<body>
    <main class="container align-center p-5">
        <form action="{{ route('validar-registro') }}" method="post">
            <h3>Registrate!</h3>
            @csrf
            <div class="mb-3">
                <label for="userInput" class="form-label">Nombre</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="userInput" required value="{{ old('name') }}">
                <!-- Mostrar mensaje de error específico para 'name' -->
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="emailInput" required value="{{ old('email') }}">
                <!-- Mostrar mensaje de error específico para 'email' -->
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="passwordInput" required>
                <!-- Mostrar mensaje de error específico para 'password' -->
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="passwordConfirmInput" class="form-label">Confirmar Password</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="passwordConfirmInput" required>
                <!-- Mostrar mensaje de error específico para 'password_confirmation' -->
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Accede</a></p>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </main>
    </body>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>