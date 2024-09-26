<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
      
      //  return view('cursos.show', ['curso' => $curso]);
      // compact sirve para cuando queres pasar la variable a la vista con el mismo nombre
      return view('cursos.show', compact('curso'));

    }
}
