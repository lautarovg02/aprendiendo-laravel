<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->category = $request->category;
        $curso->description = $request->description;

        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }

    public function show($curso){
      
      //  return view('cursos.show', ['curso' => $curso]);
      $curso = Curso::find($curso);

      return view('cursos.show', compact('curso'));

    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'category' => 'required',
        ]);

        
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
}
