<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('client/pages/home');
});
Route::get('/latest', function () {
    return view('client/pages/latest');
});
Route::get('/popular', function () {
    return view('client/pages/popular');
});
Route::get('/topic', function () {
    return view('client/pages/topic');
});
Route::get('/category', function () {
    return view('client/pages/category');
});
Route::get('/notify', function () {
    return view('client/pages/notify');
});
Route::get('/post', function () {
    return view('client/pages/post');
});
Route::get('/user', function () {
    return view('client/pages/user');
});


Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/signup', function () {
    return view('auth/sign-up');
});


Route::prefix('dashboard')->group(function () {
    Route::prefix('topic')->group(function () {
        Route::get('list', function () {
            return view('dashboard/admin/topic/list');
        });
        Route::get('add', function () {
            return view('dashboard/admin/topic/add');
        });
    });

    Route::prefix('category')->group(function () {
        Route::get('list', function () {
            return view('dashboard/admin/category/list');
        });
        Route::get('add', function () {
            return view('dashboard/admin/category/add');
        });
    });

    Route::prefix('post')->group(function () {
        Route::get('list', function () {
            return view('dashboard/mod/post/list');
        });
        Route::get('detail', function () {
            return view('dashboard/mod/post/detail');
        });
    });

    Route::prefix('post2')->group(function () {
        Route::get('list', function () {
            return view('dashboard/member/post/list');
        });
        Route::get('add', function () {
            return view('dashboard/member/post/add');
        });
    });

    Route::prefix('user')->group(function () {
        Route::get('list', function () {
            return view('dashboard/admin/user/list');
        });
    });
});

