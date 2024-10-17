<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as faker;

Route::get('/', function () {
    return view('home');
})->name('Home');

Route::get('/Home', function () {
    return view('home');
})->name('Home');

Route::get('/Contact/Mahasiswa', function(){
    $contacts = [];
    $faker = faker::create();
    for ($i=1; $i <=20 ; $i++) { 
        $nim = '23241010' . $faker->numberBetween(1000, 9999);
        $contacts[]= [
            'name' => $faker->name,
            'email' => $faker->unique()->email,
            'phone' => $faker->phoneNumber,
            'nim' => $nim
        ];
    }
    return view('contacts.mahasiswa', ['contacts' => $contacts]);
 })->name('Contact/Mahasiswa');

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