@extends('layouts.default')

@section('page-title', 'Criar Usuário')

@section('content')
<form action="{{ route('users.store') }}" method="post">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Nome</label>
    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"  aria-describedby="emailHelp">
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  {{-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> --}}

  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
@endsection
