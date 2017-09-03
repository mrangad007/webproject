<?php
session_start();
include('connect.php');
if(isset($_POST['login_submit']))
{
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM register_item WHERE (username='".$userid."' OR email='".$userid."') AND password='".$password."'";
	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result) == 1)
	{
		while($row= mysqli_fetch_array($result))
		{
			$name = $row['name'];
			$username = $row['username'];
			$email = $row['email'];
		}
		$_SESSION['name'] = $name;
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;

		echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/take_request'; </script>";
	}
	else
	{
		$_SESSION['error'] = "<h5 style='color:red;'>Invalid username/password</h5>";
		echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/login'; </script>";
	}
}
?>