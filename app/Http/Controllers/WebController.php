<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class WebController extends Controller
{
    //
    public function index(){
        // $posts = Post::orderBy("created_at","desc")->paginate(10);
        $posts = Post::orderBy("last_date","desc")
        ->paginate(100);
        return view("publicPosts", compact("posts"));
    }
    public function searchByDescription(Request $request){
        
    }
}