<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TreioExercicio;

class Treino extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_ordem' => 'string'
    ];

    protected $casts = [
        'codigo_ordem' => 'string'
    ];

    public function treinoExercicios(){
        return $this->hasMany(TreinoExercicio::class);
    }
}
