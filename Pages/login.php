<?php
require_once "../Scripts/login_script.php";
$login = new Login();

if ($login->login_check() == true)
    { include("logged_in.php"); } 
else
    { include("not_logged.php"); }
?>