<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;

use function Laravel\Prompts\alert;

class FormController extends Controller
{
    public function crear(){
        return view('form');
    }

    public function almacenar(Request $request){
        $tareas = new Tareas();

        $tareas -> titulo = $request -> titulo;
        $tareas -> descripcion = $request -> descripcion;
        $tareas->save();
        return redirect('/');
    }
    
    public function editar($idTarea)  {
        $tareas = Tareas::find($idTarea);
        return view('editar', ['tareas' => $tareas]);
    }
    
    public function actualizar(Request $request, $tareas) {
        $tareas = Tareas::find($tareas);
        $tareas -> titulo = $request -> titulo;
        $tareas -> descripcion = $request -> descripcion;
        $tareas->save();
        return redirect('/');
    }
    
    public function eliminar ($idTarea) {
        $tareas = Tareas::find($idTarea);
        $tareas -> delete();
        return redirect('/');
    }
}
