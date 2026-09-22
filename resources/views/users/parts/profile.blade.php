<div class="card">
    <form action="{{ route('users.updateProfile', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card-header">
            Perfil
        <div class="card-body"></div>
            <div class="mb-3">
            <label  class="form-label">Tipo de pessoa</label>
            <select name="type" class="form-control @error('type') is-invalid @enderror">
                <option value="PF">PF</option>
                <option value="PJ">PJ</option>
            </select>
    {{-- Usa-se o "??" como senão. Caso o old('name') não exista, ele pega o $user->name. --}}

    @error('type')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>
<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Endereço</label>
        <input type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('address')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

{{-- <div class="mb-3">
        <label  class="form-label">Senha</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" aria-describedby="emailHelp">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
</div> --}}
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

</div>


