<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //
    public function register(Request $request){
        //validate input data 
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // Confirmar password
        ], [
            'name.required' => 'El campo de nombre es obligatorio.',
            'name.string' => 'El nombre debe ser un texto válido.',
            'name.max' => 'El nombre no puede exceder los 255 caracteres.',
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.email' => 'Debe ingresar un correo electrónico válido.',
            'email.unique' => 'Este correo electrónico ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ]);

        //create and save user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // login user automatically after successful register
        Auth::login($user);

        return redirect(route('privada'));
    }

    public function login(Request $request){
        //validate input data
        $validatedData = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ], [
            'email.required' => 'Por favor ingrese su correo electrónico.',
            'email.email' => 'Debe ingresar un correo electrónico válido.',
            'password.required' => 'Por favor ingrese su contraseña.',
        ]);

        $credentials = $request->only('email', 'password');
        
        // keep session active 
        $remember = ($request->has('remember')) ? true : false;
    
        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();

            return redirect()->intended('privada');
        }else{
            return back()->withErrors([
                'email' => 'Las credenciales no coinciden con nuestros registros.',
            ]);
        }
    }
         
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }

}
