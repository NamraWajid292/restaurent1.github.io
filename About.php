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
		border: 2px solid white;
		padding: 10px;
		}
<!-- -->
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
p{
font-size:20px;
font-style: poppins, arial;
text-align: left;
font-weight:light;
font-style: italic;
}
@import url('https://fonts.googleapis.com/css?family=Quicksand:300');
h1{
margin:0;
padding:0;
background: url(bg.jpg);
backgroung-size: cover;
font-family: 'Quicksand', sans-serif;

}
.neon{
    font-size: 4em;
	color: #fff;
	text-shadow: 0 0 20px #ff4d4d;
}
.neon:after{
	color: #ff4d4d;
	filter: blur(15px);
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

<div style="color: white;"class="container-fluid">
<div class="row">
<div class="col-12">
<h1 class="neon"><br>About Us <h1> 
<p ><br>For us Chilli Pepper is not just a family business, It is a family legacy of public
interest that we value, safeguard and promote wholeheartedly.
Chilli pepper has believed in providing high quality,hygienic food at affordable prices to
people of all social and economic classes without any discrimination.Keeping this as the
foundation of our business has helped us make home in consumers hearts and minds alike.

Today it gives me immense pleasure to see consumers buy Chilli pepper products not just for
their taste or quality but for the trust and credibility that comes with them.
Chilli pepper is in a constant process of expansion, growth and development because every
time we come across a product consumers need but cannot afford… We feel bound to
provide a solution; and an accessible and affordable one,thus the journey continues...
I wish and sincerely pray that we stay rooted to our priceless principles and
continue to serve people with the same level of passion, precision and
perfection that is a trademark of Chilli pepper.
Chilli pepper definitely is one chain that binds people with strong links of taste, quality and
credibility.</p>
 
<h1 class="neon">VISION</h1>
<p><br>To provide quality food at affordable price with no compromise on either.</p>
 
<h1 class="neon">Mission</h1>
<p><br>To facilitate consumers in their fast changing, rapid lifestyles through a huge network of
outlets offering a vast range of international quality products. To expand the product line as
per the needs and demands of consumers with the ultimate objective of satisfying them and
increasing the consumer base.</p>
<br>
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
