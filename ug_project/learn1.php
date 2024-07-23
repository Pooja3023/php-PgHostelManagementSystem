<!DOCTYPE html>
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


 .vertical {
      border-left: 1.5px solid blue;
      height: 70px;
      position: absolute;
      left: 50%;
      color: black;
    }

nav ul {
   list-style: none;
   display: flex;
   justify-content: space-around;
}

nav ul li {
   display: inline-block;
   margin-right: 1em;
}

nav ul li a {
   text-decoration: none;
   color: #333;
}


* {box-sizing: border-box;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  height: 300px;
  width: 300px;
  position: relative;
  right: 60px;
  margin: auto;
  
}


/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
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

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

.pad{
padding-left: 25px;
}

.big{
font-size: 25px;
}

button{
background-color: #ff9a9a;
height:30px;
width:100px;
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

.button:hover {
    opacity: 0.8;
}

</style>
</head>
<body>

<button onclick="history.back()">Go Back</button>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
  <img src="thiru.jpeg" style="width:150%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="Exterior2.jpeg" style="width:150%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img src="com1.jpeg" style="width:150%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="bed.jpeg" style="width:150%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img src="com2.jpeg" style="width:150%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
  <img src="com3.jpeg" style="width:150%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img src="kit.jpeg" style="width:150%">
  
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<hr>
<header>
<h2>&nbsp&nbsp&nbspRoom Details</h2>
   <nav>
      <ul>
         <li><b><font size=4>Private Room</font></b></li>
        
         <li><b><font size=4>Double Sharing</font></b></li>
         
         <li><b><font size=4>Triple Sharing</font></b></li>
         
   
      </ul>
   </nav>

<nav>
<ul>
		<li>starts from 10,500</li>
		<li>starts from 7,500</li>
		<li>starts from 4,500</li>
</ul>
</nav>
</header>
<hr>
<header>
<h2>&nbsp&nbsp&nbspFood</h2>
<p style="padding: 20px;"><font size=4>The spacious and airy canteen caters. Nutritious food is served for breakfast, lunch, high tea and supper. Both Veg and Non-Veg food are available in our PG.
</font></p> 
</header>
<hr>
<header>
<h2>&nbsp&nbsp&nbspAmenities</h2>
<div class="pad">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="cup1.jpg" height=100 width=100>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="ac.jpg" height=100 width=100>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="bed1.jpg" height=100 width=100>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<img src="heater1.jpg" height=100 width=100>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="bath1.jpg" height=100 width=100>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="wifi.jpg" height=100 width=100><br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCupboard
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAir Conditioner
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBedding
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGeyser
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAttached Bathroom
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWiFi<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="sec.jpg" height=100 width=100>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="pow.jpg" height=100 width=100>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="park1.jpg" height=100 width=100>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="lan1.jpg" height=100 width=100>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="clean.jpg" height=100 width=100>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="fan.jpg" height=100 width=100><br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSecurity 24/7
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPower Backup
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspParking
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLaundry
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHouse Keeping
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFan<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="bulb.jpg" height=100 width=100><br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLights<br><br>
		</div>

</header>
<hr>
<header>
<h2>&nbsp&nbsp&nbspPG Rules</h2>
<div class="pad">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="smoking.jpg" height=100 width=100>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="drink.jpg" height=100 width=100>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="visit.jpg" height=100 width=100>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<img src="boy1.jpg" height=100 width=100>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="pet3.jpg" height=100 width=100><br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo Smoking
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo Drinking
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo Guests
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo Boys
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo Pets
		</div>
</header>
<hr>
<header>
<h2>&nbsp&nbsp&nbspNeighbourhood</h2>
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

</details>
<br>
<li style="font-size: 20px;">Essentials</li>
<details>
<summary style="font-size: 15px; padding-left: 25px;">Hospitals</summary>
<li style="margin-left:70px;"><label style="margin-left:5px;">Government Head Quarters Hospital</label><label style="margin-left:90px;">2.2km | 7mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">Be Well Hopital </label><label style="margin-left:255px;">1.1km |5mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">Krishna Hospital </label><label style="margin-left:246px;">2.4km |7mins</label></li>
</details>
<br>
<details>
<summary style="font-size: 15px; padding-left: 25px;">Schools</summary>
<li style="margin-left:70px;"><label style="margin-left:5px;">St. Mary's School</label><label style="margin-left:90px;">1.9km | 6mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">St. Anne's School</label><label style="margin-left:90px;">1.3km |5mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">ARLM School</label><label style="margin-left:128px;">3.2km | 10mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">Krishnaswamy School</label><label style="margin-left:56px;">4.1km |10mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">CK School</label><label style="margin-left:150px;">2.4km | 7mins</label></li>
</details>
<br>
<details>
<summary style="font-size: 15px; padding-left: 25px;">Colleges</summary>
<li style="margin-left:70px;"><label style="margin-left:5px;">St. Joseph's Arts & Science College</label><label style="margin-left:140px;">0.7km | 9mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">CK Engineering College</label><label style="margin-left:235px;">2.6km | 8mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">Krishnaswamy Engineering College</label><label style="margin-left:140px;">8.0km | 16mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">K.N.C. Arts & Science College</label><label style="margin-left:183px;">3.1km | 8mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">Periyar Arts & Science College</label><label style="margin-left:180px;">4.8km | 12mins</label></li>
</details>
<br>
<details>
<summary style="font-size: 15px; padding-left: 25px;">ATMs</summary>
<li style="margin-left:70px;"><label style="margin-left:5px;">Canara Bank ATM</label><label style="margin-left:90px;">0.8km | 4mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">ICICI Bank ATM</label><label style="margin-left:104px;">1.2km | 5mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">IOB Bank ATM</label><label style="margin-left:116px;">0.7km | 4mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">SBI Bank ATM</label><label style="margin-left:117px;">1.2km | 6mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">IDBI Bank ATM</label><label style="margin-left:108px;">0.9km | 4mins</label></li>
</details>
<br>
<li style="font-size: 20px;">Utility</li>
<details>
<summary style="font-size: 15px; padding-left: 25px;">Movie Theaters</summary>
<li style="margin-left:70px;"><label style="margin-left:5px;">New Cinema Theater</label><label style="margin-left:90px;">0.9km | 4mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;"></label>Krishnalaya Theater<label style="margin-left:98px;">0.8km | 4mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;"></label>Velmurugan Theater<label style="margin-left:96px;">0.8km | 4mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;"></label>Kamalam Theater<label style="margin-left:119px;">1.3km | 6mins</label></li>
</details>
<br>
<details>
<summary style="font-size: 15px; padding-left: 25px;">Super Markets</summary>
<li style="margin-left:70px;"><label style="margin-left:5px;">Apple Super Market</label><label style="margin-left:150px;">1.4km | 6mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">Sri Ganapathy Super Market</label><label style="margin-left:80px;">2.6km | 9mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">Reliance SMART</label><label style="margin-left:180px;">1.5km | 6mins</label></li>
<li style="margin-left:70px;"><label style="margin-left:5px;">Om Super Market</label><label style="margin-left:168px;">2.4km | 9mins</label></li>
</details>
</ul>
<br>
</header>
<hr>
<header>
<form action="sign.php" method="POST" style="display:inline-block; width:1200px;">
<input type="submit" value="Check Availability of Rooms " class="button" style='color:black; font-size:25px; margin-left:320px;'></form>
</header>
</body>
</html> 
