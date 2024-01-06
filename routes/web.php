<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguagesController@switchLang']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('users', [UserController::class, 'users'])->name('users');
Route::get('create/user', [UserController::class, 'create'])->name('user.create');
Route::post('store/user', [UserController::class, 'store'])->name('user.store');
Route::get('update/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::post('edit/user/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::get('delete/user/{id}', [UserController::class, 'delete'])->name('user.delete');

Route::get('roles', [RoleController::class, 'roles'])->name('roles');
Route::get('create/role', [RoleController::class, 'create'])->name('role.create');
Route::post('store/role', [RoleController::class, 'store'])->name('role.store');

Route::get('permissions', [PermissionController::class, 'permissions'])->name('permissions');
Route::get('create/permission', [PermissionController::class, 'create'])->name('permission.create');
Route::post('store/permission', [PermissionController::class, 'store'])->name('permission.store');

require __DIR__.'/auth.php';
