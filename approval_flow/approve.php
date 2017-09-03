<?php
session_start();
include('connect.php');
$id = $_GET['id'];

if($_SESSION['email'] == 'mg1@gmail.com')
{
	$to = 'mg2@gmail.com';
}
if($_SESSION['email'] == 'mg2@gmail.com')
{
	$to = 'mg3@gmail.com';
}
if($_SESSION['email'] == 'mg3@gmail.com')
{
	$to = 'mg4@gmail.com';
}
if($_SESSION['email'] == 'mg4@gmail.com')
{
	$to = 'mg5@gmail.com';
}

$sql = "UPDATE messages_item SET status='1' WHERE id='".$id."'";
$sql2 = "SELECT * FROM messages_item WHERE id='".$id."'";
$res = mysqli_query($con,$sql);
$res2 = mysqli_query($con,$sql2);
while ($row=mysqli_fetch_array($res2)) 
{
	$rnt = $row['rnt'];
	$mnt = $row['mnt'];
}
$sql3 = "insert into messages_item(snt,rnt,mnt) values('".$rnt."','".$to."','".$mnt."')";
mysqli_query($con,$sql3);

$sql4 ="SELECT * FROM approve_data INNER JOIN messages_item 
ON approve_data.short_item_desc = messages_item.mnt 
where messages_item.status='1' and messages_item.id='".$id."'
AND messages_item.rnt = 'mg4@gmail.com'";
$res3 = mysqli_query($con,$sql4);
$row_st = mysqli_num_rows($res3);

if($row_st ==1)
{
$sql5 = "UPDATE approve_data SET status='approved' WHERE short_item_desc='".$mnt."'";
mysqli_query($con,$sql5);
}

echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/approve_view'; </script>";
?>