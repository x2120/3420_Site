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
                    <select name="Rating" onchange="" size="1">
					<option selected="selected" value="start"><?php echo $row["stars"]; ?> </option>
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
					<option selected="selected" value="<?php echo $row["genre"]; ?>"> </option>
                        <option value="01">Action</option>
                        <option value="02">Adventure</option>
                        <option value="03">Animation</option>
                        <option value="04">Comedy</option>
                        <option value="05">Crime</option>
                        <option value="06">Documentary</option>
                        <option value="07">Drama</option>
                        <option value="08">Family</option>
                        <option value="09">Fantasy</option>
                        <option value="10">History</option>
                        <option value="11">Horror</option>
                        <option value="12">Music</option>
                        <option value="13">Mystery</option>
                        <option value="14">Romance</option>
                        <option value="15">Sci-Fi</option>
                        <option value="16">Sport</option>
                        <option value="17">Thriller</option>    
                        <option value="18">War</option> 
                        <option value="19">Western</option> 
                    </select>
                </div>
            
            </li>
            <li>
            <!--MPAA Raiting-->
                <form>
                    <fieldset id = 'mpaa_rating'>
                        <legend> MPAA Rating </legend>
						<option checked="checked" value="<?php echo $row["MPAA"]; ?>" hidden> </option>  
                        <input type="radio" name="Rating" value ="1" /> G
                        <input type="radio" name="Rating" value ="2" /> PG
                        <input type="radio" name="Rating" value ="3" /> PG-13
                        <input type="radio" name="Rating" value ="4" /> R
                        <input type="radio" name="Rating" value ="5" /> NC-17
                    </fieldset>
                </form>
				
            </li>			 
            <!--Year Movie Release-->
            <li>
                <div class = 'box_title'>
                    Year:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="<?php echo $row["title"]; ?>" name="Year" />
                </div>
            
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
					<option checked="checked" value="<?php echo $row["title"]; ?>" hidden> </option>
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
