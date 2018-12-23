<?php include('database.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
    <link href="js/slick/slick.css" rel="stylesheet">
    <link href="js/slick/slick-theme.css" rel="stylesheet">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}

		body{
			font-size: 120%;
			background-color: #000d33;
		}

		.head{
			width: 30%;
			margin: 50px auto 0;
			color: white;
			background: #5f9ea0;
			text-align: center;
			border: 1px solid #b0c4de;
			border-bottom: none;
			border-radius: 10px 10px 0 0;
			padding: 20px;
		}

		.reg {
			width: 30%;
			margin: 0 auto 10px;
			padding: 20px;
			border: 1px solid #b0c4de;
			background: #fff;
			border-radius: 0 0 10px 10px;	
		}

		.input-group{
			margin: 10px auto;
		}

		.input-group label{
			display: block;
			text-align: left;
			margin: 3px;
		}

		.input-group input{
			height: 30px;
			width: 93%;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}

		.btn{
			padding: 10px;
			font-size: 15px;
			color: #fff;
			background: #5f9ea0;
			border: none;
			border-radius: 5px;
		}

		.error{
			width: 93%;
			padding: 10px;
			border: 1px solid #a94442;
			color: #a94442;
			background: #f2dede;
			border-radius: 5px;
			text-align: left;
		}
		
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
    color: white;
}
.header .menu .menu-list a.active {
    background-color: #66b3ff;
    color: white;
}
.header .menu .place-n{
    width: 340px;
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
.header .menu a:hover {
    background-color: black;
}

.content{
    height:100%;
    background-color: #000d33;}




















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
				<li><a href="x.php">HOME</a></li>
				<li><a href="#">NEWS</a></li>
				<li><a href="#">GALLERY</a></li>
				<li><a href="blocks.php">BLOCKS</a></li>
				<li><a href="#">STAFF</a></li>
				<li><a href="#" class = "active" >REGISTRATION</a></li>
			</ul>
			
		</div>
	</div>
	<div class= "content">
		<div class="head">
			<h2>Register</h2>
		</div>
		<form class="reg" action="registr.php" method="post">
			<?php include('error.php'); ?>
			<div class="input-group">
				<label>Name</label>
				<input type="text" name="name" value="<?php echo $name; ?>">
			</div>
			<div class="input-group">
				<label>Surname</label>
				<input type="text" name="surname" value="<?php echo $surname; ?>">
			</div>
			<div class="input-group">
				<label>Birthday</label>
				<input type="text" name="birthday" value="<?php echo $birthday; ?>">
			</div>
			<div class="input-group">
				<label>City</label>
				<input type="text" name="city" value="<?php echo $city; ?>">
			</div>
			<div class="input-group">
				<label>School</label>
				<input type="text" name="school" value="<?php echo $school; ?>">
			</div>
			<div class="input-group">
				<label>Mother</label>
				<input type="text" name="mother" value="<?php echo $mother; ?>">
			</div>
			<div class="input-group">
				<label>Father</label>
				<input type="text" name="father" value="<?php echo $father; ?>">
			</div>
			<div class="input-group">
				<label>Your number</label>
				<input type="text" name="yourNumber" value="<?php echo $yourNumber; ?>">
			</div>
			<div class="input-group">
				<label>Mother Number</label>
				<input type="text" name="motherNumber" value="<?php echo $motherNumber; ?>">
			</div>
			<div class="input-group">
				<label>Father Number</label>
				<input type="text" name="fatherNumber" value="<?php echo $fatherNumber; ?>">
			</div>
			<div class="input-group">
				<button type="submit" name="register" class="btn">Register</button>
			</div>
		</form>
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
					<form class= "subs" action="subscribe.php" method="POST">
						<input type="text" name="email" placeholder="Enter your email" id="email" />
						<input type="submit" value="Submit" class="submit-btn">
					</form>
				</div>
			</div>
			<div class="footer-menu">
				<h2>MENU</h2>
				<ul class="menu">
					<li><a href="#" class="active">Home</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Students</a></li>
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
</body>
</html>