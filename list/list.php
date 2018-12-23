<!DOCTYPE html>
<html>
<head>
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
    <link href="js/slick/slick.css" rel="stylesheet">
    <link href="js/slick/slick-theme.css" rel="stylesheet">
	<link href="" rel="stylesheet">
	<style type="">
		body{
    margin: 0px;
    background-color: white;
    padding: 0px;
}
.header {
    background-color: #000d33;
}
.header .top-panel .wrap1200 .social-link {
    text-align: right;
    margin: 0px;
    height: 45px;
    padding-right: 50px;
}
.header .top-panel .wrap1200 .social-link .fa {
    height: 20px;
    width: 20px;
    margin: 10px;
}
.header .top-panel .wrap1200 .social-link a{
    text-decoration: none;
    color: white;
}
.header .top-panel .wrap1200 .social-link a:hover{
    color: #66b3ff;
}
.header .menu .menu-logo .sdu-img{
    width: 120px;
    margin-top: 20px;
    margin-left: 30px; 
}
.sdu-img {
    margin-top: 10px;
}
.header .menu {
    display: inline-block;

}
.header .menu a{
    text-decoration: none;
}
.header .menu .menu-logo {
    margin: 3px;
}
.header .menu .menu-list{
    display: inline-block;
}
.header .menu .menu-list a {
    display: inline-block;
    text-decoration: none;
    padding: 10px;
    color: white;
}

.header .menu .menu-list li{
    display: inline-block;
    margin-right: 25px;
}
.header .menu .menu-list a:hover{
    background-color: #66b3ff;
    
}
.header .menu .menu-list a.active {
    background-color: #66b3ff;
    color: white;
}
.header .menu .place-n{
    width: 320px;
    display: inline-block;
    background-color: black;
}
.header .menu .b-reg {
    background-color: #66b3ff;
    color: white;
    font-weight: 5px;
    display: inline-block;
    padding: 10px;
    
}
.header .menu a.b-reg:hover {
    background-color: #008080;
}

.content{
    height:100%;
    background-color: black;
}


* {
  box-sizing: border-box;
}

body {
  
}

/* Style the header */
header {
  background-color: #000d33;
  padding: 30px;
  text-align: center;
  font-size: 25px;
  color: white;
  height: 150px;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  height: 600px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
.vertical-menu {
  width: 200px; /* Set a width if you like */
  height: 460px;
  overflow-y: auto;
}

.vertical-menu input {
  background-color: white; /* Grey background color */
  color: black; /* Black text color */
  display: block; /* Make the links appear below each other */
  padding: 12px; /* Add some padding */
  text-align: center;
  width: 200px;
}

.vertical-menu input:hover {
  background-color: #ccc; /* Dark grey background on mouse-over */
}

.rooms {
  
  color: #000d33;
  font-size: 30px;
  margin: 10px;
}
.vertical-menu input.active {
  background-color: #000066; /* Add a green color to the "active/current" link */
  color: white;
}

article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: #f1f1f1;
  height: 600px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}



ul{
	list-style: none;
}

.footer {
    width: 100%;
    background-color: #000d33;
    padding-top: 40px;
    padding-bottom: 20px;
    padding-left: 40px;

}
.footer .copyright {
    margin-top: 40px;
    text-align: center;
    font-size: 14px;
    color: #FFFFFF; /*white*/
}
.footer .copyright a {
    color: #66b3ff;
    font-weight: bold;
    text-decoration: none;
}
.footer .footer-content {
    display: table;
}
.footer .footer-content .contacts {
    display: table-cell;
    width: 25%;
    color: #FFFFFF; /*white*/
}
.footer .footer-content .contacts h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 30px;
}
.footer .footer-content .contacts div {
    font-size: 16px;
}
.footer .footer-content .contacts div div {
    margin-bottom: 24px;
}
.footer .footer-content .contacts div div i {
    margin-right: 8px;
    color: #66b3ff;
}
.footer .footer-content .contacts div div a {
    text-decoration: none;
    color: #FFFFFF;
}
.footer .footer-content .contacts div div a:hover {
    color: #66b3ff;
}
.footer .footer-content .contacts .footer-social-links a {
    color: #FFFFFF;
    text-decoration: none;
    display: inline-block;
    width: 30px;
    text-align: center;
    padding-top: 6px;
    padding-bottom: 6px;
    border: 1px solid #FFF;
    margin-right: 5px;
}
.footer .footer-content .contacts .footer-social-links a:hover,
.footer .footer-content .contacts .footer-social-links a:active {
    border: 1px solid #66b3ff;
    color: #66b3ff;
}
.footer .footer-content .contacts .subscribe {
    margin-top: 30px;
}
.footer .footer-content .contacts .subscribe form input#email {
    border: 1px solid #CCCCCC;
    font-size: 16px;
    padding: 4px;
}
.footer .footer-content .contacts .subscribe form .submit-btn {
    display: inline-block;
    text-transform: uppercase;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    background-color: #66b3ff;
    color: #FFFFFF; /*white*/
    padding: 6px 8px;
    border: none;
    cursor: pointer;
}
.footer .footer-content .contacts .subscribe form .submit-btn:hover {
    background-color: black;
}
.footer .footer-content .footer-menu {
    display: table-cell;
    width: 22%;
    padding-left: 3%;
    color: #FFFFFF;
}
.footer .footer-content .footer-menu h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 30px;
}

