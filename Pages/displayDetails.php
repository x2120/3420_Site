<!--searches for video in database to display details-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- Head and meta info -->
<head>
	<link type='text/css' rel='stylesheet' href='../CSS/general.css' />
	<meta charset="utf-8">
	<title>Add video</title>
	<meta name="Movie Details" content="Add video to personal database">
</head>

<body>


<div class='center'>

	<?php
		require("../Templates/header.php"); 
		require("../Templates/sidebar.php"); 
	?>

    <div class = 'right'>
	<form action= "../Scripts/Details.php" method "post">
        <ul>
            <!--Title of Movie-->
            <li>
                <div class = 'box_title'>
                    Title:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="" name="MTitle" />
                </div>
            
            </li>
          
            <p>
            <!--Buttons-->
            <input type="Submit" value ="Search" name="Add Video" />
            <input type="RESET" value ="Reset" name="reset" />
            </p>
        </ul>
	<form>
    </div>
</div>
</body>
</html>