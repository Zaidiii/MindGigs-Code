<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>

	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">


	<script type="text/javascript"  src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
	<meta charset="UTF-8">
	<title>MindGigs</title>

</head>
<body text="black" style="font-family: 'Lato Thin'">
<nav class="navbar" style="border-bottom: 1px solid black">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle"  style="background-color: white" data-toggle="collapse" data-target="#myNavbar">
				<span style="background-color: black" class="icon-bar"></span>
				<span style="background-color: black" class="icon-bar"></span>
				<span style="background-color: black" class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#" style="font-size: 30px">MindGigs &trade;</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" style="width:300px " class="form-control" placeholder="Search for services">
				</div>
				<button type="submit" class="btn btn-default"style="color: black; font-weight: 900">Search</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</div>
</nav>
<center><h1 style="font-weight: 600; font-size: 50px">Welcome to MindGigs</h1></center>
<center><h2 style="font-weight: 600">Minds Near You</h2></center>
<br>

<center><h2>Mindgigs helps you to connect with great minds near you!</h2></center>
<br>
<center><h1>Let's get started!</h1></center>
<center><h1>First, tell us what you want to be.</h1></center>
<br>
<center>
	<a href="{{action('SkillSellerSignup@index')}}"><button type="button" class="btn btn-default btn-lg "  style=" width: 30%; font-weight: 700; border:1px solid black ">Skills Seller</button></a>
	OR
	<button type="button" class="btn btn-default btn-lg " style=" width: 30%; font-weight: 700; border:1px solid black">Skills Buyer</button>
</center>
</body>
</html>