<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Developer;
use App\Http\Controllers\Login;
use App\Http\Controllers\ProjectManager;
use App\Http\Controllers\Tester;
use Illuminate\Support\Facades\Route;

Route::get('/', [Login::class, 'login']);
Route::post('loginrequest', [Login::class, 'loginRequest']);
Route::get("logout", [Login::class, "logout"]);

Route::group(["middleware" => "adminMW"], function () {
    Route::prefix('admin')->group(function () {
        Route::controller(Admin::class)->group(function () {
            Route::get('/listusers', "index");
            Route::get('/addusers', "add_User");
            Route::post('/store', "store_User");
            Route::get("/showuser/{id}", "show_User");
            Route::get("/delete/{id}", "delete");
            Route::get("/edit/{id}", "edit");
            Route::post('/update', "update_User");
            Route::get('/showadmin', "show_Admin");
            Route::get('/listbugs', 'list_Bugs');
            Route::get('/showbug/{id}', 'show_Bug');
            Route::get('/bugimg/{img}', 'bug_Image');
        });
    });
});

Route::group(["middleware" => 'tester'], function () {
    Route::prefix('tester')->group(function () {
        Route::controller(Tester::class)->group(function () {
            Route::get('/profile', "show_Profile");
            Route::get('/listbugs', 'list_Bugs');
            Route::get('/showbug/{id}', 'show_Bug');
            Route::get('/addbug', 'add_Bug');
            Route::post('/storebug', 'store_Bug');
            Route::get('/bugimg/{img}', 'bug_Image');
        });
    });
});
Route::group(["middleware" => 'PM'], function () {
    Route::group(["prefix" => 'PM'], function () {
        Route::group(["controller" => ProjectManager::class], function () {
            Route::get('/profile', 'profile');
            Route::get('/listbugs', 'list_Bugs');
            Route::get('/showbug/{id}', 'show_Bug');
            Route::get('/bugimg/{img}', 'bug_Image');
            Route::get('/showperformance', 'show_Performancre');
        });
    });
});

Route::group(["middleware" => 'developer'], function () {
    Route::prefix("developer")->group(function () {
        Route::controller(Developer::class)->group(function () {
            Route::get('/profile', 'profile');
            Route::get('/listbugs', 'list_Bugs');
            Route::get('/showbug/{id}', 'show_Bug');
            Route::get('/bugimg/{img}', 'bug_Image');
            Route::get('/solvebug/{id}', 'solve_Bug');
        });
    });
});
