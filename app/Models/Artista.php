<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    public function musicas(){
        return $this->belongsToMany(Musica::class, 'composicoes');
    }
}
