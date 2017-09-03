<?php
include('connect.php');
$id = $_GET['id'];

$sql = "UPDATE messages_item SET status='2' WHERE id='".$id."'";
mysqli_query($con,$sql);

$sql2 = "SELECT * FROM messages_item WHERE id='".$id."'";
$res2 = mysqli_query($con,$sql2);

while($row=mysqli_fetch_array($res2))
{
	$status = $row['status'];
	$mnt = $row['mnt'];
}

$sql3 = "SELECT * FROM approve_data INNER JOIN messages_item 
ON approve_data.short_item_desc = messages_item.mnt 
where messages_item.status='2' and messages_item.id='".$id."'";
$res3 = mysqli_query($con,$sql3);
$row_st = mysqli_num_rows($res3);

if($row_st ==1)
{
$sql4 = "UPDATE approve_data SET status='rejected' WHERE short_item_desc='".$mnt."'";
mysqli_query($con,$sql4);
}

echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/approve_view'; </script>";
?>