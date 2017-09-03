<?php
if($this->session->userdata('data_insert_msg') != null)
{
    echo "<div class='alert alert-success fade in message_sent'>";
    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
    echo "<strong>";
    echo $this->session->userdata('data_insert_msg');
    $this->session->unset_userdata('data_insert_msg');
    echo "</strong>";
    echo "</div>";
}
if($this->session->userdata('msg') != null)
{
    echo "<div class='alert alert-success fade in register_msg'>";
    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
    echo "<strong>";
    echo $this->session->userdata('msg');
    $this->session->unset_userdata('msg');
    echo "</strong>";
    echo "</div>";
}
if($this->session->userdata('wcred') != null)
{
    echo "<div class='alert alert-danger fade in wcred_msg'>";
    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
    echo "<strong>";
    echo $this->session->userdata('wcred');
    $this->session->unset_userdata('wcred');
    echo "</strong>";
    echo "</div>";
}
if($this->session->userdata('post_msg') != null)
{
    echo "<div class='alert alert-success fade in post_msg_top'>";
    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
    echo "<strong>";
    echo $this->session->userdata('post_msg');
    $this->session->unset_userdata('post_msg');
    echo "</strong>";
    echo "</div>";
}
if($this->session->userdata('like_success') != null)
{
    echo "<div class='alert alert-success fade in like_msg'>";
    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
    echo "<strong>";
    echo $this->session->userdata('like_success');
    $this->session->unset_userdata('like_success');
    echo "</strong>";
    echo "</div>";
}
if($this->session->userdata('dike_success') != null)
{
    echo "<div class='alert alert-success fade in dike_msg'>";
    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
    echo "<strong>";
    echo $this->session->userdata('dike_success');
    $this->session->unset_userdata('dike_success');
    echo "</strong>";
    echo "</div>";
}
?>
<script type="text/javascript">
window.setTimeout(function(){
$('.message_sent').fadeTo(500,0).slideUp(500,function(){
    $(this).remove();
});
},5000);
window.setTimeout(function(){
$('.register_msg').fadeTo(500,0).slideUp(500,function(){
    $(this).remove();
});
},5000);
window.setTimeout(function(){
$('.wcred_msg').fadeTo(500,0).slideUp(500,function(){
$(this).remove();
});
},5000);
window.setTimeout(function(){
$('.post_msg_top').fadeTo(500,0).slideUp(500,function(){
$(this).remove();
});
},5000);
window.setTimeout(function(){
$('.like_msg').fadeTo(500,0).slideUp(500,function(){
$(this).remove();
});
},5000);
window.setTimeout(function(){
$('.dike_msg').fadeTo(500,0).slideUp(500,function(){
$(this).remove();
});
},5000);
</script>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#9CC24B">
    <link rel="shortcut icon" type="image/jpg" href="<?php echo base_url(); ?>assets/img/logo_short.jpg">

    <title>Ceezak | Feeder</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/dev-profile.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .thumbnail 
    {
    border: 0 none;
    box-shadow: none;
    }
    </style>

</head>
<body>
<?php
if($this->session->userdata('error') != null)
{
echo "<div class='alert alert-danger fade in error_msg'>";
echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
echo "<strong>";
echo $this->session->userdata('error');
$this->session->unset_userdata('error');
echo "</strong>";
echo "</div>";
}
?>
<script type="text/javascript">
window.setTimeout(function(){
$('.error_msg').fadeTo(500,0).slideUp(500,function(){
$(this).remove();
});
},5000);
</script>
<div class="container-fluid">
<ul class="pager">
  <li class="previous"><a href="<?php echo base_url(); ?>" style="background-color:#9bc14a;color:#fff;">Feeder</a></li>
  <li class="next"><a href="<?php echo base_url(); ?>" style="background-color:#9bc14a;color:#fff;">the largest community</a></li>
</ul>
</div>
<nav class="navbar navbar-default" style="background-color:#5bc0de;">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
    <?php 
    if($this->session->userdata('user') != null)
        {
        echo "<li>";
        echo "<a href='#' style='background-color:#5bc0de;color:green;'>";
        echo "<span class='glyphicon glyphicon-user'></span>&nbsp;";
        echo "Welcome ".$this->session->userdata('user');
        echo "</a>";
        echo "<li>";
        }
    ?>
      <li><a style="color:#fff;" href="<?php echo base_url(); ?>">Home</a></li>
      <?php
        if($this->session->userdata('user') == null)
        {
            echo "<li class='dropdown'>";
            echo "<a style='background-color:#5bc0de;color:#fff;' class='dropdown-toggle' data-toggle='dropdown' href='#'>Register<span class='caret'></span></a>";
            echo "<ul class='dropdown-menu' style='padding: 20px;width:230px;'>";
            echo "<form action='register' method='post'>";
            echo "
            <li>
            <div class=form-group>
            <label for='name'>Name</label>&nbsp;<input class=form-control type='text' name='name' id='name' required>
            </div>
            </li>";
            echo "
            <li>
            <div class=form-group>
            <label for='email'>Email</label>&nbsp;<input class=form-control type='email' name='email' id='email' required>
            </div>
            </li>";
            echo "<li>
            <div class=form-group>
            <label for='username'>Username</label>&nbsp;<input class=form-control type='text' name='username' id='username' required>
            </div>
            </li>";
            echo "<li>
            <div class=form-group>
            <label for='password'>Password</label>&nbsp;<input class=form-control type='password' name='password' id='password' required>
            </div>
            </li>";
            echo "<li>&nbsp;</li>";
            echo "<li><input type='submit' name='register' class='btn btn-primary' value='Register' data-toggle='modal' data-target='#myModal'></li>";
            echo "</form>";
            echo "</ul>";
            echo "</li>";
        }
      ?>
      <?php
      if($this->session->userdata('user') == null)
      {
        echo "<li class='dropdown'>";
        echo "<a style='background-color:#5bc0de;color:#fff;' class='dropdown-toggle' data-toggle='dropdown' href='#'>Login<span class='caret'></span></a>";
        echo "<ul class='dropdown-menu' style='padding: 20px;width:210px;'>";
        echo "<form action='login/verify' method='post'>";
        echo "
        <li>
        <div class=form-group>
        <label for='userid'>Username</label>&nbsp;<input class=form-control type='text' name='userid' id='userid' required>
        </div>
        </li>";
        echo "<li>
        <div class=form-group>
        <label for='pwd'>Password</label>&nbsp;<input class=form-control type='password' name='pwd' id='pwd' required>
        </div>
        </li>";
        echo "<li>
        <div class='checkbox'>
        <label>
        <input type='checkbox' name='checkbox'>Remember Me
        </label>
        </div>
        </li>";
        echo "<li><a href='#'>Forgot Password?</a></li>";
        echo "<li>&nbsp;</li>";
        echo "<li><input type='submit' class='btn btn-success' value='Login'></li>";
        echo "</form>";
        echo "</ul>";
        echo "</li>";

        echo "<li>";
        echo "<a href='http://www.ceezak.com/new_home/' style='background-color:#5bc0de;color:#fff;'><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp;&nbsp;Ceezak Software Shop</a>";
        echo "</li>";
        }
      ?>