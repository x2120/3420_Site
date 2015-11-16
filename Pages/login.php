<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- Head and meta info -->
<head>
	<link type='text/css' rel='stylesheet' href='../CSS/general.css' />
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="User login" content="The login page for the website">
</head>

<body>
<div class='center'>

	<?php
		require("../Templates/header.php"); 
		require("../Templates/sidebar.php"); 
	?>

	<div class = 'right'>
		<div class = 'display_box' id = 'pretty_box'>
			<form name = "login" action = "../Scripts/login_script.php" method = "post" enctype = "multipart/form-data">
				<ul>
					<li>
						<div class = 'box_title'>
							Username:
						</div>
						<div class = 'box_field'>
							<input type = "text" value = "" name = "username" />
						</div>
					</li>
					<li>
						<div class = 'box_title'>
							Password:
						</div>
						<div class = 'box_field'>
							<input type = "password" value = "" name = "password" />
						</div>
					</li>
				</ul>
				<input type="Button" value ="Login" name="login" />
				<input type="RESET" value ="Reset" name="reset" />
			</form>
		</div>
	</div>
</div>

<?php
	// cookie and session creation
	$cookie_name = "user"
	$cookie_type = "$UserName"
?>

</body>
</html>