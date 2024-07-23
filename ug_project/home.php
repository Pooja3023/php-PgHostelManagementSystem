<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
	box-sizing: border-box; 
}
.zoom {
	float:left;
	padding: 10px;
	background-color: #FF9A9A;
	width: 300px;
	height: 400px;
	margin-left: 150px;
	border-radius: 20px;
}
.hd {
	padding: 10px;
	font-size: 40px;
	background-size: 100%;
}
.container {
	display: inline;
	align-items: center;
	justify-content: center;
	position: absolute;
	left: auto;
}
button{
	background-color: #ff9a9a;
	height:30px;
	width:100px;
}
</style>
</head>
<body bgcolor=#fff1ed>
<div class="hd">
	<button onclick="history.back()">Go Back</button>
	<h1><b>Places</b></h1>
</div>
<div class="zoom">
	<div class="container">
		<img src="thiru.jpeg" height=180 width=280><br><br>
		<div style="padding-left:20px;">
			<font size=4><b>Saaija in Thirupathiripuliyur</font></b>
			<p><font size=4>No.23, Subbarayalu Nagar Road,<br> Thirupathiripuliyur, Cuddalore,
			<br> Tamil Nadu 607 002.<br><br>View&nbsp <a href="view1.php">more deatils</a></font><br><br></p>
		</div>
    </div>
</div>
<div class="zoom">
	<div class="container">
		<img src="ot.jpeg" height=180 width=280><br><br>
		<div style="padding-left:20px;">
			<font size=5><b>Saaija in Old Town</font></b>
			<p><font size=4>No.79, Srangu Street,<br> Cuddalore Old Town,<br> Tamil Nadu 607003.
			<br><br>View&nbsp <a href="view2.php">more deatils</a></font><br><br></p>
		</div>
    </div>
</div>
<div class="zoom">
	<div class="container">
		<img src="manja.jpg" height=180 width=280><br><br>
		<div style="padding-left:20px;">
			<font size=5><b>Saaija in Manjakuppam</font></b>
			<p><font size=4>No.157, Nethaji Rd,<br> Allpettai, Manjakuppam,<br> Cuddalore, Tamil Nadu 607001.
			<br><br>View&nbsp <a href="view3.php">more deatils</a></font><br><br></p>
		</div>
    </div>
</div>
</body>
</html>