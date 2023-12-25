<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
class DashboardController extends Controller
{
    public function index(){
        $data = [
            "total_prov" => User::where("rol_id","=","2")->count()
        ];
        return view('admin.index');
    }
}
