<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\typepost;
use App\Models\Post;
use App\Models\Departament;
use App\Models\Province;
use App\Models\District;
use Illuminate\Support\Facades\Auth;

class PostulanteController extends Controller
{
    public function post_detalle($id_post){
        $post = Post::find($id_post);
        if($post){
            return view("postulante.postDetalle", compact("post"));
        }
        return view("404");
    }
    public function formularioPostular($id_post){
        $data = [
            "post" => Post::find($id_post),
            "depas" => Departament::all(),
            "provs" => Province::where("departamentos_id",Auth::user()->depa)->get(),
            "dists" => District::where("provincias_id",Auth::user()->prov)->get()
        ];
        return view("postulante.frmPostular", $data);
    }
}
