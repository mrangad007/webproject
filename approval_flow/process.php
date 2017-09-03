<?php
include('connect.php');
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$to = 'mg1@gmail.com';
	$item_type = $_POST['item_type'];
	$shortdesc = $_POST['shortdesc'];

	
	$sql = "insert into approve_data(name,item_type,short_item_desc) values('".$name."','".$item_type."','".$shortdesc."')";
	$sql2 = "insert into messages_item(snt,rnt,mnt) values('".$name."','".$to."','".$shortdesc."')";
	$result1 = mysqli_query($con,$sql);
	$result2 = mysqli_query($con,$sql2);

}
echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/view_requests'; </script>";
?>