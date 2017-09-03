<?php
session_start();
if(isset($_POST['userid']))
{
	if($_POST['userid'] == "")
	{
		$_SESSION['userid_msg']="userid is empty";
		$page = "base_login.php";
	}
}
if(isset($_POST['pass']))
{
	if($_POST['pass'] == "")
	{
		$_SESSION['pass_msg']="password is empty";
		$page = "base_login.php";
	}
}
header("Location: $page");
?>