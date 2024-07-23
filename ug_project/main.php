<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<style>
html{
	scroll-behavior: smooth;
}
.socialbtns, .socialbtns ul, .socialbtns li {
	margin: 0;
	padding: 5px;
}
.socialbtns li {
    list-style: none outside none;
    display: inline-block;
}
.socialbtns .fa {
	width: 40px;
    height: 40px;
	color: #000;
	background-color: #FFF;
	border: 1px solid #000;
	padding-top: 12px;
	padding-left: 6px;
	padding-bottom: 12px;
	border-radius: 0px;
	-moz-border-radius: 22px;
	-webkit-border-radius: 22px;
	-o-border-radius: 22px;
}
.socialbtns .fa:hover {
	color: #FFF;
	background-color: #000;
	border: 1px solid #000;
}
a, a:hover {
	text-decoration: none;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: underline;
}
.top-right {
	position: absolute;
	top: 8px;
	right: 16px;
	font-size: 25px;
	color: white;
}
.text{
	padding:50px;
}
.square {
	height: 500px;
	width: 500px;
	background-color: #FF9A9A;
	position: absolute;
	right: 700px; 
}
.f2{
	position: absolute;
	right: 250px;
}
.hr{
	background-color: #FF9A9A;
	padding: 60px;
}
*{
	box-sizing: border-box;
}
.mySlides{
	display: none;
}
img{
	vertical-align: middle;
}
.slideshow-container {
	height: 300px;
	width: 300px;
	position: relative;
	right: 50px;
	margin: auto; 
}
.text1 {
	color: #f2f2f2;
	font-size: 20px;
	padding: 8px 12px;
	position: absolute;
	bottom: 8px;
	width: 100%;
	text-align: center;
}
.numbertext {
	color: #f2f2f2;
	font-size: 12px;
	padding: 8px 12px;
	position: absolute;
	top: 0;
}
.dot {
	height: 10px;
	width: 10px;
	margin: 0 2px;
	background-color: #bbb;
	border-radius: 50%;
	display: inline-block;
	transition: background-color 0.6s ease;
}
.active {
	background-color: #717171;
}
.fade {
	animation-name: fade;
	animation-duration: 1.5s;
}
@keyframes fade {
	from {opacity: .4} 
	to {opacity: 1}
}
@media only screen and (max-width: 300px) {
	.text {font-size: 11px}
}
input[type=text], input[type=password]{
	width: 50%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}
button {
	background-color: #FF9A9A;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 50%;
}
.cancelbtn {
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
}
.imgcontainer {
	text-align: center;
	margin: 24px 0 12px 0;
	position: relative;
}
img.avatar {
	width: 20%;
	border-radius: 90%;
}
.container {
	padding: 16px;
	color: black;
}
.psw {
	display: inline-block;
	padding-top: 16px;
	font-size:16px;
	margin-left:200px;
	text-align:left;
}
.modal {
	display: none; 
	position: fixed; 
	z-index: 1; 
	left: 0;
	top: 0;
	width: 100%; 
	height: 100%; 
	overflow: auto; 
	background-color: #FFF1ED;
	background-color: rgba(0,0,0,0.4); 
	padding-top: 60px;
}
.modal-content {
	background-color: #fefefe;
	margin: 5% auto 15% auto; 
	border: 1px solid #888;
	width: 50%; 
}
.close {
	position: absolute;
	right: 25px;
	top: 0;
	color: #000;
	font-size: 35px;
	font-weight: bold;
}
.animate {
	-webkit-animation: animatezoom 0.6s;
	animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
	from {-webkit-transform: scale(0)} 
	to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
	from {transform: scale(0)} 
	to {transform: scale(1)}
}
@media screen and (max-width: 150px) {
span.psw {
	display: block;
	float: none;
}
}
input[type=text], input[type=password] {
	width: 100%;
	padding: 15px;
	margin: 5px 0 22px 0;
	display: inline-block;
	border: none;
	background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
	background-color: #ddd;
	outline: none;
}
.button {
	background-color: #FF9A9A;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
	opacity: 0.9;
}
hr {
	border: 1px solid #f1f1f1;
	margin-bottom: 25px;
}
.form-popup {
	display: none;
	position: fixed;
	right: 25px;
	background-color: #FFF1ED;
	border: 3px solid #f1f1f1;
	z-index: 9;
	top: 200px;
	font-color: black;
}
</style>
</head>
<body style="background-color:#FFF1ED;font-family: Verdana, sans-serif;">
<header>
<div class="top-right"><br>
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-right:100px;">Login</button>
	<div id="id01" class="modal" style="display:none;">
		<form class="modal-content animate" action="check.php" method="post">
		<div class="imgcontainer">
			<span onclick="document.getElementById('id01').style.display='none'" class="close">&times;</span>
			<img src="avatar.jpg" alt="Avatar" class="avatar">
		</div>
		<div class="container">
			<label for="uname"><b>Username</b></label>
			<input type="text" autocomplete="off" name="uname" required>
			<label for="psw"><b>Password</b></label>
			<input type="password"  name="psw" required>
			<input type="submit" name="submit" value="Login" class="button"></input>
			<label><input type="checkbox" checked="checked" name="remember"><font size=3> Remember me </font></label>
		</div>
		<div class="container" style="background-color:#f1f1f1;">
			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			<div class="psw">Don't have an account?<a href="sign.php" style="margin-right: 20px;">Sign Up</a>Forgot<input type="button" onclick="myform()" style="border: none;" value="password?"/></div>
		</div>
		</form>
	</div>
	<a href="home.php" style="margin-right:100px;">Venue</a>
	<a href="#f1" style="margin-right:100px;">About</a>
    <a href="#f3" style="margin-right:100px;">Gallery</a>
    <a href="#f4" style="margin-right:20px;">Contact</a><br>
