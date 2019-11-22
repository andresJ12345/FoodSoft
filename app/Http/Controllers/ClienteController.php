<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ClienteController extends Controller
{
    
    public function InsertCli(Request $cliente)
    {

        $cliente->validate([

            'cliente_nombre' => 'required|max:45',
            'cliente_apellido' => 'required|max:45',
            'cliente_tipo_documento' =>'required',
            'cliente_num_doc' => 'required|numeric|digits_between:1,16',
            'cliente_edad' => 'required|numeric|digits_between:1,3',
            'cliente_direccion' => 'required|max:100',
            'cliente_telefono' => 'required|numeric|digits_between:1,16'


        ]);

        $instanciacliente = new App\Cliente;
        $instanciacliente->cliente_nombre = $cliente->cliente_nombre;
        $instanciacliente->cliente_apellido = $cliente->cliente_apellido;
        $instanciacliente->cliente_tipo_documento = $cliente->cliente_tipo_documento;
        $instanciacliente->cliente_num_doc = $cliente->cliente_num_doc;
        $instanciacliente->cliente_edad = $cliente->cliente_edad;
        $instanciacliente->cliente_direccion = $cliente->cliente_direccion;
        $instanciacliente->cliente_telefono = $cliente->cliente_telefono;
        $instanciacliente->save();
        return redirect('Cliente/view')->with('guardado',
        'El proveedor fue guardado con exito!');

    }

    public function ViewCli()
        {
            $objetoretornado = App\Cliente::paginate(5);
            return view('Cliente/view',compact('objetoretornado'));
        }


        public function DeleteCli($id)
        {
            $deletecliente = App\Cliente::FindOrFail($id);
            $deletecliente->delete();
            return redirect('Cliente/view')->with('guardado','El cliente Fue Borrado Con Exito');
            

        }

        public function UpdateCli($cliente_id)
        {
            $updatecliente= App\Cliente::FindOrFail($cliente_id);
            return view('Cliente/update',compact('updatecliente'));


        }

        public function insertCliente()
        {
            
            return view('Cliente/insert');


        }

        public function UpdateBdCli(Request $cliente)
        {
            $cliente->validate([

                'cliente_nombre' => 'required|max:45',
                'cliente_apellido' => 'required|max:45',
                'cliente_tipo_documento' =>'required',
                'cliente_num_doc' => 'required|numeric|digits_between:1,16',
                'cliente_edad' => 'required|numeric|digits_between:1,3',
                'cliente_direccion' => 'required|max:100',
                'cliente_telefono' => 'required|numeric|digits_between:1,16'
    
    
            ]);

            $instanciacliente = App\Cliente:: FindOrFail($cliente->id);
            $instanciacliente->cliente_nombre = $cliente->cliente_nombre;
            $instanciacliente->cliente_apellido = $cliente->cliente_apellido;
            $instanciacliente->cliente_tipo_documento = $cliente->cliente_tipo_documento;
            $instanciacliente->cliente_num_doc = $cliente->cliente_num_doc;
            $instanciacliente->cliente_edad = $cliente->cliente_edad;
            $instanciacliente->cliente_direccion = $cliente->cliente_direccion;
            $instanciacliente->cliente_telefono = $cliente->cliente_telefono;
            $instanciacliente->update();

            return redirect('Cliente/view')->with('guardado','Registro Actualizado Con Exito!');

        }
    
}