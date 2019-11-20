<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;

class IngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ori = App\Ingrediente::all();

        return view('Ingredientes/view',compact('ori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ingredientes/insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ingrediente_nombre' => 'required',
            'ingrediente_marca' => 'required',
            'ingrediente_precio' => 'required',
            'ingrediente_cantidad_disponible' => 'required',
            'ingrediente_fecha_vencimiento' => 'required'
        ]);

        $ining = new App\Ingrediente();
        $ining->ingrediente_nombre = $request->ingrediente_nombre;
        $ining->ingrediente_marca = $request->ingrediente_marca;
        $ining->ingrediente_precio = $request->ingrediente_precio;
        $ining->ingrediente_cantidad_disponible = $request->ingrediente_cantidad_disponible;
        $ining->ingrediente_fecha_vencimiento = $request->ingrediente_fecha_vencimiento;

        $ining->save();
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ori = App\Ingrediente::where('ingrediente_id',$id)->get();

        return view('Ingredientes/detail',compact('ori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
