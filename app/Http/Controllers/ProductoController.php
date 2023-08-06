<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        //return ($productos);
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'code'=> 'required|min:1|max:10',
            'name'=> 'required|min:3|max:25',
            'description'=> 'required|min:3|max:255',
            'unit'=> 'required|integer',
            'price'=> 'required|decimal:2',
            'state'=> 'required',
        ]);

        Producto::create($request->post());
        //return $request->post();

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
        $request->validate([
            'code'=> 'required|min:1|max:10',
            'name'=> 'required|min:3|max:25',
            'description'=> 'required|min:3|max:255',
            'unit'=> 'required|integer',
            'price'=> 'required|decimal:2',
            'state'=> 'required',
        ]);
         
        $producto->fill($request->post())->save();
 
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
        $producto->delete();

        return redirect()->route('productos.index');
    }
}
