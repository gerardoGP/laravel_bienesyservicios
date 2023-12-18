<?php
namespace App\Http\Helpers;
class FormatoFecha
{
    public static function public_post($fecha_hora){
        if ($fecha_hora == "") {
            return "";
        }
        $explode =  explode(" ",$fecha_hora);

        $fec_explode = explode("-", $explode[0]);
        $hr_explode = explode(":",$explode[1]);
        return $fec_explode[2]."/".$fec_explode[1]."/".$fec_explode[0].", ".$hr_explode[0].":".$hr_explode[1];
    }
}
