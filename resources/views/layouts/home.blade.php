
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Table Booking Form a Flat Responsive Widget Template :: w3layouts </title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Table Booking Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
	<script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<!--stylesheets-->
	<link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<!-- Calendar -->
	<link rel="stylesheet" href="{{asset('backend/css/jquery-ui.css')}}" />
	<!-- //Calendar -->
	<link href="{{asset('backend/css/wickedpicker.css')}}" rel="stylesheet" type='text/css' media="all" />
	<!-- Time-script-CSS -->

	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
	<h1 class="header-w3ls">
Table Booking Form</h1>
	<div class="appointment-w3">
		<form action="#" method="post">
			<div class="personal">

				<div class="main">
					<div class="form-left-w3l">

						<input type="text" class="top-up" name="name" placeholder="Name" required="">
					</div>
					<div class="form-left-w3l">

						<input type="email" name="email" placeholder="Email" required="">
					</div>
					<div class="form-right-w3ls ">

						<input class="buttom" type="text" name="phone number" placeholder="Phone Number" required="">
						<div class="clearfix"></div>
					</div>
				</div>

			</div>
			<div class="information">


				<div class="main">


					<div class="form-left-w3l">
						<input id="datepicker" name="text" type="text" placeholder="Booking Date &" required="">
						<input type="text" id="timepicker" name="Time" class="timepicker form-control hasWickedpicker" placeholder="Time" required=""
						 onkeypress="return false;">
						<div class="clear"></div>
					</div>
				</div>

				<div class="main">

					<div class="form-left-w3l">
						<select class="form-control">
					<option value="">Number of Adults</option>
						<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>and more</option>
					</select>
					</div>
					<div class="form-right-w3ls">
						<select class="form-control">
					<option value="">Number of Children</option>
						<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>and more</option>
					</select>
					</div>
				</div>

			</div>


			<div class="btnn">
				<input type="submit" value="Reserve a Table">
			</div>
		</form>
	</div>
	<div class="copy">
		<p>&copy;2018 Table Booking Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
	</div>
	<!-- js -->
	<script type='text/javascript' src='{{asset('backend/js/jquery-2.2.3.min.js')}}'></script>
	<!-- //js -->
	<!-- Calendar -->
	<script src="{{asset('backend/js/jquery-ui.js')}}"></script>
	<script>
$(function () {
    $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
});
	</script>
	<!-- //Calendar -->
	<!-- Time -->
	<script type="text/javascript" src="{{ asset('backend/js/wickedpicker.js') }}"></script>
	<script type="text/javascript">
    $('.timepicker,.timepicker1').wickedpicker({ twentyFour: false });
	</script>
	<!-- //Time -->

</body>

</html>
