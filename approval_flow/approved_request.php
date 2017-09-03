<?php
session_start();
if($_SESSION['name'] == null)
{
	echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/login'; </script>";
}
include('connect.php');
include('header.php');
include('nav.php');
$sql="SELECT * FROM approve_data WHERE status='approved'";
$res = mysqli_query($con,$sql);
?>
<table class="table table-default">
<tr>
	<th>Request Id</th>
	<th>Requested By</th>
	<th>Item Type</th>
	<th>Item Short Desc</th>
</tr>
	<?php
	while($row = mysqli_fetch_assoc($res))
	{	
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['item_type']."</td>";
		echo "<td>".$row['short_item_desc']."</td>";
		echo "</tr>";
	}
	?>
</table>
<?php include('footer.php') ?>