<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- Head and meta info -->
<head>
	<link type='text/css' rel='stylesheet' href='../CSS/general.css' />
	<meta charset="utf-8">
	<title>Add video</title>
	<meta name="Add video" content="Add video to personal database">
</head>

<body>


<div class='center'>

	<?php
		require("../Templates/header.php"); 
		require("../Templates/sidebar.php"); 
	?>

    <div class = 'right'>
	<form action="../Scripts/upload.php" method="post" enctype="multipart/form-data">
        <ul>
			<li>
			<?php
<<<<<<< HEAD
			//values from addVid.php
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
=======
$servername = "localhost";
$username = "justinvuong";
$password = "1234";
$dbname = "justinvuong";
$MTitle=($_GET['MTitle']); 
$MRate=($_GET['Rating']);  
$Genre=($_GET['Genre']); 
$SRate=($_GET['SRating']); 
$Year=($_GET['Year']); 
$Runtime=($_GET['Runtime']); 
$TRelease=($_GET['TRelease']); 
$DRelease=($_GET['DRelease']); 
$Actors=($_GET['Actors']); 
$Save=($_GET['AddVideo']); // to upload image  
$Studio=($_GET['Studio']); 
$Plot=($_GET['Plot']); 
$Storage=($_GET['Storage']);
>>>>>>> parent of b198e42... What we could get done

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

<<<<<<< HEAD
				// sql to insert into table 																							add cover (upload image)
				$sql = "INSERT INTO Movie (	title,genre,actors,MPAA,relType,stars,runtime,theatRelease,homeRelease,studio,plot)
				VALUES ('$MTitle','$Genre','$Actors','$MRate','$Storage','$SRate','$Runtime','$TRelease','$DRelease','$Studio',	'$Plot') "//add cover;
=======
>>>>>>> parent of b198e42... What we could get done




// sql to insert into table 																							add cover (upload image)
$sql = "INSERT INTO Movie (	title, 		genre, 		actors, 	MPAA, 		relType, 		stars, 		runtime, 		theatRelease, 		homeRelease, 	studio, 	plot)
VALUES (					'$MTitle',	'$Genre',	'$Actors',	'$MRate',	'$Storage',		'$SRate',	'$Runtime',		'$TRelease',		'$DRelease','	$Studio',	'$Plot') "//add cover
;

if ($conn->query($sql) === TRUE) {
    echo "Successfully added to table!";
} else {
    echo "Error adding to table: " . $conn->error;
}
// cover

$conn->close();
?> 
			</li>
			
 <!--IMG Upload-->
            <li>
                <div class = 'box_title'>
                    Cover:
                </div>
                <div class = 'box_field'>
					<input type="file" name="fileToUpload" id="fileToUpload">
					</form>
                </div>    
            </li>
          
            <p>
            <!--Buttons-->
			<input type="submit" value="Upload Image" name="submit">
			<input type="submit" value="" name="submit">
            <input type="RESET" value ="Reset" name="reset" />
            </p>
        </ul>
	<form>
    </div>
</div>
</body>
</html>