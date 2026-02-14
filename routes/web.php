<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ["name" => "mario", "skill" => 75, "id" => 1],
        ["name" => "luigi", "skill" => 45, "id" => 2]
    ];
    return view('ninjas.index', ["greetings" => "Hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/{id}', function($id){
    return view('ninjas.show', ["id" => $id]);
});
