<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoMuscular;

class GrupoMuscularController extends Controller
{

    public function index(GrupoMuscular $gm){

        $dados = $gm->get();
        $asd = 12;

        return view('grupo_muscular.index', compact('dados', 'asd'));
    }

    public function create(GrupoMuscular $gm){

        $dados = $gm->get();
        $asd = 12;

        return view('grupo_muscular.index', compact('dados', 'asd'));
    }


}
