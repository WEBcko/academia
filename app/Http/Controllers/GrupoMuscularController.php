<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoMuscular;
use App\Models\Exercicio;

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

    // Dos outros 3 integrantes grupo, casava apenas com um
    public function update($id)
    {
        $data = $this->request->all();

        $updated = $this->model->findOrFail($id)->update($data);

        return redirect()->route('grupo.index');
    }

    // Função que deletará o grupo muscular, apenas se não possuir um exercicio atrelado, se sim apenas o desativa
    public function destroy($id, Exercicio $ex)
    {

        $exercicios = $ex->where('grupo_muscular_id', $id)->get()->toArray();

        if (empty($exercicios)){
            $deleted = $this->model->findOrFail($id)->delete();
        } else {
            $updated = $this->model->findOrFail($id)->update(['ativo' => false]);
        }

        return redirect()->route('grupo.index');
    }

}
