<?php
if($this->session->userdata('user') != null)
{
echo "<table class='table table-default'>";
echo "<tr>";
echo "<th>Unique Id</th>";
echo "<th>Sent by</th>";
echo "<th>Message</th>";
echo "<td><a class='btn btn-success' href='".base_url()."message_display'>BACK</a></td>";
echo "</tr>";
foreach($message_rd_more as $col_readmore)
{	
	echo "<tr>";
		echo "<td>".$col_readmore['id']."</td>";
		echo "<td>".$col_readmore['snt']."</td>";
		echo "<td>".$col_readmore['mnt']."</td>";
	echo "</tr>";
}
echo "</table>";
}
?>