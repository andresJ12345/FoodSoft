<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendedorController extends Controller
{

    public function InsertPro(Request $proveedor)
    {
    $proveedor->validate([
        'nombre' => 'required',
        'telefono' => 'required|numeric',
        'direccion' => 'required'
    ]);
    $instanciaproveedor = new App\Proveedor;
    $instanciaproveedor->nombre = $proveedor->nombre;
    $instanciaproveedor->telefono = $proveedor->telefono;
    $instanciaproveedor->direccion = $proveedor->direccion;
    $instanciaproveedor->save();
    return redirect('Proveedor/view')->with('guardado', 'El Proveedor Fue Guardado Con exito!');
    
}

public function ViewPro()
{
    
    return view('Vendedor/insert');
}

public function DeletePro($id)
{
    $deleteproveedor = App\Proveedor::FindOrFail($id);
    $deleteproveedor->delete();
    return redirect('Proveedor/view')->with('guardado', 'El Proveedor Fue Borrado Con exito!');
}

public function UpdatePro($id)
{
    $updateproveedor = App\Proveedor::FindOrFail($id);
    return view('Proveedor/update',compact('updateproveedor'));
}

public function UpdateBdPro(Request $proveedor)
{
    $instanciaproveedor = App\Proveedor::FindOrFail($proveedor->id);
    $instanciaproveedor->nombre = $proveedor->nombre;
    $instanciaproveedor->telefono = $proveedor->telefono;
    $instanciaproveedor->direccion = $proveedor->direccion;
    $instanciaproveedor->update();
    return redirect('Proveedor/view')->with('guardado','Registro Actualizado con Exito!');
}
}
