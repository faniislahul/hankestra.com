@extends('dash-head')
@section('content')

@foreach ($data as $post)
<div class="col-md-12" >
	<h1>{{$post['title']}}</h1>
	<p><i>{{$post['date']}}</i></p>
	{!!$post['shortd']!!}
	<br>
	<a href="managepost/{{$post['id']}}"><div class="btn btn-md btn-primary" style="margin-top:10px;">Read more</div></a> 
	<button type="button" class="btn btn-md btn-danger" data-toggle="modal" data-target="#delete" id="{{$post['id']}}" style="margin-top:10px;">
	Delete
	</button>
	
	<hr>
</div>


@endforeach

<div class="modal fade bs-example-modal-sm" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<p>Are you sure? 
				<br>This post will permanently deleted.</p>
				<br>
				<form action="deletepost" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="del_id" id="del_id" value="">
				<input type="submit" value="Delete" class="btn btn-danger btn-md">
				<button type="button" class="btn btn -md btn-default" data-dismiss="modal">Close</button>	
				</form>
				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		@foreach ($data as $pot)
		$('#{{$pot['id']}}').click(function(){
			$('#del_id').val({{$pot['id']}})
		});
		@endforeach

	});
</script>
@stop