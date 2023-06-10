<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoMuscular;

class GrupoMuscularController extends Controller
{

    // Construtor para ação rapida no decorrer da controller
    public function __construct(GrupoMuscular $grupo, Request $request){
        $this->model = $grupo; // Atributo que nos dará acesso rapido a model padrão da controller
        $this->request = $request; // Atributo que nos dará acesso rapido para toda request no contexto da função/rota
    }

    // Leva para a view inicial com todos os grupos cadastrados
    public function index(){

        $dados = $this->model->get();

        return view('grupo_muscular.index', compact('dados'));
    }

    // Leva para o formulário de criação de um novo grupo
    public function create(){

        return view('grupo_muscular.new');
    }

    // Função que receberá o formulário e fará a criação do novo grupo
    public function store()
    {
        $formData = $this->request->all();

        $created = $this->model->create($formData);

        return redirect()->route('grupo.index');
    }

    // Função que receberá o formuário e fará a atualização de um grupo existente
    public function edit($id)
    {
        $data = $this->model->findOrFail($id);
        return view('grupo_muscular.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personal $personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personal $personal)
    {
        //
    }


}
