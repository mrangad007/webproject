<div class="container">
<?php
if($this->session->userdata('user') != null)
{
echo "<table class='table table-default'>";
echo "<tr>";
echo "<th>Unique Id</th>";
echo "<th>Email</th>";
echo "<th>Your Friends</th>";
echo "<td><a class='btn btn-success' href='".base_url()."message_display'>Messages By Friends</a></td>";
echo "</tr>";
foreach($your_friends as $row)
{	
	echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['name']."</td>";
	echo "</tr>";
}
echo "</table>";
}
?>
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