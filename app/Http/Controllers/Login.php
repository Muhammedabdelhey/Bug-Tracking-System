<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function login()
    {
        $color = [
            $error =  "",
            $errorColor = "",
        ];
        return  view('index', compact('color'));
    }
    public function loginRequest(Request $request)
    {
        $data = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::guard('admin')->attempt($data)) {
            return redirect("admin/listusers");
        } else if (Auth::guard('web')->attempt($data)) {
            if (Auth::guard('web')->user()->role == "Project Manager") {
                return redirect('PM/profile');
            } else if (Auth::guard('web')->user()->role == "Developer") {
                return redirect("developer/profile");
            } else if (Auth::guard('web')->user()->role == "Tester") {
                return redirect("tester/profile");
            }
        } else {
            $color = [
                $error =  "Wrong Data",
                $errorColor = "red",
            ];
            return  view('index', compact('color'));
        }
    }

    public function logout()
    {
        Auth::guard("admin")->logout();
        Auth::guard("web")->logout();
        return redirect("/");
    }
}
