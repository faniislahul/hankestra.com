<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<script src="js/jquery.min.js"></script>
 <script src="js/jquery-1.11.1.js"></script>


<link href="css/css.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<link href="css/animate.css" rel="stylesheet" />

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">

<script src="js/bootstrap.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" />
<script src="tinymce/tinymce.min.js"></script>




</head>
<body style="background-color:#EEEEEE;">
<nav class="navbar navbar-inverse" style="border-radius:0px;z-index:99;">
  <div class="container-fluid"><div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
    
    <ul class="nav navbar-nav">
        <li><a href="Dash"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"> </span> All Post</a></li>
         <li><a href="newpost"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> New Post</a></li>
      </ul>
      <ul class="nav navbar-nav" >
        <li><a href="logout"><span class="glyphicon glyphicon-lock" aria-hidden="true"> </span> Logout</a></li>
        
      </ul>
      
  </div>
    </div><!-- /.navbar-collaps
    e -->
 </div> <!-- /.container-fluid --></div>
</nav>
<div class="container" style="background-color:#CCCCCC;border-radius:3px; z-index:-1;"> 
@yield('content')
</div>

<script type="text/javascript">
  tinymce.init({
    selector: '#editor1',
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
  });


</script>
</body>
</html>