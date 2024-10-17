<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as faker;
Route::get('/', function () {
    $contacts = [];
    $faker = faker::create();
    for ($i=1; $i <=20 ; $i++) { 
        $contacts[]= [
            'name' => $faker->name,
            'email' => $faker->unique()->email,
            'phone' => $faker->phoneNumber,
        ];
    }
    
    return view('contacts', ['contacts' => $contacts]);
})->name('contacts');

Route::get('/login', function(){
   return view('login');
})->name('login');
Route::get('/register', function(){
    return view('register');
 })->name('register');