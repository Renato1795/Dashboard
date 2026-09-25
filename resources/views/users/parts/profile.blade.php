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
                @foreach (['PJ', 'PF'] as $type)
                    <option
                        value="{{ $type }}"
                        @selected(old('type') === $type || $user?->profile?->type === $type)
                        >{{ $type }}
                    </option>
                @endforeach
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
        {{-- Em "$user?->profile?->address", o "?" é usado para evitar erros caso o perfil do usuário não exista. Se o perfil não existir, ele retorna null em vez de lançar um erro. --}}
        <input type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') ?? $user?->profile?->address}}">
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


