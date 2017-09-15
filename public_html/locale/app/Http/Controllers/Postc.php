<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB, DateTime, Session, Redirect,Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Postc extends Controller
{
public function addpost(){
$title=Input::get('title');
$text=Input::get('text');
$shortd=Input::get('shortd');



$post = new Post;
$post->title=$title;
$post->text=$text;
$post->shortd=$shortd;
$post->save();


return Redirect('Dash'); 
}

public function delpost(){
$id=Input::get('del_id');
//echo $id;
Post::find($id)->delete();

return Redirect('Dash');
} 

public function udtpost(){

$title=Input::get('title');
$text=Input::get('text');
$shortd=Input::get('shortd');
$id=Input::get('id');
echo $id;
$post = Post::find($id);
//$post->find($id);
print_r($post);
$post->title=$title;
$post->text=$text;
$post->shortd=$shortd;
$post->save();


return Redirect('Dash'); 
}

}