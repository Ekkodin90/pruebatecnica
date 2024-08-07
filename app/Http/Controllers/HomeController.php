<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;
class HomeController extends Controller
{
    public function index() {
        $tareas = Tareas::all();
        return view('home', ['tareas' => $tareas]);
    }
}
