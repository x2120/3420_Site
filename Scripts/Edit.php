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
                        <option value="01"<?php if($row['stars'] == "01") echo "selected";?>>1</option>
                        <option value="02"<?php if($row['stars'] == "02") echo "selected";?>>2</option>
                        <option value="03"<?php if($row['stars'] == "03") echo "selected";?>>3</option>
                        <option value="04"<?php if($row['stars'] == "04") echo "selected";?>>4</option>
                        <option value="05"<?php if($row['stars'] == "05") echo "selected";?>>5</option>
                        <option value="06"<?php if($row['stars'] == "06") echo "selected";?>>6</option>
                        <option value="07"<?php if($row['stars'] == "07") echo "selected";?>>7</option>
                        <option value="08"<?php if($row['stars'] == "08") echo "selected";?>>8</option>
                        <option value="09"<?php if($row['stars'] == "09") echo "selected";?>>9</option>
                        <option value="10"<?php if($row['stars'] == "10") echo "selected";?>>10</option>
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
					
                        <option value="01"<?php if($row['genre'] == "01") echo "selected";?>> Action</option>
                        <option value="02"<?php if($row['genre'] == "02") echo "selected";?>> Adventure</option>
                        <option value="03"<?php if($row['genre'] == "03") echo "selected";?>> Animation</option>
                        <option value="04"<?php if($row['genre'] == "04") echo "selected";?>> Comedy</option>
                        <option value="05"<?php if($row['genre'] == "05") echo "selected";?>> Crime</option>
                        <option value="06"<?php if($row['genre'] == "06") echo "selected";?>> Documentary</option>
                        <option value="07"<?php if($row['genre'] == "07") echo "selected";?>> Drama</option>
                        <option value="08"<?php if($row['genre'] == "08") echo "selected";?>> Family</option>
                        <option value="09"<?php if($row['genre'] == "09") echo "selected";?>> Fantasy</option>
                        <option value="10"<?php if($row['genre'] == "10") echo "selected";?>> History</option>
                        <option value="11"<?php if($row['genre'] == "11") echo "selected";?>> Horror</option>
                        <option value="12"<?php if($row['genre'] == "12") echo "selected";?>> Music</option>
                        <option value="13"<?php if($row['genre'] == "13") echo "selected";?>> Mystery</option>
                        <option value="14"<?php if($row['genre'] == "14") echo "selected";?>> Romance</option>
                        <option value="15"<?php if($row['genre'] == "15") echo "selected";?>> Sci-Fi</option>
                        <option value="16"<?php if($row['genre'] == "16") echo "selected";?>> Sport</option>
                        <option value="17"<?php if($row['genre'] == "17") echo "selected";?>> Thriller</option>    
                        <option value="18"<?php if($row['genre'] == "18") echo "selected";?>> War</option> 
                        <option value="19"<?php if($row['genre'] == "19") echo "selected";?>> Western</option> 
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
                
                <fieldset id = 'video_type'>
                    <legend> Video Type </legend>
					    <input type="checkbox" name="Storage" value ="1" <?php if($row['relType'] == "1") echo "checked = checked";?>/> DVD
                        <input type="checkbox" name="Storage" value ="2" <?php if($row['relType'] == "2") echo "checked = checked";?>/> BluRay
                        <input type="checkbox" name="Storage" value ="3" <?php if($row['relType'] == "3") echo "checked = checked";?>/> Digital SD
                        <input type="checkbox" name="Storage" value ="4" <?php if($row['relType'] == "4") echo "checked = checked";?>/> Digital HD
                        <input type="checkbox" name="Storage" value ="5" <?php if($row['relType'] == "5") echo "checked = checked";?>/> 3D
                </fieldset>
                

            <p>
            <!--Buttons-->
            <input type="Submit" value ="Save" name="AddVideo" />
            <input type="RESET" value ="Reset" name="reset" />
            </p>
        </ul>
	<form>
    </div>
</div>
</body>
</html>
