<?php
if($this->session->userdata('user') != null)
{
echo "<table class='table table-default'>";
echo "<tr>";
echo "<th>Unique Id</th>";
echo "<th>Sent by</th>";
echo "<th>Message</th>";
echo "<th></th>";
echo "</tr>";
foreach($message_see as $col_disc)
{	
	echo "<tr>";
		echo "<td>".$col_disc['id']."</td>";
		echo "<td>".$col_disc['snt']."</td>";
		echo "<td>".substr($col_disc['mnt'],0,100)."</td>";
		echo "<td><a href='message_display/message_read_more?id=".$col_disc['id']."'>view</a></td>";
		echo "<td><a href='message_display/message_del?id=".$col_disc['id']."'>delete</a></td>";
	echo "</tr>";
}
echo "</table>";
}
?>