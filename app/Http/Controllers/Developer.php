<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\Bugs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Developer extends Controller
{
    private $user = "developer";
    public function profile()
    {
        return view("profile");
    }
    // view assigned bugs
    public function list_Bugs()
    {
        return Bugs::developer_Bugs(Auth::user()->name);
    }
    //show spacific bug
    public function show_Bug($id)
    {
        return Bugs::show_Bug($id, $this->user);
    }
    //show image of bug
    public function bug_Image($img)
    {
        return Bugs::bug_Image($img, $this->user);
    }
    // solve the bug(change status to close)
    public static function solve_Bug($bugid)
    {
        return Bugs::solve_Bug($bugid);
    }
}
