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
	$_SESSION['Username']=$username=$num['Username'];
	$_SESSION['Password']=$pass=$num['Password'];
	if($Role == 'Admin'){
	    header('location:poo1.php');
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