.footer .footer-content .footer-menu ul.menu li {
    margin-bottom: 15px;
    text-decoration: none;
}
.footer .footer-content .footer-menu ul.menu li a {
    text-decoration: none;
    font-size: 16px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 10px;
    padding-right: 10px;
    color: #FFFFFF;
}
.footer .footer-content .footer-menu ul.menu li a:hover,
.footer .footer-content .footer-menu ul.menu li a.active {
    background-color: #66b3ff;
}
.footer .footer-content .footer-instagram {
    display: table-cell;
    width: 50%;
    color: #FFFFFF;
}
.footer .footer-content .footer-instagram h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 30px;
    text-transform: uppercase;
}
	</style>
	<title>SDU DORM</title>

</head>

<body>
	<div class = "header">
		<div class="top-panel">
			<div class="wrap1200">
				<div class="social-link">
					<a href="#" target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#" target="_blank">
						<i class="fa fa-linkedin"></i>
					</a>
					<a href="#" target="_blank">
						<i class="fa fa-instagram"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="menu">
			<a class = "menu-logo" href="www.sdu.edu.kz">
				<img class = "sdu-img" src="images/sdu.svg">
			</a>
			<ul class="menu-list">
				<li><a href="../x.php">HOME</a></li>
				<li><a href="#">NEWS</a></li>
				<li><a href="#">GALLERY</a></li>
				<li><a href="#" class = "active">BLOCKS</a></li>
				<li><a href="#">STAFF</a></li>
				<li><a href="../registr.php">REGISTRATION</a></li>
			</ul>
			
		</div>
	</div>
	<div class="content">
		<header>
		  <h2>Information about Students</h2>
		</header>

		<section>
		  <nav>
		  	<div class="rooms">ROOMS</div>
		  	
		  	<div class="vertical-menu">
		  		<form>
		  		<?php
		  			$kat = $_GET["blok"];
		  			echo '<input type="submit" name="room" value="'.$kat.'01" class="active"/>';
		  			for ($i=2; $i<42; $i++) {
		  				if ($i<10)
			  				echo '<input type="submit" name="room" value="'.$kat.'0'.$i.'"/>';
			  			else
			  				echo '<input type="submit" name="room" value="'.$kat.$i.'"/>';
			  		}
			  	?>
			  	</form>
			</div>
			
		  </nav>
		  
		  <article>
		    <h1>London</h1>
		    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
		    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
		  </article>
		</section>



	</div>
	<div class="footer">
		<div class="footer-content wrap1200">
			<div class="contacts">
				<h2>GET IN TOUCH</h2>
				<div>
					<div class="f-address">
						<i class="fa fa-map-marker fa-lg"></i><a href="https://www.google.com/maps/place/SDU+Dormitory/@43.2082474,76.6672385,17z/data=!4m12!1m6!3m5!1s0x38834f7675d8a6c3:0x7b7d14aec270c056!2sSDU!8m2!3d43.2082435!4d76.6694272!3m4!1s0x388345a30fcf8063:0x2e17830b49575983!8m2!3d43.2074554!4d76.6683644">1/1 Abylai Khan Street, Kaskelen</a>
					</div>
					<div class="f-phone">
						<i class="fa fa-phone fa-lg"></i>  <a href="tel:+7 727 307 95 65">+7 727 307 95 65</a>
					</div>
					<div class="f-email">
						<i class="fa fa-envelope-o fa-lg"></i> <a href="info@sdu.edu.kz">info@sdu.edu.kz</a>
					</div>
				</div>
				<div class="footer-social-links">
					<a href="#" target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#" target="_blank">
						<i class="fa fa-linkedin"></i>
					</a>
					<a href="#" target="_blank">
						<i class="fa fa-instagram"></i>
					</a>
				</div>
				<div class="subscribe">
					<form action="subscribe.php" method="POST">
						<input type="text" name="email" placeholder="Enter your email" id="email" />
						<input type="submit" value="Submit" class="submit-btn">
					</form>
				</div>
			</div>
			<div class="footer-menu">
				<h2>MENU</h2>
				<ul class="menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#" class="active">Blocks</a></li>
					<li><a href="#">Staff</a></li>
					<li><a href="#">Registration</a></li>
				</ul>
			</div>
			<div class="footer-instagram">
				<h2>Instagram</h2>
			</div>
		</div>
		<div class="copyright">
			&copy; 2018 All right reserved. Designed by <a href="http://sdu.edu.kz" target="_blank">Yerik</a>
		</div>
	</div>

	<!--<div class="footer">
		<div class="f-content">
			<div class="in-touch">
				<h2>GET IN TOUCH</h2>
					<div class="f-address">
						<i class="fa fa-map-marker fa-lg"></i><a href="google.map">1/1 Abylai Khan Street, Kaskelen</a>
					</div>
					<div class="f-phone">
						<i class="fa fa-phone fa-lg"></i> <a href="tel:+7 727 307 95 65">+7 727 307 95 65</a>
					</div>
					<div class="f-email">
						<i class="fa fa-envelope-o fa-lg"></i><a href="mailto:demo@info.com">info@sdu.edu.kz</a>
					</div>
			</div>

			<div class="menu-foo">
				<div id="git">MENU</div>
				<ul>
					<li class="items">News</li>
					<li class="items">Gallery</li>
					<li class="items">Students</li>
					<li class="items">Staff</li>
					<li class="items">Registration</li>
				</ul>
				
			</div>
		</div>
		
	</div> -->

<script src="script.js"></script>
</body>
</html>