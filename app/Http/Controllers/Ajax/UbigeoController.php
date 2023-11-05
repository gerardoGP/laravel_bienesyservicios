<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Departament;
use App\Models\Province;
use App\Models\District;
class UbigeoController extends Controller
{
    public function get_departamentos(){
        return response()->json(Departament::all());
    }
    public function get_prov_by_dep($id_dep){
        return response()->json(Province::where('departamentos_id',$id_dep)->get());
    }
    public function get_dist_by_prov($id_prov){
        return response()->json(District::where('provincias_id',$id_prov)->get());
    }
}
