<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Auth\LoginController;

Route::get('/login',[LoginController::class, 'create'])->name('login');
Route::post('/login',[LoginController::class, 'store']);
Route::post('/logout',[LoginController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users/create', function () {
    return Inertia::render('Users/Create');
});

Route::post('/users', function () {
    //validate request -> create user -> redirect
    $attributes = Request::validate([
       'name' => 'required',
       'email' => ['required','email'],
       'password' => 'required'
    ]);

    User::create($attributes);

    return redirect('/users');
});

Route::get('/users', function () {
    return Inertia::render('Users/Index',[
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

});
