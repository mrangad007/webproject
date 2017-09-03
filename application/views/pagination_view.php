<?php
foreach($pg_res as $data)
{
	echo $data->post_title." = ".$data->post_content."<br/>";
}
?>
<p><?php echo $links ?></p>