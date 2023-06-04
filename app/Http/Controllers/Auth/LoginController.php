<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(User $user, Request $request){
        $this->model = $user;
        $this->request = $request;
    }

    public function index(){

        return view('auth.login');
    }

    public function act(){

        $credentials = $this->request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $this->request->session()->regenerate();
            return redirect('/')
                ->withSuccess('Sucesso');
        }

        return back()->withErrors([
            'email' => 'Email nao existe',
        ])->onlyInput('email');
    }
}
