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
                                        <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                                    </a>
                                </li>
                                <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                                    Admin Menu
                                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                                </li>
                                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                    User</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-wrap ">
                        <button class="btn inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 " data-bs-toggle="modal" data-bs-target="#modal-add-user">
                            <span class="flex items-center">
                                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"></iconify-icon>
                                <span>Add User</span>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="tab-content mt-6" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-list" user="tabpanel" aria-labelledby="pills-list-tab">
                        <div class="tab-content">
                            <div class="card">
                                <div class="card-body px-6 rounded overflow-hidden">
                                    <div class="overflow-x-auto -mx-6 dashcode-data-table">
                                        <span class=" col-span-8  hidden"></span>
                                        <span class="  col-span-4 hidden"></span>
                                        <div class="inline-block min-w-full align-middle">
                                            <div class="overflow-hidden ">
                                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="user">
                                                    <thead class=" border-t border-slate-100 dark:border-slate-800">
                                                        <tr>
                                                            <th scope="col" class="table-th">

                                                            </th>

                                                            <th scope="col" class="table-th ">
                                                                Name
                                                            </th>

                                                            <th scope="col" class="table-th">
                                                                Email
                                                            </th>

                                                            <th scope="col" class="table-th">
                                                                Provider
                                                            </th>

                                                            <th scope="col" class="table-th">
                                                                Last Login
                                                            </th>

                                                            <th scope="col" class="table-th">
                                                                Created At
                                                            </th>

                                                            <th scope="col" class="table-th">
                                                                Action
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

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

<!-- Modal Detail user -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modal-detail-user" tabindex="-1" aria-labelledby="vertically_center" aria-hidden="true">
    <div class="modal-dialog top-1/2 !-translate-y-1/2 relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                    rounded-md outline-none text-current">
            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                    <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                        Detail user
                    </h3>
                    <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                        11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-4">
                    <div>
                        <div class="h-[100px] w-[100px] rounded-full mx-auto mb-4">
                            <img src="assets/images/avatar/av-1.svg" id="user-detail-avatar" class="block w-full h-full object-cover rounded-full">
                        </div>
                        <div class="text-center">
                            <h5 class="text-base text-slate-600 dark:text-slate-300 font-medium mb-1" id="user-detail-name">User Fullname
                            </h5>
                            <h6 class="text-xs text-slate-600 dark:text-slate-300 font-normal" id="user-detail-email">
                                User Email</h6>
                        </div>
                        <ul class="list-item mt-5 space-y-4 border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                            <li class="flex justify-between text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                    <iconify-icon icon="heroicons-outline:user"></iconify-icon>
                                    <span>Role</span>
                                </div>
                                <div class="font-medium" id="user-detail-role">User Role</div>
                            </li>
                            <li class="flex justify-between text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                    <iconify-icon icon="heroicons-outline:location-marker"></iconify-icon>
                                    <span>Address</span>
                                </div>
                                <div class="font-medium" id="user-detail-address">User Address
                                </div>
                            </li>
                            <li class="flex justify-between text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                    <iconify-icon icon="heroicons-outline:phone"></iconify-icon>
                                    <span>Phone Number</span>
                                </div>
                                <div class="font-medium" id="user-detail-phone">Phone Number</div>
                            </li>
                        </ul>
                        <div class="flex flex-wrap mt-8">
                            <div class="xl:mr-8 mr-4 mb-3 space-y-1">
                                <div class="font-semibold text-slate-500 dark:text-slate-400">
                                    Existing website
                                </div>
                                <div class="flex items-center space-x-2 text-xs font-normal text-primary-600 dark:text-slate-300 rtl:space-x-reverse">
                                    <iconify-icon icon="heroicons:link"></iconify-icon>
                                    <a href="#">www.example.com</a>
                                </div>
                            </div>
                            <div class="xl:mr-8 mr-4 mb-3 space-y-1">
                                <div class="font-semibold text-slate-500 dark:text-slate-400">
                                    Project brief
                                </div>
                                <div class="flex items-center space-x-2 text-xs font-normal text-primary-600 dark:text-slate-300 rtl:space-x-reverse">
                                    <iconify-icon icon="heroicons:link"></iconify-icon>
                                    <a href="#">www.example.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-100 dark:bg-slate-700 rounded px-4 pt-4 pb-1 flex flex-wrap justify-between mt-6">
                            <div class="mr-3 mb-3 space-y-2">
                                <div class="text-xs font-medium text-slate-600 dark:text-slate-300">
                                    Login Provider
                                </div>
                                <div class="text-xs text-slate-600 dark:text-slate-300" id="user-detail-provider">
                                    User Provider
                                </div>
                            </div>
                            <div class="mr-3 mb-3 space-y-2">
                                <div class="text-xs font-medium text-slate-600 dark:text-slate-300">
                                    Last Login
                                </div>
                                <div class="text-xs text-slate-600 dark:text-slate-300" id="user-detail-last-login">
                                    user Last Login
                                </div>
                            </div>
                            <div class="mr-3 mb-3 space-y-2">
                                <div class="text-xs font-medium text-slate-600 dark:text-slate-300">
                                    Created At
                                </div>
                                <div class="text-xs text-warning-500" id="user-detail-created-at">User Created At</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                    <button data-bs-dismiss="modal" class="btn inline-flex justify-center text-white bg-black-500">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Detail user -->

