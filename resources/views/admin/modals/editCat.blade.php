<div class="modal-header">
    <h5 class="modal-title" id="editCatTitle">Editing: {{ $category->title }} </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="" method="post" id="editCatForm">
        {{ method_field('PUT') }}
        @csrf
        <div class="form-group row">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control" placeholder="{{ $category->title }}"
                aria-describedby="helpId">
        </div>

        {{-- <div class="form-group row">
            <label for="roles" style="margin-right: 300px;">Roles</label>
            <select class="form-control" name="userRoles[]" id="userRoles" multiple>
                @foreach ($roles as $role)
                    <option value="{{ $role['id'] }}" @if ($user->hasRole($role['name'])) selected @endif>{{ $role['name'] }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group row">
            <label for="username">Alts</label>
            <input type="text" id="alts" class="form-control" value="{{ $user->getAlts() }}"
                aria-describedby="helpId" disabled>
        </div> --}}

    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" id="editUserSaveBtn">Save</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
