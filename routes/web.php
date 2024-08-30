<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


Route::get('/', function () {
    $users = User::orderBy('name')->get();

    return view('welcome', compact('users'));
});

Route::get('/all-caps-each', function () {
    $users = User::orderBy('name')->get();

    $users->each(function ($user) {
        $user->name = Str::upper($user->name);
        $user->email = Str::upper($user->email);
    });

    return view('welcome', compact('users'));
});

Route::get('/all-caps-map', function () {
    $users = User::orderBy('name')->get();

    $users = $users->map(function ($user) {
        $user->name = Str::upper($user->name);
        $user->email = Str::upper($user->email);

        return $user;
    });

    return view('welcome', compact('users'));
});

Route::get('/just-one', function () {
    $users = User::orderBy('name')->limit(1)->get(['name', 'email']);

    $users->each(function ($user) {
        $user->name = Str::upper($user->name);
        $user->email = Str::upper($user->email);
    });

    return view('welcome', compact('users'));
});

Route::get('/phping', function () {
    return 'pong';
});

Route::get('/phpinfo', function () {
    phpinfo();
});
