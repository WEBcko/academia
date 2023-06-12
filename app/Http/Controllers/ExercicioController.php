<?php

namespace App\Http\Controllers;

use App\Models\Exercicio;
use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    public function __construct(Exercicio $exec, Request $request){
        $this->model = $exec;
        $this->request = $request;
    }

    public function index()
    {
        $dados = $this->model->get();
        
        return view('exercicio.index', compact('dados'));
    }

    public function create()
    {
        return view('exercicio.new');
    }

    public function store()
    {
        $formData = $this->request->all();

        $created = $this->model->create($formData);

        return redirect()->route('exercicio.index');
    }

    public function edit($id)
    {
        $data = $this->model->findOrFail($id);
        return view('exercicio.edit', compact('data'));
    }

    public function update($id)
    {
        $data = $this->request->all();

        $update = $this->model->findOrFail($id)->update($data);

        return redirect()->route('exercio.index');
    }

    public function destroy($id)
    {
        $exercicio = Exercicio::findOrFail($id);
        
        $exercicio->delete();

        return redirect()->route('exercicio.index');
    }
}
