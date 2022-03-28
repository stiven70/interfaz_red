<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //Relacion muchos a muchos
    public function audios()
    {
        return $this->belongsToMany('App\Models\Audios');
    }
}
