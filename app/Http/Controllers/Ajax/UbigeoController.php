<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Departament;
class UbigeoController extends Controller
{
    public function get_departamentos(){
        return response()->json(Departament::all());
    }
}
