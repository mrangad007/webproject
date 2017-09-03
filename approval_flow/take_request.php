<?php
session_start();
if($_SESSION['name'] == null)
{
	echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/login'; </script>";
}
include('connect.php');
include('header.php');
include('nav.php');
?>
<table class="table table-default">
<div class="panel panel-default">
<div class="panel-body">
<form action="http://www.ceezak.com/approval_flow/process.php" method="POST">
<br/>
<div class=form-group>
<label>Requested By</label>
<input class="form-control" type="text" name="name" value="<?php
if(isset($_SESSION['email']) != null)
{
	echo $_SESSION['email'];
}
?>" readonly>
</div>
<div class=form-group>
<label>Item Type</label>
<select class="form-control" name="item_type">
<option value="">Select the Category</option>
<option value="Infra supply">Infra supply</option>
<option value="Infra services">Infra services</option>
</select>
</div>
<div class=form-group>
<label>Item Description</label>
<textarea class="form-control" name="shortdesc" rows="10"></textarea>
</div>
<input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
</body>
</html>