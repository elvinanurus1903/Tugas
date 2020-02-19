<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
class UserController extends Controller
{
    function store(Request $request){

    	if($request->password != $request->cpassword){

    		\Session::flash('error', 'Password salah');

    		return redirect('register');
    	}

    	$data = [
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' =>\Hash::make($request->password)
    	];

    	User::create($data);
        \Session::flash('msg', 'Berhasil Daftar');
    	return redirect('login');

    }

    function login(Request $request){
    	$user = \App\User::where('email', $request->email)->first();

    		if($user == null){

    			\Session::flash('error', 'Email Tidak Ditemukan');

    			return redirect('login');

    		}

    		if(\Hash::check($request->password, $user->password)){

    			\Session::put('user', $user);
    			return redirect('upload');

    		} else {
    			\Session::flash('error', 'Email atau Password salah');

    			return redirect('login');

    		}
    }

    function logout(){
        \Session::flush();
        return redirect('login');
    }
}
