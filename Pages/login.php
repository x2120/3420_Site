<?php
// gets login class, instantiates
require_once "../Scripts/login_script.php";
$login = new login_script();

// determines what actions and which page to show based on session status
if ($login->login_check() == true)
    { include("index.php"); } 
else
    { include("not_logged.php"); }
?>