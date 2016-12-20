<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\User;
class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $v = Validator::make($request->all(), [
            'email'    => 'email|required|unique:users,email',
            'password' => 'required',
        ],
            [
                'email.required'    => 'Xin vui long nhap email',
                'password.required' => 'Xin vui long nhap mat khau'
            ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }else{
        	$user = new User([
                'email'=>$request->email,
                'password'=>bcrypt($request->password)
            ]);
            $user->save();
            return redirect()->route('product.index');
        }
    }
}
