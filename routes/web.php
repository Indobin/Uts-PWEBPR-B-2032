<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Faker\Factory as faker;

Route::get('/', function () {
    return view('home');
})->name('Home');

Route::get('/Home', function () {
    return view('home');
})->name('Home');
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

Route::get('/login', function(){
   return view('login');
})->name('login');

Route::get('/register', function(){
    return view('register');
 })->name('register');