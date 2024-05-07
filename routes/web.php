<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });

//Login With Provider
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);


Auth::routes();
//Main Menu
Route::get('/', [HomeController::class, 'index'])->name('home');
//Dashboard / Home
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('setting', [SettingController::class, 'index'])->name('setting');
Route::get('get_user_setting', [SettingController::class, 'getUserSetting'])->name('get_user_setting');
Route::any('update_setting_user_avatar', [SettingController::class, 'updateSettingUserAvatar'])->name('update_setting_user_avatar');
Route::any('update_setting_user', [SettingController::class, 'updateSettingUser'])->name('update_setting_user');


//Admin Menu
// User
Route::get('user', [AdminController::class, 'index_user'])->name('user');
Route::get('get_all_user', [AdminController::class, 'getAllUser'])->name('get_all_user');
Route::get('get_user_by_id/{id}', [AdminController::class, 'getUserById'])->name('get_user_by_id');
Route::any('add_user', [AdminController::class, 'addUser'])->name('add_user');
Route::any('edit_user', [AdminController::class, 'editUser'])->name('edit_user');
Route::any('delete_user/{id}', [AdminController::class, 'deleteUser'])->name('delete_user');


//Role
Route::get('role', [AdminController::class, 'index_role'])->name('role');
Route::get('get_all_role', [AdminController::class, 'getAllRole'])->name('get_all_role');
Route::get('get_role_by_id/{id}', [AdminController::class, 'getRoleById'])->name('get_role_by_id');
Route::any('add_role', [AdminController::class, 'addRole'])->name('add_role');
Route::any('edit_role', [AdminController::class, 'editRole'])->name('edit_role');
Route::any('delete_role/{id}', [AdminController::class, 'deleteRole'])->name('delete_role');


//Permissions
Route::get('permissions', [AdminController::class, 'index_permissions'])->name('permissions');
Route::get('get_all_permissions', [AdminController::class, 'getAllPermissions'])->name('get_all_permissions');
Route::get('get_permissions_by_id/{id}', [AdminController::class, 'getPermissionsById'])->name('get_permissions_by_id');
Route::any('add_permissions', [AdminController::class, 'addPermissions'])->name('add_permissions');
Route::any('edit_permissions', [AdminController::class, 'editPermissions'])->name('edit_permissions');
Route::any('delete_permissions/{id}', [AdminController::class, 'deletePermissions'])->name('delete_permissions');
