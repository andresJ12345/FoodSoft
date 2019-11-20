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

        $ori = new App\Ingrediente();
        $ori->ingrediente_nombre = $request->ingrediente_nombre;
        $ori->ingrediente_marca = $request->ingrediente_marca;
        $ori->ingrediente_precio = $request->ingrediente_precio;
        $ori->ingrediente_cantidad_disponible = $request->ingrediente_cantidad_disponible;
        $ori->ingrediente_fecha_vencimiento = $request->ingrediente_fecha_vencimiento;

        $ori->save();

        return redirect()->route('ingrediente.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ori = App\Ingrediente::find($id);

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
        $ori = App\Ingrediente::find($id);

        return view('Ingredientes/update',compact('ori'));
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
        $request->validate([
            'ingrediente_nombre' => 'required',
            'ingrediente_marca' => 'required',
            'ingrediente_precio' => 'required',
            'ingrediente_cantidad_disponible' => 'required',
            'ingrediente_fecha_vencimiento' => 'required'
        ]);
        $ori = App\Ingrediente::find($id);

        $ori->ingrediente_nombre = $request->ingrediente_nombre;
        $ori->ingrediente_marca = $request->ingrediente_marca;
        $ori->ingrediente_precio = $request->ingrediente_precio;
        $ori->ingrediente_cantidad_disponible = $request->ingrediente_cantidad_disponible;
        $ori->ingrediente_fecha_vencimiento = $request->ingrediente_fecha_vencimiento;

        $ori->update();

        return redirect()->route('ingrediente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$ori = App\Ingrediente::Find($id);

        $ori->delete();

        return redirect()->route('ingrediente.index');*/

        echo "Llega";
    }
}
