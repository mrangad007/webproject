<?php
session_start();
include('header.php');
?>
<body>
<div class="container">
<br/><br/>
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-body">
<form action="http://www.ceezak.com/approval_flow/login_submit.php" method="POST">
<br/>
<div class=form-group>
<label>Username</label>
<input class="form-control" type="text" name="userid">
</div>
<div class=form-group>
<label>Password</label>
<input class="form-control" type="password" name="password">
</div>
<div class=form-group>
<?php
if($_SESSION['error'] !=null)
{
	echo $_SESSION['error'];
	unset($_SESSION['error']);
}
?>
</div>
<label>Remember Me</label>
<input type="checkbox" name="ckhbox">
</div>
<div class="text-center">
<input type="submit" name="login_submit" value="login" class="btn btn-primary"><br/><br/>
</div>
</form>
&nbsp;&nbsp;&nbsp;<a href="http://www.ceezak.com/approval_flow/register.php" style="font-size: 18px;">register</a>
<br/><br/>
</div>
</div>
</div>
</body>
</html>