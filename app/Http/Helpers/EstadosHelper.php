<?php

namespace App\Http\Helpers;

use App\Models\Post;
use Illuminate\Support\Carbon;
class EstadosHelper
{
    public static function EstadoPost($id){
        $findPost = Post::find($id);
        if ($findPost) {
            $start = Carbon::parse($findPost->start_date);
            $end = Carbon::parse($findPost->last_date);
            $actual = Carbon::now();
            if ($actual->gt($start)) { //fecha actual mayor que fecha de inicio
                if ($actual->lt($end)) {// fecha actual menor que fecha de limite (fin)
                    return [
                        "state" => 1,
                        "html" => '<span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-1 rounded dark:bg-green-900 dark:text-green-300">Vigente</span>',
                        "message" => "Disponible para postular",
                    ];
                }else{
                    return [
                        "state" => 2,
                        "html" => "<span class='bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-1 rounded dark:bg-red-900 dark:text-red-300'>Finalizado</span>",
                        "message" => "No disponible para postular, culminó: ".$end->toDateTimeString(),
                    ];    
                }
            }else{
                return [
                    "state" => 2,
                    "html" => "<span class='bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-1 rounded dark:bg-yellow-900 dark:text-yellow-300'>No disponible</span>",
                    "message" => "Aun no Inicia, disponible a partir de ".$start->toDateTimeString(),
                ];
            }
        }
        return [
            "state" => 0,
            "html" => "Error",
            "message" => "No se encontro esta publicacion"
        ];
        
    }
}