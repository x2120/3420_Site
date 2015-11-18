<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- Head and meta info -->
<head>
	<link type='text/css' rel='stylesheet' href='../CSS/general.css' />
	<meta charset="utf-8">
	<title>Search videos</title>
	<meta name="Add video" content="Add video to personal database">
</head>

<body>
<div class='center'>

	<?php
		require("../Scripts/search_db.php");
		require("../Templates/header.php"); 
		require("../Templates/sidebar.php"); 
	?>

	<div class = 'right'>
		<div class = 'display_box' id = 'pretty_box'>
			<ul>
				<!--Movie Search-->
				<li>

					<div class = 'Search'>
						Search for movie:
					</div>
					<div class = 'box_field'>
						<form name = "search" action = "../Scripts/search_db.php?go" method = "post">
							<input type= "text" name = "search" value = ""/>
							<select name = "search_type" selected="selected" value="start">
		                        <option value="Title">Title</option>
		                        <option value="MPAA Rating">MPAA Rating</option>
		                        <option value="Genre">Genre</option>
		                        <option value="Star Rating">Star Rating</option>
		                        <option value="Year">Year</option>
		                        <option value="Actors">Actors</option>
		                        <option value="Studio">Studio</option>
		                    </select>
							<input type= "button" name = "SButton" value = "Search"/>
						</form>
					</div>
				</li>
			</ul>
		</div>
		<br>
			
		<table>
			<tr>
				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov01.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> Gone Girl </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>

				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov02.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> LoTR The Fellowship of The Ring </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>
	
				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov03.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> LoTR The Two Towers </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>

				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov04.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> LoTR The Return of The King </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>
			</tr>
  
			<tr>
				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov05.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> Star Wars VI </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>

				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov06.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> Star Wars V </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>

				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov07.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> Star Wars IV </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>

				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov08.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> Akira </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>
			</tr>

			<tr>
				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov09.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> Deer Hunter </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>

				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov10.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> Inception </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>

				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov11.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> The Incredibles </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>

				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov12.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> Pulp Fiction </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>
			</tr>

			<tr>
				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov13.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> Wall-E </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>

				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov14.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> Spaceballs </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>

				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov15.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> School of Rock </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>

				<th>
					<div>
						<a href="http://www.w3schools.com">
							<img src = "../Images/mov16.jpg" alt="movie poster 1" style="width:65px;height:92px;">
						</a>
						<p> Hot Fuzz </p>
						<p>
							<a href="http://www.wikipedia.com">
								<img src = "../Images/detailsicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.yahoo.com">
								<img src = "../Images/editicon.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
							<a href="http://www.google.com">
								<img src = "../Images/trashimage.png" alt="Bicon" style="width:25px;height:25px;">
							</a>
						</p>
					</div>
				</th>
			</tr>
		</table>
	</div>
</div>
	
</body>
</html>