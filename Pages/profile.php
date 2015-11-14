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

	<?php
		require("../Templates/header.php"); 
		require("../Templates/sidebar.php"); 
	?>

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