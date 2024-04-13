<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    return Inertia::render('Users',[
        'users' => User::query()
        ->when(Request::input('search'), function($query, $search) {
            $query->where('name','like', '%' .$search.'%');
        })
        ->paginate(10)
        ->withQueryString()
        ->through(// through is like the map function but applied to the current list 
            fn($user) =>
            [
            'id' => $user->id,
            'name' => $user->name
            ]
            ),
            'filters' => Request::only(['search'])
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});


