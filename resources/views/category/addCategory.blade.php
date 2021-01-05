<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Category</title>
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
    <link href="{{asset('CRUD/web/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <!-- Calendar -->
    <link rel="stylesheet" href="{{asset('CRUD/web/css/jquery-ui.css')}}" />
    <!-- //Calendar -->
    <link href="{{asset('CRUD/web/css/wickedpicker.css')}}" rel="stylesheet" type='text/css' media="all" />
    <!-- Time-script-CSS -->

    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
<h1 class="header-w3ls">
    Add Category</h1>
<div class="appointment-w3">
    <form method="post" action="{{route('category.create')}}">
        @csrf
        <div class="personal">

            <div class="main">
                <div class="form-left-w3l">

                    <input type="text" class="top-up" name="category_name" required="">
                </div>

            </div>

        </div>
        <div class="information">

        </div>


        <div >
            <input class="btn btn-success" type="submit" value="ADD">
            <a class=" btn btn-success" href="{{route('category.index')}}">Back</a>
        </div>
    </form>
</div>
<div class="copy">
    <p>&copy;2018 Table Booking Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
</div>
<!-- js -->
<script type='text/javascript' src="{{asset('CRUD/web/js/jquery-2.2.3.min.js')}}"></script>
<!-- //js -->
<!-- Calendar -->
<script src="{{asset('CRUD/web/js/jquery-ui.js')}}"></script>
<script>
    $(function () {
        $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
    });
</script>
<!-- //Calendar -->
<!-- Time -->
<script type="text/javascript" src="{{asset('CRUD/web/js/wickedpicker.js')}}"></script>
<script type="text/javascript">
    $('.timepicker,.timepicker1').wickedpicker({ twentyFour: false });
</script>
<!-- //Time -->

</body>

</html>
