<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostulanteController extends Controller
{
    //
    public function post_detalle($id_post){
        $post = Post::find($id_post);
        if($post){
            return view("postulante.postDetalle", compact("post"));
        }
        return view("404");
    }
    public function formularioPostular($id_post){
        $post = Post::find($id_post);
        return view("postulante.frmPostular", compact("post"));
    }
}
