<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias/inicio', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias/agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->post('nombre');
        $categoria->descripcion = $request->post('descripcion');
        $categoria->save();
        return redirect()->route('categorias.index')->with('success', 'Agregado con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categorias = Categoria::find($id);
        return view('categorias/eliminar', compact('categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categorias = Categoria::find($id);
        return view('categorias.editar', compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categorias = Categoria::find($id);
        $categorias->nombre = $request->post('nombre');
        $categorias->descripcion = $request->post('descripcion');
        $categorias->save();
        return redirect()->route('categorias.index')->with('success', 'Actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorias = Categoria::find($id);
        $categorias->delete();
        return redirect()->route('categorias.index')->with('success', 'Eliminado con exito!');
    }
}
