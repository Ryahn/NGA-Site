<div class="modal-header">
    <h5 class="modal-title" id="rolesTitle">Showing Alts for: {{ $user->username }}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
   <div id="roleData">{{ $alts }}</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
