<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
	margin-right: 250px;
	margin-left: 250px;
	background-color:#FFF1ED;
	font-family: Verdana, sans-serif; 
}
header {
	background-color: #FF9A9A;
	padding: 1em;
}
* {box-sizing: border-box;}
.mySlides {display: none;}
img {
	vertical-align: middle;
	height:100px;
	width: 150px;
}
.slideshow-container {
	height: 300px;
	width: 300px;
	position: relative;
	right: 60px;
	margin: auto;
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
button{
	background-color: #ff9a9a;
	height:30px;
	width:100px;
	cursor: pointer;
}
.button {
    background-color: #FFF1ED;
    color: #fff1ed;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}
</style>
</head>
<body>
<button onclick="history.back()">Go Back</button>
<div class="slideshow-container">
	<div class="mySlides fade">
		<div class="numbertext">1 / 4</div>
		<img src="OT1.jpeg" style="width: 500px; height: 300px !important;">
	</div>
	<div class="mySlides fade">
		<div class="numbertext">2 / 4</div>
		<img src="man1.jpeg"  style="width: 500px; height: 300px !important;">
	</div>
	<div class="mySlides fade">
		<div class="numbertext">3 / 4</div>
		<img src="man2.jpeg" style="width: 500px; height: 300px !important;">
	</div>
	<div class="mySlides fade">
		<div class="numbertext">4 / 4</div>
		<img src="man3.jpeg" style="width: 500px; height: 300px !important;">
	</div>
</div><br>
<div style="text-align:center">
	<span class="dot"></span> 
	<span class="dot"></span> 
	<span class="dot"></span> 
	<span class="dot"></span>
</div>
<script>
let slideIndex = 0;
showSlides();
function showSlides() {
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
<hr>
<header>
	<h2 style="padding-left:20px;">Room Details</h2>
	<b><font size=4 style="padding-left:140px;">Private Room</font></b>
	<b><font size=4 style="padding-left:140px;">Double Sharing</font></b>
    <b><font size=4 style="padding-left:140px;">Triple Sharing</font></b><br><br>
	<font size=3 style="padding-left:130px;">starts from 10,500
	<font size=3 style="padding-left:140px;">starts from 7,500
	<font size=3 style="padding-left:150px;">starts from 4,500
</header>
<hr>
<header>
	<h2 style="padding-left:20px;">Food</h2>
	<font size=4 style="padding-left: 20px;">The spacious and airy canteen caters. Nutritious food is served for breakfast, lunch, high tea and supper.</font><font size=4 style="padding-left: 20px;"> Both Veg and Non-Veg food are available in our PG.</font><br><br>
</header>
<hr>
<header>
	<h2 style="padding-left:20px;">Amenities</h2>
	<img src="cup1.jpg" style="padding-left:45px;">
	<img src="ac.jpg" style="padding-left:45px;">
	<img src="bed1.jpg" style="padding-left:45px;">
	<img src="heater1.jpg" style="padding-left:45px;">
	<img src="bath1.jpg" style="padding-left:45px;" >
	<img src="wifi.jpg" style="padding-left:45px;"><br><br>
	<font size=4 style="padding-left:55px;">Cupboard</font>
	<font size=4 style="padding-left:40px;">Air Conditioner</font>
	<font size=4 style="padding-left:45px;">Bedding</font>
	<font size=4 style="padding-left:85px;">Geyser</font>
	<font size=4 style="padding-left:25px;">Attached Bathroom</font>
	<font size=4 style="padding-left:45px;">WiFi</font><br><br>
	<img src="sec.jpg" style="padding-left:45px;">
	<img src="pow.jpg" style="padding-left:45px;">
	<img src="park1.jpg" style="padding-left:45px;">
	<img src="lan1.jpg" style="padding-left:45px;">
	<img src="clean.jpg" style="padding-left:45px;">
	<img src="fan.jpg" style="padding-left:45px;"><br><br>
	<font size=4 style="padding-left:35px;">Security 24/7</font>
	<font size=4 style="padding-left:25px;">Power Backup</font>
	<font size=4 style="padding-left:55px;">Parking</font>
	<font size=4 style="padding-left:80px;">Laundry</font>
	<font size=4 style="padding-left:45px;">House Keeping</font>
	<font size=4 style="padding-left:65px;">Fan</font><br><br>
	<img src="bulb.jpg" style="padding-left:45px;"><br><br>
	<font size=4 style="padding-left:70px;">Lights</font><br><br>
</header>
<hr>
<header>
<h2 style="padding-left:20px;">PG Rules</h2>
	<img src="smoking.jpg" style="padding-left:45px;">
	<img src="drink.jpg" style="padding-left:45px;">
	<img src="visit.jpg" style="padding-left:45px;">
	<img src="boy1.jpg" style="padding-left:45px;">
	<img src="pet3.jpg" style="padding-left:45px;"><br><br>
	<font size=4 style="padding-left:45px;">No Smoking</font>
	<font size=4 style="padding-left:40px;">No Drinking</font>
	<font size=4 style="padding-left:50px;">No Guests</font>
	<font size=4 style="padding-left:65px;">No Boys</font>
	<font size=4 style="padding-left:75px;">No Pets</font>
</header>
<hr>
<header>
<h2 style="padding-left:20px;">Neighbourhood</h2>
<ul>
	<li style="font-size: 20px;">Transit</li>
	<details>
		<summary style="font-size: 15px; padding-left: 25px;">Bus Stations</summary>
		<li style="margin-left:70px;"><label style="margin-left:5px;">New Cinema Stop</label><label style="margin-left:110px;">0.9km | 4mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Post Office Stop</label><label style="margin-left:125px;">1.6km | 5mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Semmandalam Bus Stop</label><label style="margin-left:55px;">3.5km | 9mins</label></li>
	</details><br>
	<details>
		<summary style="font-size: 15px; padding-left: 25px;">Train Stations</summary>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Thirupapuliyur Railway Station</label><label style="margin-left:100px;">00.55km | 3mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Cuddalore Port Junction </label><label style="margin-left:150px;">05.20km |12mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Nellikuppam RailWay Station</label><label style="margin-left:125px;">12.7km |23mins</label></li>
	</details><br>
	<li style="font-size: 20px;">Essentials</li>
	<details>
	<summary style="font-size: 15px; padding-left: 25px;">Hospitals</summary>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Government Head Quarters Hospital</label><label style="margin-left:90px;">2.2km | 7mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Be Well Hopital </label><label style="margin-left:255px;">1.1km |5mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Krishna Hospital </label><label style="margin-left:246px;">2.4km |7mins</label></li>
	</details><br>
	<details>
		<summary style="font-size: 15px; padding-left: 25px;">Schools</summary>
		<li style="margin-left:70px;"><label style="margin-left:5px;">St. Mary's School</label><label style="margin-left:90px;">1.9km | 6mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">St. Anne's School</label><label style="margin-left:90px;">1.3km |5mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">ARLM School</label><label style="margin-left:128px;">3.2km | 10mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Krishnaswamy School</label><label style="margin-left:56px;">4.1km |10mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">CK School</label><label style="margin-left:150px;">2.4km | 7mins</label></li>
	</details><br>
	<details>
		<summary style="font-size: 15px; padding-left: 25px;">Colleges</summary>
		<li style="margin-left:70px;"><label style="margin-left:5px;">St. Joseph's Arts & Science College</label><label style="margin-left:140px;">0.7km | 9mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">CK Engineering College</label><label style="margin-left:235px;">2.6km | 8mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Krishnaswamy Engineering College</label><label style="margin-left:140px;">8.0km | 16mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">K.N.C. Arts & Science College</label><label style="margin-left:183px;">3.1km | 8mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Periyar Arts & Science College</label><label style="margin-left:180px;">4.8km | 12mins</label></li>
	</details><br>
	<details>
		<summary style="font-size: 15px; padding-left: 25px;">ATMs</summary>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Canara Bank ATM</label><label style="margin-left:90px;">0.8km | 4mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">ICICI Bank ATM</label><label style="margin-left:104px;">1.2km | 5mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">IOB Bank ATM</label><label style="margin-left:116px;">0.7km | 4mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">SBI Bank ATM</label><label style="margin-left:117px;">1.2km | 6mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">IDBI Bank ATM</label><label style="margin-left:108px;">0.9km | 4mins</label></li>
	</details><br>
	<li style="font-size: 20px;">Utility</li>
	<details>
		<summary style="font-size: 15px; padding-left: 25px;">Movie Theaters</summary>
		<li style="margin-left:70px;"><label style="margin-left:5px;">New Cinema Theater</label><label style="margin-left:90px;">0.9km | 4mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;"></label>Krishnalaya Theater<label style="margin-left:98px;">0.8km | 4mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;"></label>Velmurugan Theater<label style="margin-left:96px;">0.8km | 4mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;"></label>Kamalam Theater<label style="margin-left:119px;">1.3km | 6mins</label></li>
	</details><br>
	<details>
		<summary style="font-size: 15px; padding-left: 25px;">Super Markets</summary>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Apple Super Market</label><label style="margin-left:150px;">1.4km | 6mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Sri Ganapathy Super Market</label><label style="margin-left:80px;">2.6km | 9mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Reliance SMART</label><label style="margin-left:180px;">1.5km | 6mins</label></li>
		<li style="margin-left:70px;"><label style="margin-left:5px;">Om Super Market</label><label style="margin-left:168px;">2.4km | 9mins</label></li>
	</details>
</ul><br>
</header>
<hr>
<header>
<form action="sign.php" method="POST" style="display:inline-block; width:1200px;">
	<input type="submit" value="Check Availability of Rooms " class="button" style='color:black; font-size:25px; margin-left:320px;'>
</form>
</header>
</body>
</html> 