@extends('managepost-head')
@section('content')

<h1>Manage Post</h1>
<div class="col-md-12">
<form action="{{url('/')}}/updatepost" method="post" class="">
<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
<div class="col-md-6">
<span>Title : </span>
<br>
<input class="form-control" type="text" name="title" placeholder="Enter title here.. " value="{{$post['title']}}">	
<br>
<span>Short Description : </span>
<textarea name="shortd" class="form-control" maxlength="100" placeholder="Enter short description max. 100 character..">
{!!$post['shortd']!!}
</textarea>
<br>
</div>
<div class="col-md-12">
<textarea name="text" id="editor1">
	{!!$post['text']!!}
</textarea>
<input type="hidden" id="id" name="id" value="{{$post['id']}}">
<br>
<input type="submit" id="submit" value="Update" class="btn btn-primary" style="float:right; margin-bottom:10px;margin-right:10px">
<a href="{{url('/')}}/showpost/{{$post['id']}}"><div class="btn btn-primary" style="float:right; margin-bottom:10px; margin-right:10px">Preview</div></a>
<a href="{{url('/')}}/Dash"><div class="btn btn-default btn-md" style="float:right; margin-bottom:10px; margin-right:10px">Back</div></a>

</div>
</form>
<br>
</div>

@stop