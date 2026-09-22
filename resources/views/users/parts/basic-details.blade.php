


<form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label  class="form-label">Nome</label>
    {{-- Usa-se o ?? com senão. Caso o old('name') não exista, ele pega o $user->name. --}}
    <input type="text" name="name" value="{{ old('name') ?? $user->name }}" class="form-control @error('name') is-invalid @enderror"  aria-describedby="emailHelp">
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label  class="form-label">Senha</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" aria-describedby="emailHelp">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>


  {{-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> --}}

  <button type="submit" class="btn btn-primary">Editar</button>
</form>
