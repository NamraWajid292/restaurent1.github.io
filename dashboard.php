<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ccmsaid']==0)) {
  header('location:index.php');
  } 
     ?>

<html lang="en">
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


   
   <title>Chilli Pepper</title>
   <link rel="icon" href="img/chli.png">
   
   
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style type="text/css">
*{
         margin: 0px;
		 padding: 0px;
		 list-style:none;
		 }
#header{ height:110px;
        background-color:#990000 ;
		border: 0px solid white;
		padding: 10px;
		}
#header ul{
        display:flex;
		text-align: center;
	}
#header ul li a{  
        padding-top: 10px;
        position:relative;
		display: block;
		color: #666;
		font-size:20px;
		height: 40px;
		width: 40px;
		background: #171515;
		border-radius: 50px;
	    margin: 0px 5px;
		cursor: pointer;
		transition: .5s;
} 
#header ul li a:before{
        position: absolute;
		top: 0;
		left:0;
		background: #f2f2f2;
		height: 100%;
		width: 100px;
		border-radius: 50%;
		z-zindex: -1;
		transform: scale(0.9);
		
		}

#header ul li a:hover:before{
        filter: blur(15px);
		transform: scale(1.2);
		
}
#header ul li a:hover:before{
        box-shadow: 0 0 15px #f2f2f2;
		 color: #f2f2f2;
 
 }

#header ul li a:hover{
         color: #f2f2f2;
		 text-shadow: 0 0 15px #f2f2f2;
		 box-shadow: 0 0 15px #f2f2f2;
		 }
@media screen and (max-width: 500px) {
  #header ul li a {
    float: none;
    display: block;
  }
}
#navbar{
       height: 60px;
       background-color:silver;
       border: 0px solid white;
       text-align: center;
	   overflow: auto;
	   }
#navbar ul {
            list-style: none;
            margin: 0;
			padding 0px;
			font-family:Arial, Helvetica, Sans-serif;
			font-size: 20px;
			}
#navbar ul li{
            float: left;
			width: 160px ; 
			height: 60px ;
			text-align:center; 
			padding-top: 10px; 
			float: left;  }
#navbar ul li a { 
             display: block;
             text-decoration:none; 
		     color: Black; 
			 font-weight: bold;}
#navbar ul li:hover { 
                  background: linear-gradient(to right, #e60000 0%, #141f1f 100%);
				  border: none;
				  border-radius: 50px;
				  
				  }
#navbar ul li a:hover{
                 color:Green;
				
				 } 
@media screen and (max-width: 500px) {
  #navbar ul li a {
    float: none;
    display: block;
  }
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height:50px;
  background-color: #990000;
  color: white;
  text-align: center;
}
p{
  color: #999;
  line-height: 25px;
}
h2,h3{
   color:#fff;
   }
h2{
   font-size:18px;
}
.footer-top{
   background: #111;
   padding: 80px;
}
.segment-one h3{
   font-family: Courgette;
   color: #fff;
   letter-spacing:3px;
   margins: 10px 0;
}
.segment-two h2{
   color: #fff;
   font-family: Poppine;
   text-decoration: uppercase;
   font-size: 30px;
}
.segment-two h2:before{
    content: '|';
	color: #c65039;
	padding-right: 10px;
}
.segment-two ul{
    margin:0;
	padding: 0;
	list-style: none;
}
.segment-two ul li{
    border-bottom: 1px solid rgba(255,255,255,0.3);
	line-height: 40px;
}
.segment-two ul li a{
    color: #999;
	text-decoration: none;
}
.segment-three h1{
    color: #fff;
	font-family: Poppins;
	text-transform:uppercase;
	font-size: 30px;
}
.segment-three h1:before{
    content: '|';
	color: #c65039;
	padding-right: 10px;
}
.segment-three a{
    background: #494848;
	width: 40px;
	height: 40px;
	display: inline-block;
	border-radius: 50%;
}
.segment-three a i {
    font-size: 20px;
	color:#fff;
	padding: 10px 12px;
	text-align: center;
}
.segment-four h1{
    color: #fff;
	font-family: Poppins;
	text-transform: uppercase;
}
.segment-four h1:before{
    content: '|';
	color: #c65039;
	padding-right: 10px;
	font-size:30px;
    
}
.segment-four form input[type=submit]{
    background: #c65039;
	border: none;
	padding: 3px 15px;
	margin-left: -5px;
	color: #fff;
	text-transform: uppercase;
}
.footer-bottom-text{
    text-align: center;
	background: #990000 ;
	line-height:75px;
}
@media only screen and (min-width:768px) and (max-width: 991px)
{
.md-mb-30{
margin-bottom:30px;
}
}
@media only screen and (max-width: 767px)
{
 .sm-m-30{
 margin-bottom:30px;
 }
 .footer-top{
 padding: 50px 0px;
 }
}
.container{
max-width:1200px;
margin: auto;
overflow:auto;
}
.gallery{
margin:20px;
float:left;
width:350px;
}
.gallery img{
width:100%;
height:auto;
border-radius:60%;
}

