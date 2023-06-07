<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GrupoMuscular;
use App\Models\TreinoExercicio;

class Exercicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome' =>'string'
    ];

    protected $casts = [
        'nome' => 'string'
    ];

    public function grupo_muscular(){
        return $this->belongsTo(GrupoMuscular::class);
    }

    public function TreinoExercicios(){
        return $this->hasMany(TreinoExercicio::class);
    }

}