<!-- Modal Add user -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modal-add-user" tabindex="-1" aria-labelledby="vertically_center" aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                    rounded-md outline-none text-current">
            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                    <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                        Add user
                    </h3>
                    <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                        11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-4">
                    <form action="post" class="space-y-4" id="form-add-user" entype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="largeInput" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="user-name" placeholder="Full Name" required>
                        <label for="largeInput" class="form-label">Email</label>
                        <input type="email" class="form-control" name="user-email" placeholder="Email" required>
                        <label for="largeInput" class="form-label">Password</label>
                        <input type="password" class="form-control" name="user-password" placeholder="Password" required>
                        <label for="largeInput" class="form-label">Role</label>
                        <div class="space-y-2">
                            @foreach($role as $rl)
                            <div class="secondary-radio">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="radio" class="hidden" name="user-role" value="{{ $rl->name }}" required>
                                    <span class="flex-none bg-white dark:bg-slate-500 rounded-full border radio-check inline-flex ltr:mr-2 rtl:ml-2 relative transition-all
                                                            duration-150 h-[16px] w-[16px] dark:border-slate-600 dark:ring-slate-700"></span>
                                    <span class="text-check text-slate-900 font-Inter font-normal text-sm leading-6 capitalize dark:text-slate-300">{{ $rl->name }}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </form>
                </div>
                <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                    <button id="btn-add-user" class="btn inline-flex justify-center text-white bg-black-500">Add</button>
                    <button data-bs-dismiss="modal" class="btn inline-flex justify-center text-white bg-black-500">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Add user -->

<!-- Modal Edit user -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modal-edit-user" tabindex="-1" aria-labelledby="vertically_center" aria-hidden="true">
    <div class="modal-dialog top-1/2 !-translate-y-1/2 relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                    rounded-md outline-none text-current">
            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                    <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                        Edit user
                    </h3>
                    <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                        11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-6 space-y-4">
                    <form action="post" class="space-y-4" id="form-edit-user" entype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="largeInput" class="form-label">user Name</label>
                        <input type="hidden" class="form-control" name="edit-user-id" id="edit-user-id" placeholder="user ID">
                        <input type="text" class="form-control" name="edit-user-name" id="edit-user-name" placeholder="user Name">
                        <label for="largeInput" class="form-label">Role</label>
                        <div class="space-y-2">
                            @foreach($role as $rl)
                            <div class="secondary-radio">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="radio" class="hidden" id="edit-user-role-{{ $rl->name }}" name="edit-user-role" value="{{ $rl->name }}" required>
                                    <span class="flex-none bg-white dark:bg-slate-500 rounded-full border radio-check inline-flex ltr:mr-2 rtl:ml-2 relative transition-all
                                                            duration-150 h-[16px] w-[16px] dark:border-slate-600 dark:ring-slate-700"></span>
                                    <span class="text-check text-slate-900 font-Inter font-normal text-sm leading-6 capitalize dark:text-slate-300">{{ $rl->name }}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </form>
                </div>
                <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                    <button id="btn-edit-user" class="btn inline-flex justify-center text-white bg-black-500">Edit</button>
                    <button data-bs-dismiss="modal" class="btn inline-flex justify-center text-white bg-black-500">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Edit user -->

