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
                                    Home
                                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                                </li>
                                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                    Setting</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-wrap ">

                    </div>
                </div>
                <div class="card">
                    <div class="card-body flex flex-col p-6">
                        <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                            <div class="flex-1">
                                <div class="card-title text-slate-900 dark:text-white">Account Setting</div>
                            </div>
                        </header>
                        <div class="card-text h-full">
                            <div>
                                <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-profile" class="nav-link w-full flex items-center font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent active dark:text-slate-300" id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile" role="tab" aria-controls="tabs-profile" aria-selected="true">
                                            <iconify-icon class="mr-1" icon="heroicons-outline:user"></iconify-icon>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-password" class="nav-link w-full flex items-center font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300" id="tabs-password-tab" data-bs-toggle="pill" data-bs-target="#tabs-password" role="tab" aria-controls="tabs-password" aria-selected="false">
                                            <iconify-icon class="mr-1" icon="heroicons-outline:lock-closed">
                                            </iconify-icon>
                                            Password
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-settings-withIcon" class="nav-link w-full flex items-center font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300" id="tabs-settings-withIcon-tab" data-bs-toggle="pill" data-bs-target="#tabs-settings-withIcon" role="tab" aria-controls="tabs-settings-withIcon" aria-selected="false">
                                            <iconify-icon class="mr-1" icon="clarity:settings-line"></iconify-icon>
                                            Settings
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tabs-tabContent">
                                    <div class="tab-pane fade show active" id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
                                        <form action="post" class="space-y-4" id="form-setting-user-avatar" entype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] md:ml-0 md:mr-0 ml-auto mr-auto md:mb-0 mb-4 rounded-full ring-4
                                ring-slate-100 relative">
                                                <img src="assets/images/users/user-1.jpg" id="setting-user-avatar" alt="" class="w-full h-full object-cover rounded-full">
                                                <a href="" class="absolute right-2 h-8 w-8 bg-slate-50 text-slate-600 rounded-full shadow-sm flex flex-col items-center
                                    justify-center md:top-[140px] top-[100px]" data-bs-toggle="modal" data-bs-target="#modal-setting-user-avatar">
                                                    <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                </a>
                                            </div>
                                        </form>
                                        <form action="post" class="space-y-4" id="form-setting-user" entype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <label for="largeInput" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="setting-user-name" name="setting-user-name" placeholder="Full Name" required>
                                            <label for="largeInput" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="setting-user-address" name="setting-user-address" placeholder="Address">
                                            <label for="largeInput" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="setting-user-phone" name="setting-user-phone" placeholder="Phone Number">
                                        </form>
                                        <button id="btn-setting-user" class="btn inline-flex justify-center text-white bg-black-500 mt-4">Update</button>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-password" role="tabpanel" aria-labelledby="tabs-password-tab">
                                        <form action="post" class="space-y-4" id="form-password-user" entype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <label for="largeInput" class="form-label">New Password</label>
                                            <input type="password" class="form-control" name="setting-password-user" placeholder="New Password" required>
                                            <label for="largeInput" class="form-label">Confirm New Password</label>
                                            <input type="text" class="form-control" name="setting-confirm-password-user" placeholder="Confirm New Password">
                                        </form>
                                        <button id="btn-password-user" class="btn inline-flex justify-center text-white bg-black-500 mt-4">Update</button>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-settings-withIcon" role="tabpanel" aria-labelledby="tabs-settings-withIcon-tab">
                                        <p class="text-sm text-gray-500 dark:text-gray-200">
                                            This is some placeholder content the
                                            <strong>Settings</strong>
                                            tab's associated content. Clicking another tab will toggle the visibility of
                                            this one for the next. The tab JavaScript swaps classes to control the
                                            content visibility and styling. consectetur adipisicing elit. Ab ipsa!
                                        </p>
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

<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modal-setting-user-avatar" tabindex="-1" aria-labelledby="vertically_center" aria-hidden="true">
    <div class="modal-dialog top-1/2 !-translate-y-1/2 relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                    rounded-md outline-none text-current">
            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                    <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                        Update User Picture
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
                    <div class="input-area">
                        <div class="filePreview">
                            <label>
                                <form action="post" class="space-y-4" id="form-setting-user-avatar" entype="multipart/form-data">
                                    <input type="file" class="w-full hidden" name="foto" id="setting-user-avatar" required>
                                    <span class="w-full h-[40px] file-control flex items-center custom-class">
                                        <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                            <span id="placeholder" class="text-slate-400">Choose a file or drop it
                                                here...</span>
                                        </span>
                                        <span class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                    </span>
                                </form>
                            </label>
                            <div id="file-preview"></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                    <button id="btn-setting-user-avatar" class="btn inline-flex justify-center text-white bg-black-500">Update</button>
                    <button data-bs-dismiss="modal" class="btn inline-flex justify-center text-white bg-black-500">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        function loadData() {
            $.ajax({
                type: "GET",
                url: "{{ url('get_user_setting') }}",
                dataType: "JSON",
                success: function(response) {
                    if (response.avatar == null) {
                        $('#setting-user-avatar').attr('src', 'assets/images/avatar/av-1.svg');
                    } else {
                        $('#setting-user-avatar').attr('src', response.avatar);
                    }
                    $('#setting-user-name').val(response.name);
                    $('#setting-user-address').val(response.address);
                    $('#setting-user-phone').val(response.phone);
                }
            });
        }
        loadData();

        $('#btn-setting-user').click(function() {
            let button = $(this);
            button.prop('disabled', true);
            button.html(
                "<span class='spinner-border spinner-border-sm me-1' user='status' aria-hidden='true'></span> Please wait..."
            );
            let valid = true;
            let msg = '';
            $('#form-setting-user :input[required]').each(function(index, element) {
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
                let form_data = new FormData($('#form-setting-user')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ route('update_setting_user')}}",
                    data: form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.success) {
                            button.prop('disabled', false);
                            button.text('Update');
                            $('#form-setting-user')[0].reset();
                            loadData();
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
                            button.text('Update');
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
                button.text('Update');
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

        $('#modal-setting-user-avatar').on('hide.bs.modal', function(e) {
            $('#form-setting-user-avatar')[0].reset();
        });

        $('#btn-setting-user-avatar').click(function() {
            let button = $(this);
            button.prop('disabled', true);
            button.html(
                "<span class='spinner-border spinner-border-sm me-1' user='status' aria-hidden='true'></span> Please wait..."
            );
            let valid = true;
            let msg = '';
            $('#form-setting-user-avatar:input[required]').each(function(index, element) {
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
                let form_data = new FormData($('#form-setting-user-avatar')[0]);
                $.ajax({
                    type: "POST",
                    url: "{{ route('update_setting_user_avatar')}}",
                    data: form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.success) {
                            button.prop('disabled', false);
                            button.text('Update');
                            $('#form-setting-user-avatar')[0].reset();
                            $('#modal-setting-user-avatar').modal(
                                'hide');
                            loadData();
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
                            button.text('Update');
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
                button.text('Update');
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

    });
</script>
@endsection