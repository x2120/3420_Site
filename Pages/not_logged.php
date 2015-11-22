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
		require "../Templates/header.php"; 
		require "../Templates/sidebar.php";

		if (isset($login))
		{
			if ($login->errors)
			{
				foreach ($login->errors as $error) 
					{ echo $error; }
			}
			
			if ($login->messages)
			{
				foreach ($login->messages as $message)
					{ echo $message; }
			}
		}
	?>

	<div class = 'right'>
		<div class = 'display_box' id = 'pretty_box'>
			<form name = "login_info" action = "login.php" method = "post">
				<ul>
					<li>
						<div class = 'box_title'>
							Username:
						</div>
						<div class = 'box_field'>
							<input type = "text" name = "client_username" required />
						</div>
					</li>
					<li>
						<div class = 'box_title'>
							Password:
						</div>
						<div class = 'box_field'>
							<input type = "password" name = "client_password" required />
						</div>
					</li>
				</ul>
				<input type="submit" name="login" value="Login" />
				<input type="RESET" value ="Reset" name="reset" />
			</form>
		</div>
	</div>
</div>
</body>
</html>