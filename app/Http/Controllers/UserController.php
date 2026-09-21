<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Método para exibir a lista de usuários
    public function index()
    {
        // Model User com método all() para buscar todos os usuários do banco de dados
        $users = User::all();
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
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
       /* dd($input); */

       User::create($input);
        return redirect()->route('users.index')
        ->with('status', 'Usuário criado com sucesso!');
    }

    public function edit(User $user)
    {
         return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'exclude_if:password,null|min:6' // A senha é opcional, mas se fornecida, deve ter no mínimo 6 caracteres.
        ]);
        // fill() preenche o modelo com os dados validados do formulário.
        $user->fill($input);
        $user->save();

        /* if (empty($input['password'])) {
            unset($input['password']);
        } */

        /* $user->update($input); */
        return back()
            /* ->route('users.index') */
            ->with('status', 'Usuário editado com sucesso!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        /* return redirect()->route('users.index') */
        return back()
            ->with('status', 'Usuário excluído com sucesso!');
    }
}
