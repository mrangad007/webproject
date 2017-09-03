<?php
if($this->session->userdata('user') != null)
{
echo "<li>
    <a href='your_friends' style='background-color:#5bc0de;color:#fff;'>
        <span class='glyphicon glyphicon-transfer'></span> Your Friends
    </a>";
echo "</li>";
}
?>