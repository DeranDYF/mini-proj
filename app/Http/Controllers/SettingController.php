<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
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
    public function index()
    {
        $data['menu'] = 'home';
        $data['title'] = 'Setting';
        return view('setting', $data);
    }

    protected function getUserSetting()
    {
        $data = Auth::user();
        return response()->json($data);
    }

    protected function updateSettingUserAvatar(Request $request)
    {
        // dd($request->input());
        try {
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'foto.required' => 'Profile Picture is required.',
                'foto.image' => 'Profile Picture must be an image.',
                'foto.mimes' => 'Profile Picture must have a valid image extension.',
                'foto.max' => 'Profile Picture size must be less than 2MB.'
            ]);

            try {
                $data = Auth::user();
                $path = 'public/assets/images/profile';

                if ($data->avatar == !null) {
                    Storage::delete($path . '/' . $data->avatar);
                    $data->update([
                        'avatar' => '',
                    ]);
                }
                $extension = $request->file('setting-user-avatar')->getClientOriginalExtension();
                $fileName = uniqid() . '_' . $data->name . '_avatar.' . $extension;
                $request->file('setting-user-avatar')->storeAs($path, $fileName);
                $data->update([
                    'avatar' => 'assets/images/profile/' . $fileName,
                ]);
                $data->refresh();
                return response()->json(['success' => true, 'msg' => 'Update Successful!']);
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

    protected function updateSettingUser(Request $request)
    {
        // dd($request->input());
        try {
            $data = Auth::user();
            $data->update([
                'name' => $request->input('setting-user-name'),
                'address' => $request->input('setting-user-address'),
                'phone' => $request->input('setting-user-phone'),

            ]);
            $data->refresh();
            return response()->json(['success' => true, 'msg' => 'Update Successful!']);
        } catch (QueryException $exception) {
            return response()->json(['success' => false, 'msg' => $exception->getMessage()]);
        }
    }
}
