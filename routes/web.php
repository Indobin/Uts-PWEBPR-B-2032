<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as faker;
Route::get('/', function () {
    return view('App');
});
Route::get('/App', function (){
    return view('App');
});
Route::get('/home', function(){
    $contacts = [];
    $faker = faker::create();
    for ($i=1; $i <=10 ; $i++) { 
        $contacts[]= [
            'name' => $faker->name,
            'email' => $faker->unique()->email,
            'phone' => $faker->phoneNumber,
        ];
    }
    return view('Homepage', ['contacts' => $contacts]);
});