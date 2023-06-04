<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __construct(User $user, Request $request){
        $this->model = $user;
        $this->request = $request;
    }

    public function index(){

        return view('auth.register');
    }

    public function register(){

        $user = $this->request->all();

        $validated =$this->request->validate([
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
        ]);

        $user['password'] = Hash::make($user['password']);

        $created = $this->model->create($user);

        return view('auth.login');
    }
}
