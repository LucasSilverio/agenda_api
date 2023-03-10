<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ping', function(){
    return [
        'pong' => true,
        'teste' => [
            'modelo' => 2,
            'cor' => 'Azul'
        ]
    ];
});
