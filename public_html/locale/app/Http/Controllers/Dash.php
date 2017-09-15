<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 
use DB,Session, Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Dash extends Controller
{
public function dash()
{
	$data=Post::all()->sortByDesc('date');
	return View('dash')->with('data',$data);
}

public function newpost()
{
	# code...
	return View('newpost');

}
public function managepost($num){

$id=$num;
$data=Post::find($id);

return view('managepost')->with('post',$data);

}




}