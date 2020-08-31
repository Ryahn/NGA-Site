<div class="modal-header">
    <h5 class="modal-title" id="addAltTitle">Adding ALT To: {{ $user->username }}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="" method="post" id="addAltForm">
        <div class="form-group row">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="{{ $user->username }}"
                aria-describedby="helpId" disabled>
        </div>

        <div class="form-group row">
            <label for="alts" style="margin-right: 300px;">Alt Usernames</label>
            <select multiple="multiple" class="form-control" name="alts[]" id="altUsersSelect">
                @foreach ($users as $user1)
                    <option value="{{ $user1->id }}" @if (in_array($user1->id, $user->getAltIds())) selected @endif>{{ $user1->username }}</option>
                @endforeach
            </select>
        </div>

    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" id="altUserSaveBtn">Save</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
