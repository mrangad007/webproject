<body>
<br/><br/>
<div class="container">
<?php
include('connect.php');
if(isset($_SESSION['name']) != null)
{
	echo "Welcome ".$_SESSION['name'];
}
$sql = "SELECT * FROM messages_item WHERE rnt='".$_SESSION['email']."' and status='0'";
$result = mysqli_query($con,$sql);
$row_cnt =mysqli_num_rows($result);
?>
&nbsp;&nbsp;<a href="http://www.ceezak.com/approval_flow/take_request.php" class="btn btn-primary">Home</a>
&nbsp;&nbsp;<a href="http://www.ceezak.com/approval_flow/view_requests.php" class="btn btn-primary">Track Request</a>
&nbsp;&nbsp;<a href="http://www.ceezak.com/approval_flow/approve_view.php" class="btn btn-primary">Approve Request <span class="badge"><?php echo $row_cnt ?></span></a>
&nbsp;&nbsp;<a href="http://www.ceezak.com/approval_flow/approved_request.php" class="btn btn-success">Approved Request</a>
&nbsp;&nbsp;<a href="http://www.ceezak.com/approval_flow/rejected_request.php" class="btn btn-warning">Rejected Request</a>
&nbsp;&nbsp;<a href="http://www.ceezak.com/approval_flow/logout.php" class="btn btn-danger">Logout</a>
<br/><br/><br/>
