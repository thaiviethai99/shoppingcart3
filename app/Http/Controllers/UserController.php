<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;
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
            Auth::login($user);
            return redirect()->route('product.index');
        }
    }

    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request)
    {
        $v = Validator::make($request->all(), [
            'email'    => 'email|required',
            'password' => 'required',
        ],
            [
                'email.required'    => 'Xin vui long nhap email',
                'password.required' => 'Xin vui long nhap mat khau'
            ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }else{
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
            {
                return redirect()->route('user.profile');
            }
            
        }
    }

    public function getProfile(){
        return view('user.profile');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->back();
    }
}
