<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB,Session, Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Index extends Controller
{
	public function index()
	{
		$posts=Post::all()->sortByDesc('date')->take(4);
		return view('index')->with('data',$posts);
	}
		public function showpost($num)
	{
		$post=Post::find($num);
		return view('showpost')->with('post',$post);
	}

public function allpost()
	{
		$posts=Post::all()->sortByDesc('date')->take(20);
		return view('allpost')->with('data',$posts);
	}
	 

}