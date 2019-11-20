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
        $mensajes = [
            'ingrediente_nombre.required' => "El campo Nombre es requerido",
            'ingrediente_marca.required' => "El campo Marca es requerido",
            'ingrediente_precio.digits_between' => 'El limite de digitos es 5.',
            'ingrediente_precio.required' => "El campo Precio es requerido",
            'ingrediente_precio.numeric' => 'Solo se aceptan numeros.',
            'ingrediente_cantidad_disponible.required' => "El campo Cantidad Disponible es requerido",
            'ingrediente_cantidad_disponible.digits_between' => 'El limite de digitos es 4.',
            'ingrediente_cantidad_disponible.numeric' => 'Solo se aceptan numeros.',
            'ingrediente_fecha_vencimiento.required' => "El campo Fecha de Vencimiento es requerido",
            'ingrediente_fecha_vencimiento.after_or_equal' => "La fecha no puede ser menor o igual a la de hoy.",
        ];
        
        $request->validate([
            'ingrediente_nombre' => 'required|max:191',
            'ingrediente_marca' => 'required|max:191',
            'ingrediente_precio' => 'required|digits_between:4,5|numeric',
            'ingrediente_cantidad_disponible' => 'required|digits_between:2,4|numeric',
            'ingrediente_fecha_vencimiento' => 'required|after_or_equal:' . date("d-m-Y")
        ],$mensajes);

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
        $mensajes = [
            'ingrediente_nombre.required' => "El campo Nombre es requerido",
            'ingrediente_marca.required' => "El campo Marca es requerido",
            'ingrediente_precio.digits_between' => 'El limite de digitos es 5.',
            'ingrediente_precio.required' => "El campo Precio es requerido",
            'ingrediente_precio.numeric' => 'Solo se aceptan numeros.',
            'ingrediente_cantidad_disponible.required' => "El campo Cantidad Disponible es requerido",
            'ingrediente_cantidad_disponible.digits_between' => 'El limite de digitos es 4.',
            'ingrediente_cantidad_disponible.numeric' => 'Solo se aceptan numeros.',
            'ingrediente_fecha_vencimiento.required' => "El campo Fecha de Vencimiento es requerido",
            'ingrediente_fecha_vencimiento.after_or_equal' => "La fecha no puede ser menor o igual a la de hoy.",
        ];
        
        $request->validate([
            'ingrediente_nombre' => 'required|max:191',
            'ingrediente_marca' => 'required|max:191',
            'ingrediente_precio' => 'required|digits_between:4,5|numeric',
            'ingrediente_cantidad_disponible' => 'required|digits_between:2,4|numeric',
            'ingrediente_fecha_vencimiento' => 'required|after_or_equal:' . date("d-m-Y")
        ],$mensajes);
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
        $ori = App\Ingrediente::Find($id);

        $ori->delete();

        return redirect()->route('ingrediente.index');
    }
}
