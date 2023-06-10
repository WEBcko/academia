<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exercicios;

class GrupoMuscular extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function exercicios(){
        return $this->hasMany(Exercicio::class);
    }

}
