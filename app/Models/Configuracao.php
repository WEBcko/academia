<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    use HasFactory;

    //diz quais campos podem ser prenchidos
    protected $fillable = [
        'horarios_funcionamento',
        'ocupacao'
    ];

    //ele faz o cast do dado a ser inserido
    protected $casts = [
        'ocupacao' => 'integer'
    ];
}
