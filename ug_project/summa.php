<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if ($_POST["plc"] === "Manjakuppam" && $_POST["acc"] === "Private Room") {
    echo "room";
  }
}
?>

<html>
<body>
<form method="POST">
  <label for="loc"><b>Locality</b></label>
					<select id="plc" name="plc" style="width: 410px; height: 32px;" required>
						<option value="">Choose Here</option>
						<option value="Thirupathiripuliyur">Thirupathiripuliyur</option>
						<option value="Old Town">Old Town</option>
						<option value="Manjakuppam">Manjakuppam</option>
					</select><br><br>
					<label for="loc"><b>Accommodation Type</b></label>
					<select id="acc" name="acc" style="width: 410px; height: 32px;" required>
						<option value="">Choose Here</option>
						<option value="Private Room">Private Room</option>
						<option value="Double Sharing">Double Sharing</option>
						<option value="Triple Sharing">Triple Sharing</option>
					</select><br><br>   
  
  <input type="submit" value="Submit">
</form>
</body>
</html>
