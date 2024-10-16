<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
}) ->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');;

Route::get('/auth/signin', function () {
    return view('auth.signin');
});



//Route Param
Route ::get('/user/{name}/age{age}', function ($name,$age) {
    return 'User'.$name. 'age is: '.$age;
} );

Route ::get('/user/{name}}', function ($name) {
    return 'User'.$name;
} );

//display name dekat home.blade using parameter
Route ::get('/home/{name}', function ($name) {
    return view('home', ['name'=> $name]);
});

//Named route
Route:: get('/user/profile', function () {
    return 'Pengguna Profiles';
}) ->name('user.profile');

//??
Route ::get('/user/{name})', function ($name) {
    return 'User'.$name;
} );

//alias of a route user.profile = /pengguna/profile]

//redirect route to named route
Route:: get('\redirect-to-profile', function () {
    return 'Pengguna Profiles';
}) ->name('user.profile');

//route group - without type satu2
Route::prefix('food')->group(function () {

    Route::get('/details', function () {
        return 'Food details are following';
    });

    Route::get('/home', function () {
        return 'Food home page';
    });
    
});

//combination of all above(Route,Named Route, Route Param, Route Group, Route Prefix)
Route::name('job')->prefix('job')-> group (function () {

    Route::get('home', function () {
        return 'Job Home Page';
    }) ->name('.home');

    Route::get('/details', function () {
        return 'Job details are following';
    })->name('.description');

});

//baca folder yg berasingan 
require __DIR__.'/feed/web.php';
    