<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
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
width:100%;
display:grid;
grid-auto-flow:dense;
grid-template: "1fr 1fr 1fr 1fr 1fr"  33.33vh
               "1fr 1fr 1fr 1fr 1fr"  33.33vh
			   "1fr 1fr 1fr 1fr 1fr"  33.33vh
			   "1fr 1fr 1fr 1fr 1fr"  33.33vh
			   "1fr 1fr 1fr 1fr 1fr"  33.33vh
			   "1fr 1fr 1fr 1fr 1fr"  33.33vh
			   "1fr 1fr 1fr 1fr 1fr"  33.33vh;
grid-gap: 5px;
			   }
.container .box{
           position: relative;
		   background: #ccc;
		   
}
.container .box.a
{ grid-row:span 2;

}
.container .box.b,
.container .box.f,
.container .box.h,
.container .box.j,
.container .box.l,
.container .box.cc
{ grid-column:span 2;

}
.container .box.aa
{ grid-row:span 2;

}

.container .box img {
 position: absolute;
 top:0;
 left:0;
 width:100%;
 height: 100%;
 object-fit: cover;
}
.box:hover{
transform:scale(1.3);
z-index:2;
box-shadow: 0px 0px 30px #ff4d4d;
}
.box img:hover {
opacity:1;
}
.desc{
padding-left: 25px;
font-weight:bold;
text-align:center;
color:white;
position: absolute;
object-fit: cover;
font-family:'Lobster', cursive;
text-shadow: 0 0 20px #ff3333;
}
.desc:after{
	color: #737373;
	filter: blur(10px);
}
@media only screen and (max-width: 767px)
{
 .sm-m-30{
 margin-bottom:30px;
 }
 .desc{
 padding: 50px 0px;
 }
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
<div id="navbar" class="row" class="topnav" id="myTopnav">
<div class="col-12">
<ul>
<li> <a href="homepage.php" target="_blank">Home</a> </li>
<li> <a href="About.php" target="_blank">About Us</a></li>
<li> <a href="product.php" target="_blank">Products </a></li>
<li> <a href="contact.php" target="_blank">Contact Us </a> </li>
</ul>

</div>
</div>
<br>
<br>
<div class="container">
<div class="box a"><a href="productdetail.html" target="_blank"><img src="gallery/1.jpg"/><div class="desc">Berry Berry Mousse</div></a></div>
<div class="box b"><a href="productdetail1.html" target="_blank"><img src="gallery/2.jpg"/><div class="desc">Boneless buffalo bites</div></a></div>
<div class="box c"><a href="productdetail2.html" target="_blank"><img src="gallery/3.jpg"/><div class="desc">Brownies and cupcakes</div></a></div>
<div class="box d"><a href="productdetail3.html" target="_blank"><img src="gallery/4.jpg"/><div class="desc">Caesar salad</div></a></div>
<div class="box e"><a href="productdetail4.html" target="_blank"><img src="gallery/5.jpg"/><div class="desc">California Club Sandwich</div></a></div>
<div class="box f"><a href="productdetail5.html" target="_blank"><img src="gallery/6.jpg"/><div class="desc">Chicken Fajita Omelette</div></a></div>
<div class="box g"><a href="productdetail6.html" target="_blank"><img src="gallery/7.jpg"/><div class="desc">Chicken Parmigiana</div></a></div>
<div class="box h"><a href="productdetail7.html" target="_blank"><img src="gallery/8.jpg"/><div class="desc">Chicken Pasta</div></a></div>
<div class="box i"><a href="productdetail8.html" target="_blank"><img src="gallery/9.jpg"/><div class="desc">Chicken Tikka Pizza</div></a></div>
<div class="box j"><a href="productdetail9.html" target="_blank"><img src="gallery/10.jpg"/><div class="desc">Peach Smoothie</div></a></div>
<div class="box k"><a href="productdetail0.html" target="_blank"><img src="gallery/11.jpg"/><div class="desc">Brownies</div></a></div>
<div class="box l"><a href="productdetail11.html" target="_blank"><img src="gallery/12.jpg"/><div class="desc">Mini Chocolate Fudge Cake</div></a></div>
<div class="box m"><a href="productdetail12.html" target="_blank"><img src="gallery/13.jpg"/><div class="desc">Caramel Crunch Cake</div></a></div>
<div class="box n"><a href="productdetail13.html" target="_blank"><img src="gallery/14.jpg"/><div class="desc">Hazelnut mousse</div></a></div>
<div class="box o"><a href="productdetail14.html" target="_blank"><img src="gallery/15.jpg"/><div class="desc">Chocolate Molten Lava</div></a></div>
<div class="box p"><a href="productdetail15.html" target="_blank"><img src="gallery/16.jpg"/><div class="desc">Cold Coffee</div></a></div>
<div class="box q"><a href="productdetail16.html" target="_blank"><img src="gallery/17.jpg"/><div class="desc">Parmesan Pasta</div></a></div>
<div class="box r"><a href="productdetail17.html" target="_blank"><img src="gallery/18.jpg"/><div class="desc">Chocolate Pancakes</div></a></div>
<div class="box s"><a href="productdetail18.html" target="_blank"><img src="gallery/19.jpg"/><div class="desc">Fish and chips</div></a></div>
<div class="box t"><a href="productdetail3.html" target="_blank"><img src="gallery/20.jpg"/><div class="desc">Caesar salad</div></a></div>
<div class="box aa"><a href="productdetail20.html" target="_blank"><img src="gallery/21.jpg"/><div class="desc">Variety of Burgers</div></a></div>
<div class="box bb"><a href="productdetail21.html" target="_blank"><img src="gallery/22.jpg"/><div class="desc">Hazelnut Cake</div></a></div>
<div class="box cc"><a href="productdetail22.html" target="_blank"><img src="gallery/23.jpg"/><div class="desc">Mini Carrot Cake</div></a></div>
<div class="box dd"><a href="productdetail23.html" target="_blank"><img src="gallery/24.jpg"/><div class="desc">Red velvet</div></a></div>
<div class="box ee"><a href="productdetail24.html" target="_blank"><img src="gallery/25.jpg"/><div class="desc">Haleem</div></a></div>
<div class="box ff"><a href="productdetail.html" target="_blank"><img src="gallery/26.jpg"/><div class="desc">Berry Berry Mouse</div></a></div>
<div class="box gg"><a href="productdetail25.html" target="_blank"><img src="gallery/27.jpg"/><div class="desc">Coffee</div></a></div>

</div>
<br>
<br>





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
