<div class="container">
<div class="row">
<div class="col-md-8">
<form action="Register_control_msg" method="post">
<div class=form-group>
	<label for="your_name">From</label>&nbsp;
	<input class="form-control" type="text" id="your_name" name="snt" value="<?php echo $this->session->userdata('email'); ?>" readonly><br/>
</div>
<div class=form-group>
<label>To</label>&nbsp;
<select class="form-control" name="rnt">
<?php
foreach($msg_send as $row)
{
echo "<option>";
echo $row['email'];
echo "</option>";
}
?>
</select>
</div><br/>
<div class=form-group>
<label for="your_message">Message</label><br/>
<textarea class="form-control" rows="10" cols="30" id="your_message" name="mnt"></textarea><br/>
</div>
<button class="btn btn-primary" type="submit" name="send_message_submit">Send <span class='glyphicon glyphicon-send'></button>
</form>
</div>
</div>
</div>
</div>
<div class="col-md-2"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- right_bar_ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="3992246522855385"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
</div>
</div>