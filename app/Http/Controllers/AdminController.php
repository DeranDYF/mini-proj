<?php

namespace App\Http\Controllers;


use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index_user()
    {
        $data['menu'] = 'user';
        $data['title'] = 'User';
        $data['role'] = Role::all();
        return view('admin/user', $data);
    }

    protected function getAllUser()
    {
        $data = User::with('roles')->get();
        return response()->json($data);
    }

    protected function getUserById($id)
    {
        $data = User::with('roles')
            ->where('id', $id)
            ->first();
        return response()->json($data);
    }


    protected function addUser(Request $request)
    {

        try {
            $request->validate([
                'user-name' => 'required',
                'user-email' => 'required|email',
                'user-password' => 'required|min:8',
                'user-role' => 'required',
            ], [
                'user-name.required' => 'User name is required.',
                'user-email.required' => 'User email is required.',
                'user-email.email' => 'User email Is not Valid.',
                'user-password.required' => 'User password is required.',
                'user-password.min' => 'Password have minimum :min characters.',
                'user-role.required' => 'Select User Role.'
            ]);
            // dd($request->input());
            $find = User::where('name', $request->input('user-name'))->first();
            if ($find) {
                return response()->json(['success' => false, 'msg' => 'User Already Registered!']);
            } else {
                try {
                    $create_user = User::create([
                        'name'        => $request->input('user-name'),
                        'email'       => $request->input('user-email'),
                        'password'    => Hash::make($request->input('user-password')),
                    ]);
                    $create_user->assignRole($request->input('user-role'));

                    return response()->json(['success' => true, 'msg' => 'Add User Succesful!']);
                } catch (QueryException $exception) {
                    return response()->json(['success' => false, 'msg' => $exception->getMessage()]);
                }
            }
        } catch (ValidationException $exception) {
            $errors = $exception->errors();
            $errorMessages = [];
            foreach ($errors as $field => $messages) {
                foreach ($messages as $message) {
                    $errorMessages[] = $message;
                }
            }
            return response()->json(['success' => false, 'msg' => $errorMessages]);
        }
    }

    protected function editUser(Request $request)
    {

        try {
            $request->validate([
                'edit-user-name' => 'required',
                'edit-user-role' => 'required',
            ], [
                'edit-user-name.required' => 'User name is required.',
                'edit-user-role.required' => 'Select User Role.'
            ]);

            try {
                $edit_user = User::find($request->input('edit-user-id'));
                $edit_user->update([
                    'name' => $request->input('edit-user-name'),
                ]);

                $edit_user->roles()->detach();
                $edit_user->assignRole($request->input('edit-user-role'));

                return response()->json(['success' => true, 'msg' => 'Edit User Successful!']);
            } catch (QueryException $exception) {
                return response()->json(['success' => false, 'msg' => $exception->getMessage()]);
            }
        } catch (ValidationException $exception) {
            $errors = $exception->errors();
            $errorMessages = [];
            foreach ($errors as $field => $messages) {
                foreach ($messages as $message) {
                    $errorMessages[] = $message;
                }
            }
            return response()->json(['success' => false, 'msg' => $errorMessages]);
        }
    }


    public function deleteUser($id)
    {
        try {

            $delete_user = User::find($id);
            $delete_user->roles()->detach();
            $delete_user->delete();

            return response()->json(['success' => true, 'msg' => 'Delete User Successful!']);
        } catch (QueryException $exception) {
            return response()->json(['success' => false, 'msg' => $exception->getMessage()]);
        }
    }

    public function index_role()
    {
        $data['menu'] = 'role';
        $data['title'] = 'Role';
        $data['permissions'] = Permission::all();
        return view('admin/role', $data);
    }

    protected function getAllRole()
    {
        $data = Role::with('permissions')->get();
        return response()->json($data);
    }

    protected function getRoleById($id)
    {
        $data = Role::with('permissions')
            ->where('id', $id)
            ->first();
        return response()->json($data);
    }


    protected function addRole(Request $request)
    {
        $find = Role::where('name', $request->input('role-name'))->first();
        if ($find) {
            return response()->json(['success' => false, 'msg' => 'Role Already Registered!']);
        } else {
            try {
                $create_role = Role::create([
                    'name'        => $request->input('role-name'),
                    'guard_name'  => 'web',
                ]);
                $create_role->givePermissionTo($request->input('role-permission'));

                return response()->json(['success' => true, 'msg' => 'Add Role Succesful!']);
            } catch (QueryException $exception) {
                return response()->json(['success' => false, 'msg' => $exception->getMessage()]);
            }
        }
    }

    protected function editRole(Request $request)
    {
        try {
            $role = Role::find($request->input('edit-role-id'));
            $role->update([
                'name' => $request->input('edit-role-name'),
            ]);

            $role->revokePermissionTo($role->permissions->pluck('name')->toArray());
            $role->givePermissionTo($request->input('edit-role-permission'));

            return response()->json(['success' => true, 'msg' => 'Edit Role Successful!']);
        } catch (QueryException $exception) {
            return response()->json(['success' => false, 'msg' => $exception->getMessage()]);
        }
    }


    public function deleteRole($id)
    {
        try {

            $role = Role::find($id);
            $role->revokePermissionTo($role->permissions->pluck('name')->toArray());
            $role->delete();

            return response()->json(['success' => true, 'msg' => 'Delete Role Successful!']);
        } catch (QueryException $exception) {
            return response()->json(['success' => false, 'msg' => $exception->getMessage()]);
        }
    }

    public function index_permissions()
    {
        $data['menu'] = 'permissions';
        $data['title'] = 'Permissions';
        return view('admin/permissions', $data);
    }

    protected function getAllPermissions()
    {
        $data = Permission::all();
        return response()->json($data);
    }

    protected function getPermissionsById($id)
    {
        $data = Permission::where('id', $id)
            ->first();
        return response()->json($data);
    }


    protected function addPermissions(Request $request)
    {
        $find = Permission::where('name', $request->input('permissions-name'))->first();
        if ($find) {
            return response()->json(['success' => false, 'msg' => 'Permission Already Registered!']);
        } else {
            try {
                Permission::create([
                    'name'        => $request->input('permissions-name'),
                    'guard_name'  => 'web',
                ]);

                return response()->json(['success' => true, 'msg' => 'Add Permission Succesful!']);
            } catch (QueryException $exception) {
                return response()->json(['success' => false, 'msg' => $exception->getMessage()]);
            }
        }
    }

    protected function editPermissions(Request $request)
    {
        try {
            $permission = Permission::find($request->input('edit-permissions-id'));
            $permission->update([
                'name' => $request->input('edit-permissions-name'),
            ]);

            return response()->json(['success' => true, 'msg' => 'Edit Permission Successful!']);
        } catch (QueryException $exception) {
            return response()->json(['success' => false, 'msg' => $exception->getMessage()]);
        }
    }


    public function deletePermissions($id)
    {
        try {
            Permission::find($id)->delete();
            return response()->json(['success' => true, 'msg' => 'Delete Permission Successful!']);
        } catch (QueryException $exception) {
            return response()->json(['success' => false, 'msg' => $exception->getMessage()]);
        }
    }
}
