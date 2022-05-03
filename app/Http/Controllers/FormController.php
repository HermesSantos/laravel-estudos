<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class FormController extends Controller
{
    public function enviar(Request $request){

        $data = $request->all();
        data::create($data);
        return redirect('/')->with('flash_message', 'Endereço adicionado', 200);
    }
}
