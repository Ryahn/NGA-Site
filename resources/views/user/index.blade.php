@extends('layouts.app')
@section('content')
<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">


                    @include('partials.breadcrumb')
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-success svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path
                                        d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                        <!--begin::Navigation-->
                        <ul class="navi navi-hover">
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">User Actions:</span>
                            </li>
                            <li class="navi-separator mb-3 opacity-70"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        {{-- <span class="label label-xl label-inline label-light-success">Add User</span> --}}
                                        <span class="btn btn-xl btn-inline btn-light-success btn-user-actions">Add
                                            User</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        {{-- <span class="label label-xl label-inline label-light-danger">Add ALT</span> --}}
                                        <span class="btn btn-xl btn-inline btn-light-danger btn-user-actions">Add
                                            ALT</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <table class="table table-bordered yajra-datatable" id="usersIndex">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Clan</th>
                        <th>Leader</th>
                        <th>Role</th>
                        <th>Alts</th>
                        <th>Stats</th>
                        <th>Ships</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div class="modal fade" id="mainModal" role="dialog" aria-labelledby="mainModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content load_modal"></div>
                </div>
            </div>
            <!-- /.modal -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection
@section('scripts')
<script type="text/javascript">
    $(function () {


    var table = $('#usersIndex').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.index') }}",
        order: [[ 1, "asc" ]],
        columns: [
            {data: 'id', name: 'id'},
            {data: 'username', name: 'username'},
            {data: 'clan', name: 'clan', orderable: false, searchable: false },
            {data: 'leader', name: 'leader', orderable: false, searchable: false },
            {data: 'role', name: 'role', orderable: false, searchable: false },
            {data: 'alts', name: 'alts', orderable: false, searchable: false },
            {data: 'stats', name: 'stats', orderable: false, searchable: false },
            {data: 'ships', name: 'ships', orderable: false, searchable: false },
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#usersIndex').on('click', '#deleteUserBtn', function (e) {
        // var answer=confirm('Are you sure?');
        var url = $(this).attr('form-action-url');
        var current_object = $(this);
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "This will remove the user and all their data from the dashabord.",
            icon: "error",
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'Delete!',
        }).then(function (result) {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    url: url,
                    success: function (response) {
                        if(response.status) {
                            toastr.success(response.msg);
                            table.ajax.reload();
                        }
                        toastr.error(response.msg);
                    },
                        error: function (jqXHR, textStatus, errorThrown) {
                        console.log(JSON.stringify(jqXHR));
                        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                });
            } else {
                e.preventDefault();
                return false;
            }
            e.preventDefault();
            return false;
        });
        e.preventDefault();
        return false;
    });

    $('#usersIndex').on('click', '#editUserBtn', function (e) {
        var url = $(this).attr('form-action-url');
        var id = $(this).attr('data-id');
        var action = $(this).attr('data-action');
        var base = '/dashboard/users/'+action+'/';
        $.get(base + id + '/load-' + action, function(data) {
            $('#mainModal').modal();
            $('#mainModal').on('shown.bs.modal', function() {
                $('#mainModal .load_modal').html(data);
                $('#editUserForm').attr('action', url);
                $('#userRoles').select2({
                    theme: 'bootstrap4',
                    // multiple: true,
                });
            });
            $('#mainModal').on('hidden.bs.modal', function(){
                $('#mainModal .modal-body').html('');
            });

        });

    });

    $('#usersIndex').on('click', '#addAltBtn', function () {
        var url = $(this).attr('form-action-url');
        var id = $(this).attr('data-id');
        var action = $(this).attr('data-action');
        var base = '/dashboard/users/'+action+'/';
        $.get(base + id + '/load-' + action, function(data) {
            $('#mainModal').modal();
            $('#mainModal').on('shown.bs.modal', function() {
                $('#mainModal .load_modal').html(data);
                $('#addAltForm').attr('action', url);
                $('#altUsersSelect').select2({
                    theme: 'bootstrap4',
                    // multiple: true,
                });
            });
            $('#mainModal').on('hidden.bs.modal', function(){
                $('#mainModal .modal-body').data('');
            });

        });
    });

    $('#mainModal').on('click','#editUserSaveBtn', function (e) {
        var url = $('#editUserForm').attr('action');
        var action = $('#editUserForm').attr('method');

        toastr.info('Sending....');

        $.ajax({
            url: url,
            type: action,
            data: $('#editUserForm').serialize(),
            cache: false,
            success: function(data) {
                if (data.status) {
                    toastr.success(data.msg);
                    $('#mainModal').modal('hide');
                }
                toastr.error(data.msg);
            }
        })

        return false;
    });

    $('#mainModal').on('click','#altUserSaveBtn', function (e) {
        var url = $('#addAltForm').attr('action');
        var action = $('#addAltForm').attr('method');

        toastr.info('Sending....');

        $.ajax({
            url: url,
            type: action,
            data: $('#addAltForm').serialize(),
            cache: false,
            success: function(data) {
                if (data.status) {
                    toastr.success(data.msg);
                    $('#mainModal').modal('hide');
                }
                toastr.error(data.msg);
            }
        })

        return false;
    });

    $('#usersIndex').on('click', '#showRolesbtn', function () {
        var id = $(this).attr('data-id');
        var action = $(this).attr('data-action');
        var base = '/dashboard/users/'+action+'/';
        $.get(base + id + '/load-' + action, function(response) {
            $('#mainModal').modal();
            $('#mainModal').on('shown.bs.modal', function() {
                $('#mainModal .load_modal').html(response);
            });
            $('#mainModal').on('hidden.bs.modal', function(){
                $('#mainModal .modal-body').data('');
            });
        });
    });

    $('#usersIndex').on('click', '#showAltsBtn', function () {
        var id = $(this).attr('data-id');
        var action = $(this).attr('data-action');
        var base = '/dashboard/users/'+action+'/';
        $.get(base + id + '/load-' + action, function(response) {
            $('#mainModal').modal();
            $('#mainModal').on('shown.bs.modal', function() {
                $('#mainModal .load_modal').html(response);
            });
            $('#mainModal').on('hidden.bs.modal', function(){
                $('#mainModal .modal-body').data('');
            });
        });
    });

    $('#usersIndex').on('click', '#showStatsBtn', function () {
        var id = $(this).attr('data-id');
        var action = $(this).attr('data-action');
        var base = '/dashboard/users/'+action+'/';
        $.get(base + id + '/load-' + action, function(response) {
            $('div[class*="modal-dialog"]').addClass('stats-dialog');
            $('#mainModal').modal();
            $('#mainModal').on('shown.bs.modal', function() {
                $('#mainModal .load_modal').html(response);
            });
            $('#mainModal').on('hidden.bs.modal', function(){
                $('#mainModal .modal-body').data('');
                $('div[class*="modal-dialog"]').removeClass('stats-dialog');
            });
        });
    });

    $('#usersIndex').on('click', '#showShipsBtn', function () {
        var id = $(this).attr('data-id');
        var action = $(this).attr('data-action');
        var base = '/dashboard/users/'+action+'/';
        $.get(base + id + '/load-' + action, function(response) {
            $('div[class*="modal-dialog"]').addClass('stats-dialog');
            $('#mainModal').modal();
            $('#mainModal').on('shown.bs.modal', function() {
                $('#mainModal .load_modal').html(response);
            });
            $('#mainModal').on('hidden.bs.modal', function(){
                $('#mainModal .modal-body').data('');
                $('div[class*="modal-dialog"]').removeClass('stats-dialog');
            });
        });
    });
    function addCommas(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }

    $('#mainModal').on('click', '#statsOfShip', function() {
        var shipid= $(this).attr('data-shipid');
        var shipUser= $(this).attr('data-shipuserid');
        var shipName= $(this).attr('data-shipname');
        // $.get()
        var shipUrl = '/dashboard/users/shipStats/'+shipid+'/'+shipUser

        $.get(shipUrl, function(data) {
            Swal.fire({
                title: "Ship Stats for "+shipName,
                customClass: {
                    popup: 'shipStats-popup',
                    content: 'shipStats-container',
                    header: 'shipStats-container',
                    container: 'shipStats-container'
                },
                html: `
                <div class="row stats-row">
                    <div class="col col-stats">
                        <div class="div-group">
                            <div class="group-text">
                                Ship Avg Dmg
                            </div>
                            <div class="div-control">${addCommas(data.average_damage_dealt)}</div>
                        </div>
                    </div><!-- End Col -->
                    <div class="col col-stats">
                        <div class="div-group">
                            <div class="group-text">
                               Ship Avg Frags
                            </div>
                            <div class="div-control">${addCommas(data.average_frags)}</div>
                        </div>
                    </div><!-- End Col -->
                    <div class="col col-stats">
                        <div class="div-group">
                            <div class="group-text">
                               Ship Avg Wins
                            </div>
                            <div class="div-control">${addCommas(data.win_rate)}</div>
                        </div>
                    </div><!-- End Col -->
                </div>
                <div class="row stats-row">
                    <div class="col col-stats">
                        <div class="div-group">
                            <div class="group-text">
                                Player Wins
                            </div>
                            <div class="div-control">${addCommas(data.wins)}</div>
                        </div>
                    </div><!-- End Col -->
                    <div class="col col-stats">
                        <div class="div-group">
                            <div class="group-text">
                                Player Frags
                            </div>
                            <div class="div-control">${addCommas(data.frags)}</div>
                        </div>
                    </div><!-- End Col -->
                    <div class="col col-stats">
                        <div class="div-group">
                            <div class="group-text">
                                Player Max Dmg
                            </div>
                            <div class="div-control">${addCommas(data.max_damage_dealt)}</div>
                        </div>
                    </div><!-- End Col -->
                </div>
                `
            });
        });
    });

});//End


</script>
@endsection
