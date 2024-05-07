@extends('layouts.app')

@section('content')
<div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
    <div class="page-content">
        <div class="transition-all duration-150 container-fluid" id="page_layout">
            <div id="content_layout">
                <div class=" md:flex justify-between items-center">
                    <div>
                        <div class="mb-5">
                            <ul class="m-0 p-0 list-none">
                                <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                                    <a href="/">
                                        <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                        <iconify-icon icon="heroicons-outline:chevron-right"
                                            class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                                    </a>
                                </li>
                                <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                                    Admin Menu
                                    <iconify-icon icon="heroicons-outline:chevron-right"
                                        class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                                </li>
                                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                    Permissions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-wrap ">
                        <button
                            class="btn inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 "
                            data-bs-toggle="modal" data-bs-target="#modal-add-permissions">
                            <span class="flex items-center">
                                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"></iconify-icon>
                                <span>Add Permissions</span>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="tab-content mt-6" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-list" permissions="tabpanel"
                        aria-labelledby="pills-list-tab">
                        <div class="tab-content">
                            <div class="card">
                                <div class="card-body px-6 rounded overflow-hidden">
                                    <div class="overflow-x-auto -mx-6 dashcode-data-table">
                                        <span class=" col-span-8  hidden"></span>
                                        <span class="  col-span-4 hidden"></span>
                                        <div class="inline-block min-w-full align-middle">
                                            <div class="overflow-hidden ">
                                                <table
                                                    class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                                    id="permissions">
                                                    <thead class=" border-t border-slate-100 dark:border-slate-800">
                                                        <tr>
                                                            <th scope="col" class="table-th">
                                                                No
                                                            </th>

                                                            <th scope="col" class="table-th ">
                                                                permissions Name
                                                            </th>

                                                            <th scope="col" class="table-th">
                                                                Guard Name
                                                            </th>

                                                            <th scope="col" class="table-th">
                                                                Action
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody
                                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add permissions -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="modal-add-permissions" tabindex="-1" aria-labelledby="vertically_center" aria-hidden="true">
    <div class="modal-dialog top-1/2 !-translate-y-1/2 relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                    rounded-md outline-none text-current">
            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                    <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                        Add permissions
                    </h3>
                    <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                        11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-4">
                    <form action="post" class="space-y-4" id="form-add-permissions" entype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="largeInput" class="form-label">Permissions Name</label>
                        <input type="text" class="form-control" name="permissions-name" placeholder="permissions Name"
                            required>
                    </form>
                </div>
                <div
                    class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                    <button id="btn-add-permissions"
                        class="btn inline-flex justify-center text-white bg-black-500">Add</button>
                    <button data-bs-dismiss="modal"
                        class="btn inline-flex justify-center text-white bg-black-500">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Add permissions -->

<!-- Modal Edit permissions -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="modal-edit-permissions" tabindex="-1" aria-labelledby="vertically_center" aria-hidden="true">
    <div class="modal-dialog top-1/2 !-translate-y-1/2 relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                    rounded-md outline-none text-current">
            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                <div
                    class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                    <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                        Edit Permissions
                    </h3>
                    <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                        11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-6 space-y-4">
                    <form action="post" class="space-y-4" id="form-edit-permissions" entype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="largeInput" class="form-label">Permissions Name</label>
                        <input type="hidden" class="form-control" name="edit-permissions-id" id="edit-permissions-id"
                            placeholder="permissions ID" required>
                        <input type="text" class="form-control" name="edit-permissions-name" id="edit-permissions-name"
                            placeholder="permissions Name">
                    </form>
                </div>
                <div
                    class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                    <button id="btn-edit-permissions"
                        class="btn inline-flex justify-center text-white bg-black-500">Edit</button>
                    <button data-bs-dismiss="modal"
                        class="btn inline-flex justify-center text-white bg-black-500">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Edit permissions -->

