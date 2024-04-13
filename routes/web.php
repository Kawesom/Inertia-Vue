<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    return Inertia::render('Users',[
        'users' => User::paginate(10)->through(// through is like the map function but applied to the current list 
            function($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name
                ];
            }
        )
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});


