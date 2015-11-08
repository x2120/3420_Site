<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- Head and meta info -->
<head>
	<link type='text/css' rel='stylesheet' href='../CSS/general.css' />
	<meta charset="utf-8">
	<title>Profile</title>
	<meta name="User profile" content="Contains user info and options to change">
</head>

<body>
<div class='center'>

	<div class="toplogo">
		<img src = "../Images/movie-reel.jpg" alt="reel" style="width:100px;height:80px;">
	</div>
	
	<div class="tophead">
		<h1><span ID='logoColor'>MyVid</span> Collection</h1>
		<p>An individual Video Libary</p><br>
	</div>

	<!-- Left sidebar and site navigation -->
	<div class='left'>
		<br>
		<ul>
			<li class='button'><a href="index.html">Home</a></li>
			<li class='button'><a href="register.html">Create Account</a></li>
			<li class='button'><a href="profile.html">Edit Account</a></li>
			<li class='button'><a href="../PHP/leave.php">Delete Account</a></li>
			<li class='button'><a href="addVid.html">Add Video</a></li>
			<li class='button'><a href="editVid.html">Edit Video</a></li>
			<li class='button'><a href="../PHP/deleteVid.php">Delete Video</a></li>
			<li class='button'><a href="search.html">Search</a></li>
			<li class='button'><a href="displayDetails.html">Display Details</a></li>
			<li class='button'><a href="login.html">Login</a></li>
			<li class='button' ID='inv_button'><a href="../PHP/logout.php">Logout</a></li>
		</ul>
	</div>

	<div class = 'right'>
		<ul>
			<li>
				<div class = 'box_title'>
					Change password:
				</div>
				<div class = 'box_field'>
					<input type="password" value ="" name="Password" />
				</div>
			</li>
			<li>
				<div class = 'box_title'>
					Verify password:
				</div>
				<div class = 'box_field'>
					<input type="password" value ="" name="Verification" />
				</div>
			</li>
			<li>
				<div class = 'box_title'>
					Email:
				</div>
				<div class = 'box_field'>
					<input type="text" value ="" name="Email" />
				</div>
			</li>
		</ul>
		<input type="Button" value ="Save" name="save" />
	</div>
</div>
</body>
</html>