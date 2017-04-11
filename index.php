<?php
include('opendb.php');

?>

<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="icon" href="images/favicon.png">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Nattsländan | Långemålas största fiskeklubb!</title>

<style>


/*
.navbar-nav > li > a, navbar-brand {
  padding-top:4px !important;
  padding-bottom:0 !important;
  height:28px;
}

.navbar {
  min-height:28px !important;
}
*/

.navbar-brand,
.navbar-nav li a {
  line-height: 75px;
  height: 75px;
  padding-top: 0;
}

.thecontainerlol {
  height:550px;
}

.parallax {
    background-image: url("images/wallpaper2.jpg");

    height:100%;
    width:100%;

    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" style="background-color:#324F17;" data-parallax="scroll">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="margin-top:20px">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
      <a class="navbar-brand" href="#"><img src="images/nattsllogo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <!-- <ul class="nav navbar-nav">
     <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul> -->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </div>
  </div>
</nav>

<div class="parallax">
<div class="thecontainerlol"></div>
</div>



<div class="container">
<div class="jumbotron">
<h1>Välkommen!</h1>

<p>Lorem ipsum dolor sit amet, ut porta montes. Metus magna a provident mauris, litora justo risus fusce, placerat quisque velit, nulla lacinia sit nulla mauris justo. Et in non, nulla eu in molestie ad, laoreet iaculis, vel dictumst in sapien vel, vivamus iaculis sem metus. Dolor laoreet, saepe est vel id, phasellus in vel pede sem, consectetuer ante donec, nisl et in vitae amet. Risus id hac diam nostra dolores. Quam elit mauris aenean, sodales orci nunc.
</p>

<p>
Dapibus elit laoreet, et erat scelerisque id vestibulum hac, sed cras consectetuer, nec at convallis ac, sollicitudin ipsum. Interdum enim vitae wisi. Ac nulla nunc arcu aliquam tincidunt, scelerisque dis tristique varius risus donec sit, eget qui id, officia pellentesque vivamus maecenas donec suspendisse. Eget erat luctus sollicitudin eget ut ullamcorper, interdum eget. Turpis eros eu velit senectus fugiat etiam, nonummy dolor et dapibus ultrices.
</p>

<p>
Urna maecenas vitae magni suscipit in, lobortis nulla erat wisi at orci, suscipit lorem. Pharetra amet libero massa, quam purus vel pellentesque phasellus ultrices sed, mauris tempus at pharetra posuere, wisi dapibus. Consequat orci et turpis leo fusce, nec rhoncus nostra morbi nec vitae. Nulla sit ornare porro in fermentum porta. Maecenas vel, eligendi aliquam, dui ligula eget platea.
</p>

</div>
</div>

<div class="row">

</div>


</body>
</html>