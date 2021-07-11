@extends('admin.layouts.adminapp')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Forum Categories</h4>
                    @include('admin.partials.breadcrumb')
                </div>
            </div>

            <div class="col-sm-6">
                <div class="float-right d-none d-md-block">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-settings mr-2"></i> Settings
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- Row -->
        <div class="row">
            <div class="card col-12">
                <div class="card-body">
                    <table class="table" id="categoryTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Parent</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="modal fade" id="mainModal" role="dialog" aria-labelledby="mainModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content load_modal"></div>
                        </div>
                    </div>
                    <!-- /.modal -->
                </div>
            </div>
        </div>
    </div> <!-- container-fluid -->
@endsection
@section('scripts')
    <script type="text/javascript">
        var table = $('#categoryTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.category') }}",
            order: [
                [1, "asc"]
            ],
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'parent',
                    name: 'parent'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'image',
                    name: 'image'
                },
                {
                    data: 'created_at',
                    name: 'created'
                },
                {
                    data: 'updated_at',
                    name: 'updated'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

    $('#categoryTable').on('click', '#editCatBtn', function (e) {
        var url = $(this).attr('form-action-url');
        var id = $(this).attr('data-id');
        var action = $(this).attr('data-action');
        var base = '/admin/forum/cateogry/'+action+'/';
        $.get(base + id + '/' + action, function(data) {
            console.log(data);
            $('#mainModal').modal();
            $('#mainModal').on('shown.bs.modal', function() {
                $('#mainModal .load_modal').html(data);
                /*$('#editUserForm').attr('action', url);
                $('#userRoles').select2({
                    theme: 'bootstrap4',
                    // multiple: true,
                });*/
            });
            $('#mainModal').on('hidden.bs.modal', function(){
                $('#mainModal .modal-body').html('');
            });
        });
    });
    </script>
@endsection