<script>
    $(document).ready(function() {
        moment.locale('id')
        var user = $("#user").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_"
            },
            ajax: {
                url: "{{ route('get_all_user')}}",
                type: "GET",
                dataSrc: "",
            },
            columns: [{
                    data: "avatar",
                    render: function(data, type, row) {
                        if (data) {
                            return '<span class="table-td w-3 h-3 rounded-full ltr:mr-3 rtl:ml-3 mx-2">' +
                                '<img src="' + data +
                                '" alt="1" class="object-cover w-12 h-12 rounded-full mx-2">' +
                                '</span>';
                        } else {
                            return '<span class="table-td w-3 h-3 rounded-full ltr:mr-3 rtl:ml-3 mx-2">' +
                                '<img src="assets/images/avatar/av-1.svg" alt="1" class="object-cover w-12 h-12 rounded-full mx-2">' +
                                '</span>';
                        }
                    },
                    className: 'text-center'
                },
                {
                    data: "name",
                    render: function(data, type, row) {
                        return '<p class="table-td">' + data + '</p>';
                    }
                },
                {
                    data: "email",
                    render: function(data, type, row) {
                        return '<p class="table-td">' + data + '</p>';
                    }
                },
                {
                    data: "provider",
                    render: function(data, type, row) {
                        if (data) {
                            return '<p class="table-td">' + data + '</p>';
                        } else {
                            return '<p class="table-td"></p>';
                        }
                    }
                },
                {
                    data: "last_login",
                    render: function(data, type, row) {
                        if (data) {
                            return '<div class="table-td"><p>' + moment(data).format(
                                'DD MMMM YYYY') + '</p><p class="text-gray-500">' + moment(
                                data).format(
                                'H:mm') + '</p></div>';
                        } else {
                            return '';
                        }

                    }
                },
                {
                    data: "created_at",
                    render: function(data, type, row) {
                        return '<div class="table-td"><p>' + moment(data).format(
                            'DD MMMM YYYY') + '</p><p class="text-gray-500">' + moment(
                            data).format(
                            'H:mm') + '</p></div>';
                    }
                },
                {
                    render: function(data, type, row) {
                        var btn =
                            '<div>' +
                            '<div class="relative">' +
                            '<div class="dropdown relative">' +
                            '<button class="text-xl text-center block w-full dark:text-white" type="button" id="invoiceDropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">' +
                            '<iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>' +
                            '</button>' +
                            '<ul class="dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700' +
                            'shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">' +
                            '<li>' +
                            '<button data-id="' + row.id +
                            '" class="hover:bg-slate-900 hover:text-white dark:hover:bg-slate-600 dark:bg-slate-600 dark:hover:bg-opacity-50 w-full border-b' +
                            'border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer flex space-x-2 items-center' +
                            'rtl:space-x-reverse" data-bs-toggle="modal" data-bs-target="#modal-detail-user">' +
                            '<span class="text-base">' +
                            '<iconify-icon icon="heroicons:eye"></iconify-icon>' +
                            '</span>' +
                            '<span class="text-sm">View</span>' +
                            '</a>' +
                            '</li>' +
                            '<li>' +
                            '<button data-id="' + row.id +
                            '" class="hover:bg-slate-900 hover:text-white dark:hover:bg-slate-600 dark:bg-slate-600 dark:hover:bg-opacity-50 w-full border-b' +
                            'border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer flex space-x-2 items-center' +
                            'rtl:space-x-reverse" data-bs-toggle="modal" data-bs-target="#modal-edit-user">' +
                            '<span class="text-base">' +
                            '<iconify-icon icon="heroicons:pencil-square"></iconify-icon>' +
                            '</span>' +
                            '<span class="text-sm">Edit</span>' +
                            '</button>' +
                            '</li>' +
                            '<li>' +
                            '<button data-id="' + row.id +
                            '" class="btn-delete-user bg-danger-500 text-danger-500 bg-opacity-30 hover:bg-opacity-100 bg hover:text-white w-full border-b' +
                            'border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer last:rounded-b flex space-x-2 items-center' +
                            'rtl:space-x-reverse">' +
                            '<span class="text-base">' +
                            '<iconify-icon icon="heroicons:trash"></iconify-icon>' +
                            '</span>' +
                            '<span class="text-sm">Delete</span>' +
                            '</button>' +
                            '</li>' +
                            '</ul>' +
                            '</div>' +
                            '</div>' +
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

        $('#modal-detail-user').on('shown.bs.modal', function(e) {
            let id = $(e.relatedTarget).data('id');
            $.ajax({
                type: "GET",
                url: "{{ url('get_user_by_id') }}/" + id,
                dataType: "json",
                success: function(response) {
                    $('#user-detail-name').text(response.name);
                    $('#user-detail-email').text(response.email);
                    (response.avatar == null ? $('#user-detail-avatar').attr('src',
                        'assets/images/avatar/av-1.svg') : $('#user-detail-avatar').attr(
                        'src', response.avatar));
                    (response.address == null ? $('#user-detail-address').text(
                        '-') : $('#user-detail-address').text(
                        response.address));
                    (response.phone == null ? $('#user-detail-phone').text(
                        '-') : $('#user-detail-phone').text(
                        response.phone));
                    $('#user-detail-role').text(response.roles[0].name.charAt(0)
                        .toUpperCase() + response.roles[0].name.slice(1));
                    (response.provider == null ? $('#user-detail-provider').text('-') : $(
                        '#user-detail-provider').text(response.provider.charAt(0)
                        .toUpperCase() + response.provider.slice(1)));
                    (response.last_login == null ? $('#user-detail-last-login').text('-') : $(
                        '#user-detail-last-login').text(moment(response.last_login).format(
                        'DD MMMM YYYY H:mm:ss')));
                    $('#user-detail-created-at').text(moment(response.created_at).format(
                        'DD MMMM YYYY H:mm:ss'));

                }
            });
        });

        $('#modal-detail-user').on('hide.bs.modal', function(e) {
            $('#user-detail-name').text('User Fullname');
            $('#user-detail-avatar').attr('src', 'assets/images/avatar/av-1.svg');
            $('#user-detail-email').text('user Email');
            $('#user-detail-address').text('User Address');
            $('#user-detail-role').text('User Role');
            $('#user-detail-provider').text('User Provider');
            $('#user-detail-last-login').text('User Last Login');
            $('#user-detail-created-at').text('user Created At');
        });

        $('#btn-add-user').click(function() {
            let button = $(this);
            button.prop('disabled', true);
            button.html(
                "<span class='spinner-border spinner-border-sm me-1' user='status' aria-hidden='true'></span> Please wait..."
            );
            let valid = true;
            let msg = '';
            $('#form-add-user :input[required]').each(function(index, element) {
                $(this).removeClass('is-invalid');
                $(this).next('span').removeClass('is-invalid');
                if ($(this).val() == '') {
                    $(this).addClass('is-invalid');
                    $(this).next('span').addClass('is-invalid');
                    msg = 'Please Complete form data!';
                    valid = false;
                }
                $('<style>').text(`
            input[type="radio"]:required:not(:checked) + .flex-none {
                border-color: red;
            }
            /* Validasi teks */
            input[type="radio"]:required:not(:checked) + .flex-none + .text-check {
                color: red;
            }
        `).appendTo('head');
            });


            if (valid) {
                let form_data = new FormData($('#form-add-user')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ route('add_user')}}",
                    data: form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.success) {
                            button.prop('disabled', false);
                            button.text('Add');
                            $('#form-add-user')[0].reset();
                            user.ajax.reload();
                            $('#modal-add-user').modal(
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
                    title: msg,
                });
            }
        });

        $('#modal-add-user').on('hide.bs.modal', function(e) {
            $('#form-add-user')[0].reset();
        });

        $('#modal-edit-user').on('show.bs.modal', function(e) {
            let id = $(e.relatedTarget).data('id');
            $.ajax({
                type: "GET",
                url: "{{ url('get_user_by_id') }}" + '/' + id,
                dataType: "JSON",
                success: function(response) {
                    $('#edit-user-role-' + response.roles[0].name).prop('checked', ($(
                            '#edit-user-role-' + response.roles[0].name).val() ==
                        response.roles[0].name) ? true : false);
                    $('#edit-user-id').val(response.id);
                    $('#edit-user-name').val(response.name);
                }
            });

        });

        $('#modal-edit-user').on('hide.bs.modal', function(e) {
            $('#form-edit-user')[0].reset();
        });

        $('#btn-edit-user').click(function() {
            let button = $(this);
            button.prop('disabled', true);
            button.html(
                "<span class='spinner-border spinner-border-sm me-1' user='status' aria-hidden='true'></span> Please wait..."
            );
            let valid = true;
            let msg = '';
            $('#form-edit-user :input[required]').each(function(index, element) {
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
                let form_data = new FormData($('#form-edit-user')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ route('edit_user')}}",
                    data: form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.success) {
                            button.prop('disabled', false);
                            button.text('Edit');
                            $('#form-edit-user')[0].reset();
                            user.ajax.reload();
                            $('#modal-edit-user').modal(
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
                    title: "An error occurred in edit user data!"
                });
            }
        });

        $('body').on('click', '.btn-delete-user', function() {
            let id = $(this).data('id');
            let button = $(this);
            Swal.fire({
                title: "You Sure?",
                text: "User Data is Deleted Permanent!",
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
                        url: "{{ url('delete_user') }}" + '/' + id,
                        dataType: "JSON",
                        data: {
                            _token: '{{ csrf_token() }}',
                            _method: 'DELETE'
                        },
                        success: function(response) {
                            if (response.success) {
                                user.ajax.reload();
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