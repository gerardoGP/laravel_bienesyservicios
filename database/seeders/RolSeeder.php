<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["id"=>1,"name"=>"Administrador"],
            ["id"=>2,"name"=>"Proveedor"]
        ];
        DB::table('roles')->insert($data);
    }
}
