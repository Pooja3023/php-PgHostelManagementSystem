<?php
session_start();
include ('connect.php');
if(isset($_POST['submit']))
{
	$email=$_POST['uname'];
	$pass=$_POST['psw'];
	if($email!=="" && $pass!==""){
	$result=mysqli_query($con,"select * from sign where Username='$email' and Password='$pass'");
	$num =mysqli_fetch_assoc($result);
	$_SESSION['Role']=$Role=$num['Role'];
	$_SESSION['Email']=$user=$num['Email'];
	if($Role == 'Admin'){
	    header('location:admin.php');
		}
		elseif($Role == 'User'){
            header('location:user.php');
		}
		else{
			echo "invalid password";
		}
	}
}
?>