<?php
require_once "../Scripts/login_script.php";
$login = new login_script();

echo "Woot";
if ($login->login_check() == true)
{
	echo "Double woot";
	$login->logout();
}
?>
<html>
<head>
	<meta http-equiv="refresh" content="0; url=http://frigg.trentu.ca/~mitchellmiller/3420_site/Pages/index.php" />
</head>
</html>