</div>
<div class="form-popup" id="myForm">
	<p>Mail your Queries in the below link, we will contact you soon!!<p>
	<a href="mailto:poojaraj3013@gmail.com"><font color=blue>poojaraj3013@gmail.com</font></a>
	<button type="button" style="width:80px; height:40px;" onclick="closeForm()">Close</button>
</div>
</header>
<img src="saaija.png">
<center><img src="image1.jpeg" name="poo" height="700" width="1500" alt="no image"></center>
<br><br><br><br><br><br><br><br>
<div class="square"><br><br>
	<div class="text" id="f1"><font size="10"><b>About</b></font><br>
	<p><font size="5">Enter Saaija, where style, comfort and hospitality meet. Our commitment to service is incomparable
		and our fares are unmatched. Take a look at our site to find out more about
		our rooms, food and special events, or check out the services that we offer. Can't find
		what you're looking for? Give us a call!!</font></p>
	</div>
</div>
<div class="f2"><img src="fri.jpg" width="500" height="300"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="pooja" id="f3">
	<div class="slideshow-container">
		<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
				<img src="thiru.jpeg" style="width:150%">
		<div class="text1"><b>In Thirupathiripulliyur</b></div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">2 / 3</div>
				<img src="OT1.jpeg" style="width:150%">
		<div class="text1"><b>In Old Town</b></div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
				<img src="manja.jpg" style="width:150%">
		<div class="text1"><b>In Manjakuppam</b></div>
		</div>
	</div><br>
	<div style="text-align:center">
		<span class="dot"></span> 
		<span class="dot"></span> 
		<span class="dot"></span> 
	</div>
	<script>
	let slideIndex = 0;
	showSlides();
	function showSlides(){
		let i;
		let slides = document.getElementsByClassName("mySlides");
		let dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}    
		for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides, 2000);
	}
	</script>
</div>
<br><br><br><br><br><br><br>
<div class="hr">
	<div class="rt" id="f4">
		<h1>Contact</h1>
		<h2>Saaija PG for Women<label style="margin-left:400px;">Email to: <a href="mailto:poojaraj3013@gmail.com">poojaraj3013@gmail.com</a></label></h2>
		<h2>No.26 2nd cross street, <label style="margin-left:363px;">Follow us on: </label></h2>
		<h2><label>Pazhamalai Nagar, Pudhukuppam
		<a style="margin-left:215px;" href="#" class="fa fa-lg fa-facebook socialbtns"></a>
		<a href="#" class="fa fa-lg fa-twitter socialbtns"></a>
		<a href="#" class="fa fa-lg fa-instagram socialbtns"></a></label></h2>
		<h2>Cuddalore 600 001.</h2>
	</div>
</div>
<br><br>
<hr>
<script>
	var modal = document.getElementById('id01');
	window.addEventListener('click',function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	});
</script>
<script>
function myform() {
  var modal = document.getElementById('myForm');
  modal.style.display = 'block';
}
function closeForm() {
  var modal = document.getElementById('myForm');
  modal.style.display = 'none';
}
</script>
</body>
</html>