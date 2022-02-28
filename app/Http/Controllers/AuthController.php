<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function validationEmail(Request $request)
    {
        //Lay du lieu tu POST
        $email = $request->email;
        //tao flag check
        $isEmail = true;

        //Check email co dung dinh dang hay khong
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isEmail = false;
        }

        return view('index', compact('isEmail'));

    }
}
