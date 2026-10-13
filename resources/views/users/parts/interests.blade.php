<div class="card">

    <form action="{{ route('users.updateProfile', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card-header">
            Interesses
        </div>
        <div class="card-body">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                <label class="form-check-label" for="checkChecked">
                    Checked checkbox
                </label>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

</div>


