<!DOCTYPE html>
<html lang="en">


<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Indi Travels</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!--================ Start Header Menu Area =================-->
	@include('layouts.header')

	<div class="container">
  <div class="jumbotron">
  	
    <h1>Package Details : {{$Activities->Title1}}</h1> 
    
    <p>{{$Activities->Description1}}</p> 
  </div>
  <div class="row">
  <div class="col-sm-4">
  	<div class="feature-thumb">
							<img class="img-fluid" src="{{asset('img/'.$Activities->picc)}}" alt="">
						</div></div>
  <div class="col-sm-8">{{$Activities->Elab_desc}} <br>
<!--   	<button type="submit">Book Trip</button> -->
  </div>
  	
</div>
</div>

</body>
</html>