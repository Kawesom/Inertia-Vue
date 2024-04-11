<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    return Inertia::render('Users',[
        'users' => User::all()->map(
            fn($user) => [
                'name' => $user->name
            ])
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});