.desc{
padding: 15px;
text-align:center;
color:white;
}



</style>
	
</head>
<body>

<div class= "container-fluid" style="background-color:black;">
<div id="header" class="row">
<div  class="col-12">
<img style="border-radius:100%;" src="img/chli.png" width="150px" height="80px" alt="Restaurant Logo" />
<ul style="float:right;">
<li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
<li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
<li><a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i> </a></li>
<li><a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
</ul>
</div>
</div>
<div id="navbar" class="row" class="topnav" >
<div class="col-12">
<ul>
<li> <a href="homepage1.php" target="_blank">Home</a> </li>
<li> <a href="new.php" target="_blank">Add Product</a></li>
<li> <a href="newadmin.php">Add Admin </a></li>
<li> <a href="product1.php">Products </a> </li>
<li style="float: right;"> <a href="log_out.php">Log Out  </a> </li>
</ul>

</div>
</div>

<!--  jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
	<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/sand.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>We deal with all types of food.</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/salad.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>We deal with all types of food.</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/pasta.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>We deal with all types of food.</h5>
      </div>
    </div>
	<div class="carousel-item">
      <img src="img/cake.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>We deal with all types of food.</h5>
      </div>
    </div>
	<div class="carousel-item">
      <img src="img/fries.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>We deal with all types of food.</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
	<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
  </ol>
  </div>

<div class="container">
<div class="row">
<div style="color:white;" class="col-12">
<h1><br>Welcome To Chilli Pepper <img style="border-radius:50%;" src="img/chli.png" width="80" height="50"></h1>
<p> Chilli Pepper is unique to Lahore City. The restaurant features two venues in one: A Lounge and Full Service Dining. The Concept offers customers variety, offering multiple dining and entertainment options within a single establishment.The menu divisions will broaden our appeal and provide our customers with a different experience on each visit.</p> 
<br>
<br>
<br>

</div>
</div>
</div>

<div class="container">
<div class="gallery">
<a href="product.html" target="_blank"><img src="img/haleem.jpg" ></a>
<div class="desc">Desi Food</div>
</div>
<div class="gallery">
<a href="product.html" target="_blank"><img src="img/continental.jpg" ></a>
<div class="desc">Continental Food</div>
</div>
<div class="gallery">
<a href="product.html" target="_blank"><img src="img/pizza.jpg" ></a>
<div class="desc">Premium Pizzas</div>
</div>
<div class="gallery">
<a href="product.html" target="_blank"><img src="img/steaks.jpg" ></a>
<div class="desc"> Wide Range of steaks</div>
</div>
<div class="gallery">
<a href="product.html" target="_blank"><img src="img/breakfast.jpg" ></a>
<div class="desc">Breakfast</div>
</div>
<div class="gallery">
<a href="product.html" target="_blank"><img src="img/bakery.jpg" ></a>
<div class="desc"> Bakery Products</div>
</div>
</div>



<div class="footer-top">
 <div class= "container-fluid">
 <div class="row">
         <div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
		<h1> Chilli Pepper </h1>
		<p>Welcome to Chilli Pepper. A place to relax and enjoy the company of family and friends and to restore your energy.</p>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
		<h2> Chilli Pepper </h2>
		<ul>
            <li> <a href="#">Event</a> </li>
            <li> <a href="#">Support</a></li>
            <li> <a href="#">Hosting </a></li>
            <li> <a href="#">Career </a> </li>
             <li> <a href="#">Blog </a> </li>
        </ul>
</div>
<div class="col-md-3 col-sm-6 col-xs-12 segment-three  sm-mb-30">
		<h1> follow us </h1>
		<p> Please Follow us on our Social Media Profile in order to keep update.</p>
		      <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i> </a>
              <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
</div>
<div class="col-md-3 col-sm-6 col-xs-12 segment-four  sm-mb-30">
		<h1> Our Newletter </h1>
		<p> welcome to our business</p>
		<form action="">
		<input type="email">
		<input style="float:right;" type="submit" value="subscribe">
		</form>
</div>
</div>
</div>
</div>
<p class="footer-bottom-text"> All Rights Reserved by &copy; Chilli Pepper.2020 </p>





</div> 
</body>
</html
