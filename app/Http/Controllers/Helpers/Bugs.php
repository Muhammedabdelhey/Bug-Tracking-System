<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use App\Models\Postimage;
use Facade\FlareClient\View;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Bugs extends Controller
{
    public static function  list_Bugs($user)
    {
        // check database file i created view(bug_data) using migrations
        $bugs = DB::table("bugs_data")->get();
        $data = [$bugs, $user];
        return view("bugs/listbugs", compact('data'));
    }
    public static function show_Bug($id, $user)
    {
        $bug = DB::table("bugs_data")->find($id);
        $data = [$bug, $user];
        return view("bugs/show_bug", compact('data'));
    }
    public static function bug_Image($img, $user)
    {
        $data = [$img, $user];
        return view("bugs/bugimg", compact("data"));
    }

    public static function developer_Bugs($dev_name)
    {
        $bugs = DB::table("bugs_data")->where("developer_Name", "=", $dev_name)->get();
        $data = [$bugs, "developer"];
        return view("bugs/listbugs", compact('data'));
    }
    public static function store_Bug(Request $request)
    {
        $data = [
            "name" => $request->name,
            "img" => Postimage::storeImage($request),
            "type" => $request->type,
            "priority" => $request->priority,
            "project_id" => $request->project_id,
            "developer_id" => $request->developer_id,
            "tester_id" => Auth::user()->id,
            "status" => "Open"
        ];
        DB::table('bugs')->insert($data);
        $performance = Auth::user()->performance;
        $performance++;
        DB::table("users")->where("id", "=", Auth::user()->id)->update([
            "performance" => $performance
        ]);
        return  redirect("tester/listbugs");
    }

    public static function solve_Bug($bugid)
    {
        /*DB::table("bugs")->where("id", "=", $bugid)->update([
            "status" => "Closed",
            "updated_at"=>"DEFAULT"
        ]);*/
        DB::statement("update `bugs` set `status` = 'Closed', `updated_at` = DEFAULT where `id` = ".$bugid);
        $performance = Auth::user()->performance;
        $performance++;
        DB::table("users")->where("id", "=", Auth::user()->id)->update([
            "performance" => $performance
        ]);
        return redirect("developer/listbugs");
    }
}
