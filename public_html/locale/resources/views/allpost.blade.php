<html>
<head>
<title>HANKESTRA</title>
	<script src="{{url('/')}}/js/jquery.min.js"></script>
 <script src="{{url('/')}}/js/jquery-1.11.1.js"></script>


<link href="{{url('/')}}/css/css.css" rel="stylesheet" />
<link href="{{url('/')}}/css/styles.css" rel="stylesheet" />
<link href="{{url('/')}}/css/animate.css" rel="stylesheet" />

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">

<script src="{{url('/')}}/js/bootstrap.js"></script>
<link href="{{url('/')}}/css/bootstrap.css" rel="stylesheet" />
<script src="{{url('/')}}/tinymce/tinymce.min.js"></script>
</head>
<body style="background-color:#000;">
<div class="container">
	<a href="{{url('/')}}" style="font-family:Hallo;font-size:2em;" >Back to home</a>
	@foreach ($data as $post)
	<div class="col-8-md" style="border-left: 3px solid #CA0606;padding:20px; font-family:Hallo;margin:20px; background-color:#232323;">
		<h1 style="color:#FFF;font-size:2.7em;">
		{{$post['title']}}
		</h1>
		
		
		<div style="color:#FFF; font-size:2em;">
			<p ><i>{{$post['date']}}</i></p>
		{!!$post['shortd']!!}

<a href="{{url('/')}}/showpost/{{$post['id']}}">
			<p>Read more</p>
		</a>
		</div>
		
		
	</div>
	@endforeach
	
</div>



</body>
</html>