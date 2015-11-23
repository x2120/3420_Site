<?php
// instantiates login_script
require_once "../Scripts/login_script.php";
$login = new login_script();

// fires logout if session is there
echo "Woot";
if ($login->login_check() == true)
{
	echo "Double woot";
	$login->logout();
}
?>

<!-- redirects to index -->
<html>
<head>
	<meta http-equiv="refresh" content="0; url=http://frigg.trentu.ca/~mitchellmiller/3420_site/Pages/index.php" />
</head>
</html>