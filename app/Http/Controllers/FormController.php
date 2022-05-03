<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class FormController extends Controller
{
    public function enviar(Request $request){

        $data = new data;
        $data->Comprador = $request->Comprador;
        $data->Endereco = $request->Endereco;
        $data->save();
        return redirect('/')->with('flash_message', 'Endereço adicionado');
    }
}
