<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-1.11.1.js"></script>
<script src="js/bootstrap.js"></script>


<link href="css/css.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<link href="css/bootstrap.css" rel="stylesheet" />
<style type="text/css">
body {
	background-color: #000;
	vertical-align: middle;

}
.box{
	
	border-radius: 5px;
	padding: 10px;
	background-color: #CCD2D3;
	max-height: 280px;
	 margin: auto;
       position: absolute;
       top: 0; 
       left: 0;
       bottom: 0; 
       right: 0;

	
}

</style>

</head>
<body>
<div class="box col-lg-3 col-md-3 col-sm-8 col-xs-12" >
	<div style="text-align:center;">
		<h2 >Login</h2>
	</div>
	@if ($error!=NULL)
	<div class="alert alert-danger">{{$error}}</div>
	@endif
	<form action="login" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
		<span>Username</span>
		<input class="form-control" type="text" name="user" placeholder="Masukkan username..">
	<br>
	
		<span>Password</span>
		<input class="form-control"type="password" name="pass" placeholder="Masukkan password..">
	
	
	</br>
		<input type="submit" class="btn btn-primary" style="float:right;margin-bottom:10px;">
	
	</form>

</div>



</body>
</html>