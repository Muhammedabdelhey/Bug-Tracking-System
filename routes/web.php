<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Developer;
use App\Http\Controllers\Login;
use App\Http\Controllers\ProjectManager;
use App\Http\Controllers\Tester;
use App\Http\Controllers\Users;
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

Route::get('/', [Login::class, 'login']);
Route::post('loginrequest', [Login::class, 'loginRequest']);
Route::get("logout", [Login::class, "logout"]);

Route::group(["middleware" => "adminMW"], function () {
    Route::get('admin/listusers', [Admin::class, "index"]);
    Route::get('admin/addusers', [Admin::class, "add_User"]);
    Route::post('admin/store', [Admin::class, "store_User"]);
    Route::get("admin/showuser/{id}", [Admin::class, "show_User"]);
    Route::get("admin/delete/{id}", [Admin::class, "delete"]);
    Route::get("admin/edit/{id}", [Admin::class, "edit"]);
    Route::post('admin/update', [Admin::class, "update_User"]);
    Route::get('admin/showadmin', [Admin::class, "show_Admin"]);
    Route::get('admin/listbugs', [Admin::class, 'list_Bugs']);
    Route::get('admin/showbug/{id}', [Admin::class, 'show_Bug']);
    Route::get('admin/bugimg/{img}', [Admin::class, 'bug_Image']);
});

Route::group(["middleware" => 'tester'], function () {
    Route::get('tester/profile', [Tester::class, "show_Profile"]);
    Route::get('tester/listbugs', [Tester::class, 'list_Bugs']);
    Route::get('tester/showbug/{id}', [Tester::class, 'show_Bug']);
    Route::get('tester/addbug', [Tester::class, 'add_Bug']);
    Route::post('tester/storebug', [Tester::class, 'store_Bug']);
    Route::get('tester/bugimg/{img}', [Tester::class, 'bug_Image']);
});
Route::group(["middleware" => 'PM'], function () {
    Route::get('PM/profile', [ProjectManager::class, 'profile']);
    Route::get('PM/listbugs', [ProjectManager::class, 'list_Bugs']);
    Route::get('PM/showbug/{id}', [ProjectManager::class, 'show_Bug']);
    Route::get('PM/bugimg/{img}', [ProjectManager::class, 'bug_Image']);
    Route::get('PM/showperformance', [ProjectManager::class, 'show_Performancre']);
});

Route::group(["middleware" => 'developer'], function () {
    Route::get('developer/profile', [Developer::class, 'profile']);
    Route::get('developer/listbugs', [Developer::class, 'list_Bugs']);
    Route::get('developer/showbug/{id}', [Developer::class, 'show_Bug']);
    Route::get('developer/bugimg/{img}', [Developer::class, 'bug_Image']);
    Route::get('developer/solvebug/{id}', [Developer::class, 'solve_Bug']);
});
