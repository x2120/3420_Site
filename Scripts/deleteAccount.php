<?php
$conn = '';
$servername = "localhost";
$username = "justinvuong";
$password = "1234";
$dbname = "justinvuong";

$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
if ($conn != 1)
{
	echo "fuck";
	die($this->errors[] = 'Connect Error (' . $conn->connect_errno);
}
else
{
	echo "boosh";
	$username = $_SESSION['client_username'];
	$sql = "DELETE FROM User WHERE name = '$username'";
	$result = mysqli_query($sql);
	$_SESSION = array();
    session_destroy();	
}
?>

<html>
<head>
	<meta http-equiv="refresh" content="0; url=http://frigg.trentu.ca/~mitchellmiller/3420_site/Pages/index.php" />
</head>
</html>