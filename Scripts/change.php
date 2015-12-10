<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- Head and meta info -->
<head>
	<link type='text/css' rel='stylesheet' href='../CSS/general.css' />
	<meta charset="utf-8">
	<title>Add video</title>
	<meta name="Edit Video" content="Add video to personal database">
</head>

<body>


<div class='center'>

	<?php
		require("../Templates/header.php"); 
		require("../Templates/sidebar.php"); 
	?>

    <div class = 'right'>
	<form action= "../Scripts/Edit.php" method "post">
        <ul>         
            <p>
				<?php
				$servername = "localhost";
				$username = "justinvuong";
				$password = "1234";
				$dbname = "justinvuong";
				$MTitle=($_GET['MTitle']); 
				$MRate=($_GET['Rating']);  
				$Genre=($_GET['Genre']); 
				$SRate=($_GET['SRating']); 
				$Runtime=($_GET['Runtime']); 
				$TRelease=($_GET['TRelease']); 
				$DRelease=($_GET['DRelease']); 
				$Actors=($_GET['Actors']); 
				$Save=($_GET['AddVideo']); // to upload image  
				$Studio=($_GET['Studio']); 
				$Plot=($_GET['Plot']); 
				$Storage=($_GET['Storage']);

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);

				// Check connection

				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}

				// sql to Update table 																							add cover (upload image)
				$sql = "UPDATE Movie 
				SET genre='$Genre', actors='$Actors' , MPAA='$MRate', relType='$Storage', stars='$SRate', runtime='$Runtime', theatRelease='$TRelease', homeRelease='$DRelease', studio='$Studio', plot='$Plot' 
				WHERE title='$MTitle';
				"//add cover
				;

				if ($conn->query($sql) === TRUE) {
				echo "Successfully Updated the table!";
				} else {
				echo "Error adding to table: " . $conn->error;
				}

				$conn->close();
				?> 
            </p>
        </ul>
	<form>
    </div>
</div>
</body>
</html>

