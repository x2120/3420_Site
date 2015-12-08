<?php
// mysql connection
$conn = '';
$servername = "localhost";
$username = "justinvuong";
$password = "1234";
$dbname = "justinvuong";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// proceeding as normal
else
{
	// deletes entry from user database
	echo "boosh";
	$username = $_SESSION['client_username'];
	$sql = "DELETE FROM User WHERE name = '$username'";
	$result = mysql_query($sql);
    
    // destroys session
    session_destroy();
}
?>

<!-- redirects to index -->
<html>
<head>
	<meta http-equiv="refresh" content="0; url=http://frigg.trentu.ca/~mitchellmiller/3420_site/Pages/index.php" />
</head>
</html>