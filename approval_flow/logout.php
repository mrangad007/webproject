<?php
session_start();
session_destroy();
echo "<script type='text/javascript'> document.location = 'http://www.ceezak.com/approval_flow/login'; </script>";
?>