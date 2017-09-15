<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB,Session, Redirect, Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Login extends Controller
{

	public function auth()
	{

		$user = Input::get('user');
		$pass = md5(Input::get('pass'));
		$auth= DB::connection('mysql')->table('Admin')->where('user',$user)->where('pass',$pass)->count();
		$error="Something is wrong!";
		if ($auth==1) {

		Session::put('auth','true');
		return Redirect('Dash');
		
		} else{
			
			return view('login')->with('error',$error);
		}	


		
	}

	public function login(){
		$error=NULL;
		if (Session::has('auth')) {
			if (!Session::get('auth')) {
				return view('login')->with('error',$error);
			}else{
				return Redirect('Dash');
			}
		}else
		{
			return view('login')->with('error',$error);
		}


	}
	public function logout(){
		Session::flush();
		return Redirect('login');
	}

}