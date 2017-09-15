@extends('dash-head')
@section('content')
<h1>Add New Post</h1>
<div class="col-md-12">
<form action="addpost" method="post" class="">
<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
<div class="col-md-6">
<span>Title : </span>
<br>
<input class="form-control" type="text" name="title" placeholder="Enter title here.. ">	
<br>
<span>Short Description : </span>
<textarea name="shortd" class="form-control" maxlength="100" placeholder="Enter short description max. 100 character.."></textarea>
<br>
</div>
<div class="col-md-12">
<textarea name="text" id="editor1"></textarea>

<br>
<input type="submit" id="submit" class="btn btn-primary" style="float:right; margin-bottom:10px;">
</div>
</form>
<br>
</div>

@stop