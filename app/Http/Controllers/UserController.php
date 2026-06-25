<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Método para exibir a lista de usuários
    public function index()
    {
        $users = User::all(); // Obtém todos os usuários do banco de dados
        $var = 'teste';
        return view('users.index',compact('users','var'));
            //['users' => $users]); // Retorna a view com os usuários
    }

    // Método para exibir o formulário de criação de usuário
    public function create()
    {
        return view('users.create'); // Retorna a view do formulário de criação
    }
    public function store(Request $request)
    {
        dd($request);
    }
}


