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
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
body{
width:100%;
height:100%;
display:grid;
align-items: center;
background: #8e2de2;
}
.contact-in{
width:80%;
margin:50px auto;;
display: flex;
flex-wrap:wrap;
padding:10px;
border-radius: 10px;
background:#ff5050;
box-shadow: 0px 0px 15px 0px white;
}
.contact-map{
height:auto;
max-width:auto;
flex: 50%;
}
.contact-map iframe{
width:70%;
height:50%;
margin-left: 5rem;

}
.contact-form{
width:7rem;
height:auto;
flex: 50%;
text-align: center;
}
.contact-form h1{
margin-bottom: 10px;
font-family:'Poppins',sans-serif;
}
.contact-form-text{
width:100%;
height:40px;
color:#000;
border :1px solid #bcbcbc;
border-radius:50px;
outline: none;
margin-bottom:20px;
padding: 15px;
font-family:'Poppins',sans-serif;
}
.contact-form-text1{
width:75%;
height:40px;
color:#000;
border :1px solid #bcbcbc;
border-radius:50px;
outline: none;
margin-bottom:20px;
padding: 5px;
font-family:'Poppins',sans-serif;
}
.contact-form-text::placeholder{
color:#aaa;
}
.contact-form-textarea{
width:100%;
height:130px;
color:#000;
border :1px solid #bcbcbc;
border-radius:50px;
outline: none;
margin-bottom:20px;
padding:20px;
font-family:'Poppins',sans-serif;

}
.contact-form-btn{
width:100%;
border:none;
outline:none;
border-radius: 50px;
background: #990000;
color: #fff;
text-transform: uppercase;
padding: 10px 0px;
cursor: pointer;
font-size:18px;
}
@media screen and (max-width: 500px) {
  .contact-in {
    float: none;
    display: block;
  }
}
@media screen and (max-width: 500px) {
  .contact-map{
    float: none;
    display: block;
  }
}
@media screen and (max-width: 500px) {
  .res{
    float: none;
    display: block;
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
<li> <a href="product.php"target="_blank">Products </a></li>
<li> <a href="contact.php" target="_blank">Contact Us </a> </li>
</ul>
</div>
</div>

<div class="contact-in">

<div class="contact-form">
<h1> Contact Us</h1>
<form action="contact.php">
<input type="text" name="name" placeholder="Enter your Name here." class="contact-form-text"/><br>
<input type="text"  name="email" placeholder="name12@gmail.com" class="contact-form-text"/><br>
<input type="text" name="phone" placeholder="Enter your phone number." class="contact-form-text"/><br>
<div style="cursor: pointer;font-family:'Poppins',sans-serif; font-weight:bold; width:75%;">
<label >Choose your option:</label>
<input style="cursor: pointer;" type="Radio" name="radio" value="Take Away" />Take Away
<input style="cursor: pointer;"type="Radio"  name="radio" value="Delivery" />Delivery<br>
</div>
<label class="res" style="font-family:'Poppins',sans-serif; font-weight:bold;">Select Area:</label>
<select name="drop down" class="contact-form-text1" >
<option value="">
<option value="Wapda Town">Wapda Town
<option value="Township">Township
<option value="DHA">DHA
<option value="Riwind">Riwind
<option value="Valencia">Valencia
</select>
<textarea name="text" placeholder="Message" class="contact-form-textarea"></textarea><br>
<input type="submit" placeholder="Submit" class="contact-form-btn"/>
</form>
</div>

<div class="contact-map">
<h1 style="text-align:center;">444 Street 3</h1>
<p style="text-align:center; color: black;">Block J2 Street 3 Wapda Town Phase 1 WAPDA TOWN, <br> Lahore, Punjab <br> Pakistan.<br>+92-3104605244</p><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.6988249897313!2d74.26116091433748!3d31.422422981402146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391901aa5e116641%3A0xd167cbdef2643be!2s444%20Street%203%2C%20Block%20J2%20Block%20J%202%20Wapda%20Town%20Phase%201%20WAPDA%20Town%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604239843830!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
