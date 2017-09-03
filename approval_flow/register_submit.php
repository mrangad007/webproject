<?php
session_start();
include('connect.php');
if(isset($_POST['reg_submit']))
{
	$reg_name = $_POST['reg_name'];
	$reg_email = $_POST['reg_email'];
	$reg_username = $_POST['reg_username'];
	$reg_password = $_POST['reg_password'];

	$sql = "insert into register_item(name,email,username,password) values('".$reg_name."','".$reg_email."','".$reg_username."','".$reg_password."')";
	$result = mysqli_query($con,$sql);

	if($result)
	{
		$_SESSION['register'] = "<h4 style='color:green;'>Successfully Registered</h4>";

	echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/register'; </script>";
	}
	else
	{
		echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/login'; </script>";
	}
	
}
?>