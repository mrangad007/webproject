<?php
include('connect.php');
$id = $_GET['id'];
$sql = "DELETE approve_data FROM approve_data WHERE id='".$id."'";
$res = mysqli_query($con,$sql);

echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/view_requests'; </script>";
?>