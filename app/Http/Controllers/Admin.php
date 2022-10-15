<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\Bugs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    private $user = "admin";
    // show users on system
    public function index()
    {
        $users =  DB::table("users")->get();
        return view("Admin/list_users", compact("users"));
    }
    // add new user(developer , tester , Project manager)
    // first open add user form
    public function add_User()
    {
        return view("Admin/create_user");
    }
    // second get data from Form Request and store it on data base
    public function store_User(Request $request)
    {
        DB::table("users")->insert([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "role" => $request->role,
        ]);
        return redirect("admin/listusers");
    }
    // show spacific user from users table
    public function show_User($id)
    {
        $user = DB::table('users')->find($id);
        return view("Admin/show_user", compact('user'));
    }
    //delete user using their id
    public function delete($id)
    {
        DB::table('users')->delete($id);
        return redirect("admin/listusers");
    }
    //edit user using their id
    //open update form
    public function edit($id)
    {

        $user = DB::table('users')->find($id);
        return view("Admin/update_user", compact("user"));
    }
    // get data and update it using  id
    public function update_User(Request $request)
    {   
        DB::table('users')->where('id', $request->id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
            ]
        );
        return redirect("admin/listusers");
    }
    //show admin data
    public function show_Admin()
    {
        return view("Admin/show_admin");
    }
    // show all bugs
    public function list_Bugs()
    {
        return Bugs::list_Bugs($this->user);
    }
    //show spacific bug
    public function show_Bug($id)
    {
        return Bugs::show_Bug($id, $this->user);
    }
    // show the image of bug
    public function bug_Image($img)
    {
        return Bugs::bug_Image($img, $this->user);
    }
}
