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

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- Head and meta info -->
<head>
	<link type='text/css' rel='stylesheet' href='../CSS/general.css' />
	<meta charset="utf-8">
	<meta name="Add video" content="Add video to personal database">
	<title>Add video</title>
</head>

<body>


<div class='center'>

	<?php
		require("../Templates/header.php"); 
		require("../Templates/sidebar.php"); 
	?>

    <div class = 'right'>
	<form action= "../Scripts/change.php" method "post">
        <ul>
            <!--Title of Movie-->
            <li>
                <div class = 'box_title'>
                    Title:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="<?php echo $row["title"]; ?>" name="MTitle" />
                </div>
            
            </li>
            <!--Rating system-->
            <li>
                <div class = 'box_title'>
                    Rating: 
                </div>
                <div class = 'box_field'>
                    <select  name="SRating" onchange="" size="1">
					<option value="" disabled>Current:</option>
					<option selected="selected" value="start"><?php echo $row["stars"]; ?> </option>
					   <option value="" disabled>--------</option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
            
            </li>
            <!--Genre of Movie-->
            <li>
                <div class = 'box_title'>
                    Genre:
                </div>
                <div class = 'box_field'>
                    <select name="Genre" onchange="" size="1">
                        <option value="01"><?php if($row['genre'] == "01")  "selected = 'selected'";?> Action</option>
                        <option value="02"><?php if($row['genre'] == "02")  "selected = 'selected'";?> Adventure</option>
                        <option value="03"><?php if($row['genre'] == "03")  "selected = 'selected'";?> Animation</option>
                        <option value="04"><?php if($row['genre'] == "04")  "selected = 'selected'";?> Comedy</option>
                        <option value="05"><?php if($row['genre'] == "05")  "selected = 'selected'";?> Crime</option>
                        <option value="06"><?php if($row['genre'] == "06")  "selected = 'selected'";?> Documentary</option>
                        <option value="07"><?php if($row['genre'] == "07")  "selected = 'selected'";?> Drama</option>
                        <option value="08"><?php if($row['genre'] == "08")  "selected = 'selected'";?> Family</option>
                        <option value="09"><?php if($row['genre'] == "09")  "selected = 'selected'";?> Fantasy</option>
                        <option value="10"><?php if($row['genre'] == "10")  "selected = 'selected'";?> History</option>
                        <option value="11"><?php if($row['genre'] == "11")  "selected = 'selected'";?> Horror</option>
                        <option value="12"><?php if($row['genre'] == "12")  "selected = 'selected'";?> Music</option>
                        <option value="13"><?php if($row['genre'] == "13")  "selected = 'selected'";?> Mystery</option>
                        <option value="14"><?php if($row['genre'] == "14")  "selected = 'selected'";?> Romance</option>
                        <option value="15"><?php if($row['genre'] == "15")  "selected = 'selected'";?> Sci-Fi</option>
                        <option value="16"><?php if($row['genre'] == "16")  "selected = 'selected'";?> Sport</option>
                        <option value="17"><?php if($row['genre'] == "17")  "selected = 'selected'";?> Thriller</option>    
                        <option value="18"><?php if($row['genre'] == "18")  "selected = 'selected'";?> War</option> 
                        <option value="19"><?php if($row['genre'] == "19")  "selected = 'selected'";?> Western</option> 
                    </select>
                </div>
            
            </li>
            <li>
            <!--MPAA Raiting-->
                <form>
                    <fieldset id = 'mpaa_rating'>
                        <legend> MPAA Rating </legend>
						<option checked="checked" value="" hidden></option>  
                        <input type="radio" name="Rating" value ="1" <?php if($row['MPAA'] == "1") echo "checked = checked";?> /> G
                        <input type="radio" name="Rating" value ="2" <?php if($row['MPAA'] == "2") echo "checked = checked";?>  /> PG
                        <input type="radio" name="Rating" value ="3" <?php if($row['MPAA'] == "3") echo "checked = checked";?>  /> PG-13
                        <input type="radio" name="Rating" value ="4" <?php if($row['MPAA'] == "4") echo "checked = checked";?>  /> R
                        <input type="radio" name="Rating" value ="5" <?php if($row['MPAA'] == "5") echo "checked = checked";?>  /> NC-17
                    </fieldset>
                </form>
				
            </li>			 
             <!--Run Time-->
            <li>
                <div class = 'box_title'>
                    Runtime:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="<?php echo $row["runtime"]; ?>" name="Runtime" />
                </div>    
            </li>
            <!--Theater Release-->
            <li>
                <div class = 'box_title'>
                    TRelease:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="<?php echo $row["theatRelease"]; ?>" name="TRelease" />
                </div>    
            </li>
            <!--DVD-->
            <li>
                <div class = 'box_title'>
                    DRelease:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="<?php echo $row["homeRelease"]; ?>" name="DRelease" />
                </div>    
            </li>
            <!--Actors-->
            <li>
                <div class = 'box_title'>
                    Actors:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="<?php echo $row["actors"]; ?>" name="Actors" />
                </div>    
            
            </li>
            <!--IMG Upload-->
            <li>
                <div class = 'box_title'>
                    Cover:
                </div>
                <div class = 'box_field'>
                    <input type="file" value ="" name="IUpload" />
                </div>    
            </li>
            <!--Studio-->
            <li>
                <div class = 'box_title'>
                    Studio:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="<?php echo $row["studio"]; ?>" name="Studio" />
                </div>    
            </li>
            <!--Plot-->
            <li>
                <div class = 'box_title'>
                    Plot:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="<?php echo $row["plot"]; ?>" name="Plot" />
                </div>    
            </li>
            <!--Video Type-->
            <li>
                <form>
                <fieldset id = 'video_type'>
                    <legend> Video Type </legend>
					<option checked="checked" value="<?php echo $row["title"]; ?>" hidden><?php echo $row["title"]; ?></option>
                    <input type="checkbox" name="VType[]" value ="1" /> DVD
                    <input type="checkbox" name="VType[]" value ="2" /> BluRay
                    <input type="checkbox" name="VType[]" value ="3" /> Digital SD
                    <input type="checkbox" name="VType[]" value ="4" /> Digital HD
                    <input type="checkbox" name="VType[]" value ="5" /> 3D
                </fieldset>
                </form>
            </li>

            <p>
            <!--Buttons-->
            <input type="Submit" value ="Save" name="Add Video" />
            <input type="RESET" value ="Reset" name="reset" />
            </p>
        </ul>
	<form>
    </div>
</div>
</body>
</html>
