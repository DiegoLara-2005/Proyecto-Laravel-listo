<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all(); 
        return view('libros', compact('libros')); 
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'anio' => 'required|digits:4|integer'
        ]);

        
        Libro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'anio' => $request->anio
        ]);

        
        return redirect()->back();
    }
}
