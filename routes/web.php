<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Faker\Factory as faker;

Route::get('/', function () {
    return view('home');
})->name('Home')->middleware('auth');

Route::get('/Home', function () {
    return view('home');
})->name('Home')->middleware('auth');
Route::resource('/satya', UserController::class);
Route::get('/Contact/Mahasiswa', [UserController::class, "index"])->name('Contact/Mahasiswa');
Route::get('/create-mahasiswa', [UserController::class, "create"])->name('Form/Mahasiswa');
Route::post('/create-mahasiswa', [UserController::class, "store"])->name('Create/Mahasiswa');
Route::get('/edit-mahasiswa/{user}', [UserController::class, "edit"])->name('Edit/Mahasiswa');
Route::put('/update-mahasiswa/{user}', [UserController::class, "update"])->name('Update/Mahasiswa');
Route::get('/Contact/Dosen', function(){
    $contacts = [];
    $faker = faker::create();
    for ($i=1; $i <=20 ; $i++) { 
        $nidn = '02' . $faker->numberBetween(10000000, 99999999);
        $contacts[]= [
            'name' => $faker->name,
            'email' => $faker->unique()->email,
            'phone' => $faker->phoneNumber,
            'nidn' => $nidn,
        ];
    }
    return view('contacts.dosen', ['contacts' => $contacts]);
 })->name('Contact/Dosen');

 Route::get('/register', [AuthController::class, 'register'])->name('register');
 Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class,'store']);
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');