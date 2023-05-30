<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        // $this->middleware('auth');
        $this->model = $user;

    }

    public function index(){

        $users = $this->model->get()->toArray();


        return view('welcome', \compact('users'));
    }
}
