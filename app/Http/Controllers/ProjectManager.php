<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\Bugs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectManager extends Controller
{
    private $user = "PM";
    public function profile()
    {
        return view("profile");
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
    //show the image bug
    public function bug_Image($img)
    {
        return Bugs::bug_Image($img, $this->user);
    }
    // show performance of developers and tester(num of bugs)
    public function show_Performancre()
    {
        $users = DB::table("users")->where("role", "!=", "Project Manager")->get();
        return view("pm/performance", compact('users'));
    }
}
