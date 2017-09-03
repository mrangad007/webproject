<?php
session_start();
include('header.php');
?>
<body>
<br/><br/><br/>
<div class="container">
<div class="col-md-4"></div>
<div class="col-md-6">
<a href="http://www.ceezak.com/approval_flow/login.php" class="btn btn-primary">Back</a>
<br/><br/>
<table class="table table-default">
<div class="panel panel-default">
<div class="panel-body">
<form action="http://www.ceezak.com/approval_flow/register_submit.php" method="POST">
<br/>
<div class=form-group>
<label>Name</label>
<input class="form-control" type="text" name="reg_name">
</div>
<div class=form-group>
<label>Email</label>
<input class="form-control" type="email" name="reg_email">
</div>
<div class=form-group>
<label>Username</label>
<input class="form-control" type="text" name="reg_username">
</div>
<div class=form-group>
<label>password</label>
<input class="form-control" type="password" name="reg_password">
</div>
<div class="text-center">
<input type="submit" name="reg_submit" value="register" class="btn btn-primary">
</div>
</form>
<div class=form-group>
<?php
if(isset($_SESSION['register']) != null)
{
	echo $_SESSION['register'];
	unset($_SESSION['register']);
}
?>
</div>
</div>
</div>
</div>
</div>
</body>
</html>