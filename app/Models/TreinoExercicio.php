<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Treino;
use App\Models\Exercicio;

class TreinoExercicio extends Model
{
    use HasFactory;

    public function treino(){
        return $this->belongsTo(Treino::class);
    }

    public function exercicio(){
        return $this->belongsTo(exercicio::class);
    }
}
