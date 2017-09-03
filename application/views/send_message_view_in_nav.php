<?php
if($this->session->userdata('user') != null)
{
echo "<li>
    <a href='send_messages' style='background-color:#5bc0de;color:#fff;'>
        <span class='glyphicon glyphicon-transfer'></span> Send Message
    </a>";
echo "</li>";
}
?>