<script>
$(document).ready(function() {
    var permissions = $("#permissions").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_"
        },
        ajax: {
            url: "{{ route('get_all_permissions')}}",
            type: "GET",
            dataSrc: "",
        },
        columns: [{
                data: null,
                render: function(data, type, row, meta) {
                    return '<p class="table-td">' + (meta.row + 1) + '</p>';
                }
            },
            {
                data: "name",
                render: function(data, type, row) {
                    return '<p class="table-td">' + data + '</p>';
                }
            },
            {
                data: "guard_name",
                render: function(data, type, row) {
                    return '<p class="table-td">' + data + '</p>';
                }
            },
            {
                render: function(data, type, row) {
                    var btn =
                        '<div class="flex space-x-3 rtl:space-x-reverse dark:text-white">' +
                        '<button data-id="' + row.id +
                        '" class="action-btn" data-bs-toggle="modal" data-bs-target="#modal-edit-permissions">' +
                        '<iconify-icon icon="heroicons:pencil-square"></iconify-icon>' +
                        '</button>' +
                        '<button data-id="' + row.id +
                        '" class="action-btn btn-delete-permissions">' +
                        '<iconify-icon icon="heroicons:trash"></iconify-icon>' +
                        '</button>' +
                        '</div>';
                    return btn;
                },
                className: 'text-center',
                sortable: false
            }
        ],
        dom: "<'grid grid-cols-12 gap-5 px-6 mt-6'<'col-span-4'l><'col-span-8 flex justify-end'f><'#pagination.flex items-center'>><'min-w-full't><'flex justify-end items-center'p>",
        paging: true,
        ordering: true,
        info: false,
        searching: true,
        lengthChange: true,
        lengthMenu: [10, 25, 50, 100],
        language: {
            lengthMenu: "Show _MENU_ entries",
            paginate: {
                previous: "<iconify-icon icon=\"ic:round-keyboard-arrow-left\"></iconify-icon>",
                next: "<iconify-icon icon=\"ic:round-keyboard-arrow-right\"></iconify-icon>"
            },
            search: "Search:"
        }
    });

    $('#btn-add-permissions').click(function() {
        let button = $(this);
        button.prop('disabled', true);
        button.html(
            "<span class='spinner-border spinner-border-sm me-1' permissions='status' aria-hidden='true'></span> Please wait..."
        );
        let valid = true;
        let msg = '';
        $('#form-add-permissions :input[required]').each(function(index, element) {
            $(this).removeClass('is-invalid');
            $(this).next('span').removeClass('is-invalid');
            if ($(this).val() == '') {
                $(this).addClass('is-invalid');
                $(this).next('span').addClass('is-invalid');
                msg = 'Please Complete form data!';
                valid = false;
            }
        });

        if (valid) {
            let form_data = new FormData($('#form-add-permissions')[0]);

            $.ajax({
                type: "POST",
                url: "{{ route('add_permissions')}}",
                data: form_data,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(response) {
                    if (response.success) {
                        button.prop('disabled', false);
                        button.text('Add');
                        $('#form-add-permissions')[0].reset();
                        permissions.ajax.reload();
                        $('#modal-add-permissions').modal(
                            'hide');
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "success",
                            title: response.msg
                        });
                    } else {
                        button.prop('disabled', false);
                        button.text('Add');
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "error",
                            title: response.msg
                        });
                    }
                }
            });
        } else {
            button.prop('disabled', false);
            button.text('Add');
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "An error occurred in add permissions data!"
            });
        }
    });

    $('#modal-add-permissions').on('hide.bs.modal', function(e) {
        $('#form-add-permissions')[0].reset();
    });

    $('#modal-edit-permissions').on('show.bs.modal', function(e) {
        let id = $(e.relatedTarget).data('id');
        $.ajax({
            type: "GET",
            url: "{{ url('get_permissions_by_id') }}" + '/' + id,
            dataType: "JSON",
            success: function(response) {
                $('#edit-permissions-id').val(response.id);
                $('#edit-permissions-name').val(response.name);
            }
        });

    });

    $('#modal-edit-permissions').on('hide.bs.modal', function(e) {
        $('#form-edit-permissions')[0].reset();
    });

    $('#btn-edit-permissions').click(function() {
        let button = $(this);
        button.prop('disabled', true);
        button.html(
            "<span class='spinner-border spinner-border-sm me-1' permissions='status' aria-hidden='true'></span> Please wait..."
        );
        let valid = true;
        let msg = '';
        $('#form-edit-permissions :input[required]').each(function(index, element) {
            $(this).removeClass('is-invalid');
            $(this).next('span').removeClass('is-invalid');
            if ($(this).val() == '') {
                $(this).addClass('is-invalid');
                $(this).next('span').addClass('is-invalid');
                msg = 'Please Complete form data!';
                valid = false;
            }
        });

        if (valid) {
            let form_data = new FormData($('#form-edit-permissions')[0]);

            $.ajax({
                type: "POST",
                url: "{{ route('edit_permissions')}}",
                data: form_data,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(response) {
                    if (response.success) {
                        button.prop('disabled', false);
                        button.text('Edit');
                        $('#form-edit-permissions')[0].reset();
                        permissions.ajax.reload();
                        $('#modal-edit-permissions').modal(
                            'hide');
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "success",
                            title: response.msg
                        });
                    } else {
                        console.log(response);
                        button.prop('disabled', false);
                        button.text('Edit');
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "error",
                            title: response.msg
                        });
                    }
                }
            });
        } else {
            button.prop('disabled', false);
            button.text('Edit');
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "An error occurred in edit permissions data!"
            });
        }
    });

    $('body').on('click', '.btn-delete-permissions', function() {
        let id = $(this).data('id');
        let button = $(this);
        Swal.fire({
            title: "You Sure?",
            text: "permissions Data is Deleted Permanent!",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, Delete!",
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-secondary'
            },
        }).then((result) => {
            if (result.isConfirmed) {
                button.prop('disabled',
                    true);
                $.ajax({
                    type: "POST",
                    url: "{{ url('delete_permissions') }}" + '/' + id,
                    dataType: "JSON",
                    data: {
                        _token: '{{ csrf_token() }}',
                        _method: 'DELETE'
                    },
                    success: function(response) {
                        if (response.success) {
                            permissions.ajax.reload();
                            button.prop('disabled', false);
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.onmouseenter = Swal.stopTimer;
                                    toast.onmouseleave = Swal
                                        .resumeTimer;
                                }
                            });
                            Toast.fire({
                                icon: "success",
                                title: response.msg
                            });
                        } else {
                            console.log(response);
                            button.prop('disabled', false);
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.onmouseenter = Swal.stopTimer;
                                    toast.onmouseleave = Swal
                                        .resumeTimer;
                                }
                            });
                            Toast.fire({
                                icon: "error",
                                title: response.msg
                            });
                        }
                    }
                });
            }
        });
    });

});
</script>

@endsection