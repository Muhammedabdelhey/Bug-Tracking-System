<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\Bugs;
use App\Models\Postimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Tester extends Controller
{
    private $user = "tester";

    public function show_Profile()
    {
        return view("profile");
    }
    //show alll bug
    public function list_Bugs()
    {
        return Bugs::list_Bugs($this->user);
    }
    //show spacific bug
    public function show_Bug($id)
    {
        return Bugs::show_Bug($id, $this->user);
    }
    //show the image of bug
    public function bug_Image($img)
    {
        return Bugs::bug_Image($img, $this->user);
    }
    // open add bug from 
    public function add_Bug()
    {
        $projects = DB::table("projects")->get();
        $developers = DB::table("users")->where("role", '=', 'Developer')->get();
        $data = [$projects, $developers];
        return view("tester/addbug", compact('data'));
    }
    // store bug data on database
    public function store_Bug(Request $request)
    {
        return Bugs::store_Bug($request);
    }
}
