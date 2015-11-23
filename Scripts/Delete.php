
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- Head and meta info -->
<head>
	<link type='text/css' rel='stylesheet' href='../CSS/general.css' />
	<meta charset="utf-8">
	<title>Add video</title>
	<meta name="Delete Video" content="Add video to personal database">
</head>

<body>


<div class='center'>

	<?php
		require("../Templates/header.php"); 
		require("../Templates/sidebar.php"); 
	?>

    <div class = 'right'>
	<form action= "../Scripts/Delete.php" method "post">
        <ul>
          
            <li>
					<?php
					$servername = "localhost";
					$username = "justinvuong";
					$password = "1234";
					$dbname = "justinvuong";
					$MTitle=($_GET['MTitle']); 


					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);

					// Check connection

					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					}

					// sql to Update table 																							add cover (upload image)
					$sql = "DELETE FROM Movie WHERE title = '$MTitle' ";
					;

					if ($conn->query($sql) === TRUE) {
					echo "Successfully Deleted the Movie!";
					} else {
					echo "Error adding to table: " . $conn->error;
					}

					$conn->close();
					?> 
             </li>
          
        </ul>
	<form>
    </div>
</div>
</body>
</html>