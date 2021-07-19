<div class="modal-header">
    <h5 class="modal-title" id="editCatTitle">Creating New Category</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    {!! Form::open(['route' => 'admin.category.store']) !!}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="icon">Icon</label>
        <input type="text" name="image" id="image" aria-describedby="emailHelp"
            placeholder='<i class="fas fa-users"></i>' class="form-control">
        <small id="emailHelp" class="form-text text-muted">Fontawesome icons (HTML INCLUDED!!)</small>
    </div>
    <div class="form-group">
        <label for="parent">Parent</label>
        <select name="parent" id="parentCat" class="form-control">
            <option value="">Select</option>
            @foreach ($cats as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>
    </div>

    {{ Form::close() }}
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" id="createCatSave">Save</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
