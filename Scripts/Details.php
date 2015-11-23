<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- Head and meta info -->
<head>
	<link type='text/css' rel='stylesheet' href='../CSS/general.css' />	
	<meta charset="utf-8">
	<title>Movie Details</title>
	<meta name="Add video" content="Add video to personal database">
</head>

<body>
<div class='center'>

	<?php
		require("../Templates/header.php"); 
		require("../Templates/sidebar.php"); 
	?>
	</div>

	<div class = 'right'>
			<?php
		$servername = "localhost";
		$username = "justinvuong";
		$password = "1234";
		$dbname = "justinvuong";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$MTitle=($_GET['MTitle']);
		// sql to insert into table 																							add cover (upload image)
		$sql = "SELECT  title, genre, cover, actors, MPAA, relType, stars, runtime, theatRelease, homeRelease, studio, plot FROM Movie  WHERE  title LIKE '$MTitle' " ;
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$conn->close();
		?> 
		<div class = 'display_box'>
			<img src = '../Images/hotfuzz.jpg' />
			<div class = 'movie_details'>
				<p style = 'font-size: 25px'><strong><?php echo $row["title"]; ?> </strong></p><br><br>
				<img src = '../Images/button_ok16.png'>						 
						 <?php if($row['relType'] == "1") echo "DVD";?> 
                         <?php if($row['relType'] == "2") echo "BluRay";?> 
                         <?php if($row['relType'] == "3") echo "Digital SD";?>  
                         <?php if($row['relType'] == "4") echo "Digital HD";?> 
                         <?php if($row['relType'] == "5") echo "3D";?> 
				<br><br>
				<strong>MPAA:</strong> 
						 <?php if($row['MPAA'] == "1") echo "G";?> 
                         <?php if($row['MPAA'] == "2") echo "PG";?> 
                         <?php if($row['MPAA'] == "3") echo "PG-13";?>  
                         <?php if($row['MPAA'] == "4") echo "R";?> 
                         <?php if($row['MPAA'] == "5") echo "NC-17";?> 
			    <br><br>
				<strong> Rating: </strong> 
                   	    <?php if($row['stars'] == "01") echo "1";?>
                        <?php if($row['stars'] == "02") echo "2";?>
                        <?php if($row['stars'] == "03") echo "3";?>
                        <?php if($row['stars'] == "04") echo "4";?>
                        <?php if($row['stars'] == "05") echo "5";?>
                        <?php if($row['stars'] == "06") echo "6";?>
                        <?php if($row['stars'] == "07") echo "7";?>
                        <?php if($row['stars'] == "08") echo "8";?>
                        <?php if($row['stars'] == "09") echo "9";?>
                        <?php if($row['stars'] == "10") echo "10";?>
						/10
			    <br><br>
				<strong>Studio:</strong> <?php echo $row["studio"]; ?><br><br>
				<strong>Theatrical Release:</strong> <?php echo $row["theatRelease"]; ?><br><br>
				<strong>DVD Release:</strong> <?php echo  $row["homeRelease"]; ?><br><br>
				<strong>Actors:</strong> <?php echo  $row["actors"]; ?><br><br>
				<strong>Genres:</strong> 
						<?php if($row['genre'] == "01") echo "Action";?>
                        <?php if($row['genre'] == "02") echo "Adventure";?>
                        <?php if($row['genre'] == "03") echo "Animation";?>
                        <?php if($row['genre'] == "04") echo "Comedy";?>
                        <?php if($row['genre'] == "05") echo "Crime";?>
                        <?php if($row['genre'] == "06") echo "Documentary";?>
                        <?php if($row['genre'] == "07") echo "Drama";?>
                        <?php if($row['genre'] == "08") echo "Family";?>
                        <?php if($row['genre'] == "09") echo "Fantasy";?>
                        <?php if($row['genre'] == "10") echo "History";?>
                        <?php if($row['genre'] == "11") echo "Horror";?>
                        <?php if($row['genre'] == "12") echo "Music";?>
                        <?php if($row['genre'] == "13") echo "Mystery";?>
                        <?php if($row['genre'] == "14") echo "Romance";?>
                        <?php if($row['genre'] == "15") echo "Sci-Fi";?>
                        <?php if($row['genre'] == "16") echo "Sport";?>
                        <?php if($row['genre'] == "17") echo "Thriller";?> 
                        <?php if($row['genre'] == "18") echo "War";?>
                        <?php if($row['genre'] == "19") echo "Western";?>
						<br><br>
				<strong>Run Time:</strong> :<?php echo  $row["runtime"]; ?><br><br>
				<p id='synopsis'><?php echo $row["plot"]; ?></p>
			</div>
		</div>
	</div>
</div>
	
</body>
</html>