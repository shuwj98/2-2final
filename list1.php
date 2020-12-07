<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Welcome to My Trip blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<style>
.w1{margin-left:5px; margin-top:10px;}
.w2{font-size:20pt; text-align:center; font-weight: bolder;}
.w3{background-color:gray; color:white;}
</style>

	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="main.html">Welcome to My  <span style="margin-left: 10px">Trip  blog</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="main.html">Home</a></li>
					<li><a href="login.html" target="_blank" onclick="myFunction()">Login</a></li>
					<li><a href="https://www.koreanair.com/content/koreanair/korea/ko.html/" target="_blank" onclick="myFunction()">Ticket</a></li>
					<li><a href="https://kr.hotels.com/" target="_blank" onclick="myFunction()">Hotel</a></li>
					<li><a href="https://www.carlove.cz/" target="_blank" onclick="myFunction()">Rentcar</a></li>
				</ul>
			</nav>

		<!-- Content -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="post" class="wrapper bg-img" data-bg="banner2.jpg">
				<div class="inner">
					<article class="box">
						<header>
							
						</header>
						<div class="content">
							<?php
include"db3.php";
$result=mysqli_query($db,"select *from $table ");
echo"<table border=none class='w1' ><p align=top class='w2'> 계시글 목록</p></br>
 <tr class='w1' ><th class='w3' style='width:50px' >번호</th><th style='width:80px' class='w3'>작성
자</th>
<th style='width:180px;' class='w3'>email</th><th style='width:400px' class='w3'> 메세지</th></tr>";
$i=1;
while($arr=mysqli_fetch_array($result)) {
echo"<tr><th>{$i}</th><th>{$arr['name']}</th><th>{$arr['email']}</th>
<th>{$arr['message']}</th></tr>";
$i++;
}
echo"</table></center>";
mysqli_close($db);
?>


						</div>
						<footer>
							<ul class="actions">
								<li><a href="#" class="button alt icon fa-chevron-left"><span class="label">Previous</span></a></li>
								<li><a href="#" class="button alt icon fa-chevron-right"><span class="label">Next</span></a></li>
							</ul>
						</footer>
					</article>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h2>Contact Me</h2>
					<h2 class="w3-opacity w3-center"><i>inquiries on travel Drop a note!</i></h2>
					<div class="w3-row w3-padding-32">
						<div class="w3-col m6 w3-large w3-margin-bottom" style="color: white">
							<i class="fa fa-map-marker" style="width:30px"></i> Korean, seoul<br>
							<i class="fa fa-phone" style="width:30px" ></i> Phone: +82 010-xxxx-xxxx<br>
							<i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
						</div>
						<form method="post" action="insert2.php"  onclick="window.name='MemberServlet.do';window.open(this.href, 'insert',
            'width=650px　,height=650px,resizable=no,scrollbars=no,status=no');return false;">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<ul class="icons">
						<li><a href="https://twitter.com/" target="_blank" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href=https://www.facebook.com" target="_blank" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com" target="_blank"  class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://www.facebook.com/profile.php?id=100054720674809" target="_blank">swj</a>
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
