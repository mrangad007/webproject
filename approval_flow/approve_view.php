<?php
session_start();
if($_SESSION['name'] == null)
{
	echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/login'; </script>";
}
include('connect.php');
include('header.php');
include('nav.php');
$sql="SELECT * FROM messages_item WHERE rnt='".$_SESSION['email']."' AND 
status='0'";
$res = mysqli_query($con,$sql);
?>
<table class="table table-default">
<tr>
	<th>Request Id</th>
	<th>Requested By</th>
	<th>Item Short Desc</th>
	<th>Approve</th>
	<th>Reject</th>
</tr>
	<?php
	while($row = mysqli_fetch_assoc($res))
	{	
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['snt']."</td>";
		echo "<td>".$row['mnt']."</td>";
		echo "<td><a href='approve?id=".$row['id']."'>approve</a></td>";
		echo "<td><a href='reject?id=".$row['id']."'>reject</a></td>";
		echo "</tr>";
	}
	?>
</table>
<?php include('footer.php') ?>