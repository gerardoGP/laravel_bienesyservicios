<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ChrisDiCarlo\EloquentHumanTimestamps\HumanTimestamps;
class Post extends Model
{
    use HasFactory;
    use HumanTimestamps;
    public function typePosts(){
        return $this->belongsTo(typepost::class,'typePost_id');
    }
}
