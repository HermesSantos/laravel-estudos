<?php

namespace App\Http\Controllers;
use App\Models\data;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    function delete($id)
    {
        data::destroy($id);
        return redirect('/list');
    }
}
