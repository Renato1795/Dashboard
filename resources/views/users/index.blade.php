@extends('layouts.default')
@section('page-title', 'Usuários')
@section('page-actions')
    <a href="{{ route('users.create') }}" class="btn btn-primary">Adicionar Usuário</a>
@endsection
@section('content')
    @session('status')
        <div class="alert alert-success">
            {{$value}}
        </div>
    @endsession
    {{-- {{ dd($users) }} --}}


    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        {{-- <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger btn-sm" onclick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir este usuário?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }">Excluir</a> --}}
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
