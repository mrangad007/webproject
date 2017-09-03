<?php
if($this->session->userdata('user') != null)
{
echo "<li class='dropdown'>
    <a href='".base_url()."message_display' style='background-color:#5bc0de;color:#fff;'>
        <span class='glyphicon glyphicon-envelope'></span> Messages <span class='badge badge-grey'>".$message_status."</span></a>";
echo "</li>";
}
?>