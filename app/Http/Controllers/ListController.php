<?php

namespace App\Http\Controllers;
use App\Models\data;
use Illuminate\Http\Request;

class ListController extends Controller
{
    function listar()
    {
        $data = data::all();
        return view('list', ['enderecos'=>$data]);
    }

    
}
