<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- Head and meta info -->
<head>

	<script type= "text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script type= "text/javascript" src="../Scripts/jquery-ui.js"></script>
	<script type= "text/javascript" src= "../Scripts/jquery-1.11.3.min.js"></script>
	<script type= "text/javascript" src= "../Scripts/jquery-ui.min.js"></script>
	<script type= "text/javascript" src= "../Scripts/jScripts.js"></script>
	<script type=	"text/javascript"></script>
	<script src="scripts/jquery.rateit.min.js" language="javascript" type="text/javascript"> </script>
	<link type='text/css' rel='stylesheet' href='../CSS/general.css' />
	<link type='text/css' rel='stylesheet' href='../Scripts/jquery-ui.css' />
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

	<form action= "../Scripts/insert.php" method "post" enctype="multipart/form-data">
	
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
            <!--Rating system-->
            <li>
                <div class = 'box_title'>
                    Rating: 
                </div>
                <div class = 'box_field'>
                    <select  name="SRating" onchange="" size="1">
                        <option  value="01">1</option>
                        <option  value="02">2</option>
                        <option  value="03">3</option>
                        <option  value="04">4</option>
                        <option  value="05">5</option>
                        <option  value="06">6</option>
                        <option  value="07">7</option>
                        <option  value="08">8</option>
                        <option  value="09">9</option>
                        <option  value="10">10</option>
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
                        <input type="radio" name="Rating" value ="1" /> G
                        <input type="radio" name="Rating" value ="2" /> PG
                        <input type="radio" name="Rating" value ="3" /> PG-13
                        <input type="radio" name="Rating" value ="4" /> R
                        <input type="radio" name="Rating" value ="5" /> NC-17
                    </fieldset>
                </form>
            </li>			 

            <!--Run Time-->
            <li>
                <div class = 'box_title'>
                    Runtime:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="" name="Runtime" />
                </div>    
            </li>
			
            <!--Theatrical Release-->
            <li>
                <div class = 'box_title'>
                    Theatrical Release:
                </div>

					<div class="box_field">
						<input type="textboxes"  name="TRelease" id="Tdatepicker" placeholder="DD/MM/YYYY"></input> 
						<div class = 'TError'></div>	 
					</div>	 
					
            </li>
			
			</li>			

            <li>
                <div class = 'box_title'>
                    DVD Release:
                </div>

					<div class="box_field">
						<input type="textboxes"  name="DRelease" id="Ddatepicker" placeholder="DD/MM/YYYY"></input> 
						<div class = 'DError'></div>	 
					</div>	 
					
            </li>
			
			
            <!--Actors-->
            <li>
                <div class = 'box_title'>
                    Actors:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="" name="Actors" />
                </div>    
            
            </li>
            <!--Studio-->
            <li>
                <div class = 'box_title'>
                    Studio:
                </div>
                <div class = 'box_field'>
                    <input type="textboxes" value ="" name="Studio" />
                </div>    
            </li>
			
			
            <!--Plot-->
			
            <li>
                <div class = 'box_title'>
                    Plot:
                </div>
				
				
                <div class = 'box_field'>
				<textarea id="plot" maxlength="1000" cols="50" rows="5" placeholder="Enter Text"></textarea>
					<span id="count"></span>
                </div>    
            </li>
			
			
            <!--Video Type-->
            <li>
                
                <fieldset id = 'video_type'>
                    <legend> Video Type </legend>
					    <input type="checkbox" name="Vtype" value ="1" /> DVD
                        <input type="checkbox" name="Vtype" value ="2" /> BluRay
                        <input type="checkbox" name="Vtype" value ="3" /> Digital SD
                        <input type="checkbox" name="Vtype" value ="4" /> Digital HD
                        <input type="checkbox" name="Vtype" value ="5" /> 3D
                </fieldset>
                
            </li>
						
            <p>
            <!--Buttons-->
            <input type="Submit" value ="Save" name="AddVideo" onclick="validate()"/>
            <input type="RESET" value ="Reset" name="reset" />
            </p>
        </ul>
    </form>
	</div>
</div>

</body>
</html>