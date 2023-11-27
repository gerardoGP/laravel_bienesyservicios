<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TypePostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["id"=>1,"name"=>"Bien","url_doc"=>"https://drive.google.com/drive/folders/1LTNoSWZdIPUiDHfGGg31og5QFw1mXQMP?usp=drive_link"],
            ["id"=>2,"name"=>"Servicio","url_doc"=>"https://drive.google.com/drive/folders/11h8fJNnmNOMXGwaHxwt9mKjK48HkZjNO?usp=drive_link"]
        ];
        DB::table('typeposts')->insert($data);
    }
}
