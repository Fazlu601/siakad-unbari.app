<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});



//Admin

Route::get('/admin/login', function () {
    return view('auth.admin.index');
});
Route::post('/admin/authenticate', [AuthenticateController::class, 'authenticate_admin']);
Route::get('/admin', function () {
        return view('admin.index',[
            "session" => "admin"
        ]);
});
Route::delete('/admin/logout', [AuthenticateController::class, 'logout_admin']);



//Mahasiswa
Route::get('/mahasiswa/login', function () {
    return view('auth.mahasiswa.index');
});
Route::post('/mahasiswa/authenticate', [AuthenticateController::class, 'authenticate_mahasiswa']);
Route::get('/mahasiswa', function () {
        return view('dashboard.index', [
            "session" => "mahasiswa"
        ]);
});
Route::delete('/mahasiswa/logout', [AuthenticateController::class, 'logout_mahasiswa']);


Route::get('/mahasiswa/data', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/data/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/data', [MahasiswaController::class, 'store']);
Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/data/delete/{id}', [MahasiswaController::class, 'destroy']);



//Dosen
Route::get('/login/dosen', function () {
    return view('dashboard.index');
});
