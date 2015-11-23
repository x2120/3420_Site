<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- Head and meta info -->
<head>
	<link type='text/css' rel='stylesheet' href='../CSS/general.css' />
	<meta charset="utf-8">
	<title>Registration</title>
	<meta name="User registration" content="User register page for new account">
</head>

<body>
<div class='center'>

	<?php
		require("../Templates/header.php"); 
		require("../Templates/sidebar.php"); 

		if (isset($registration))
		{
			echo "woot";

			if ($registration->errors)
			{
				foreach ($registration->errors as $error) 
					{ echo $error; }
			}
			
			if ($registration->messages)
			{
				foreach ($registration->messages as $message)
					{ echo $message; }
			}
		}
	?>

	<div class = 'right'>
	<form method = "post" action = "" name = "registration_form">
		<ul>
			<li>
				<div class = 'box_title'>
					Username:
				</div>
				<div class = 'box_field'>
					<input type="text" name="client_username" required/>
				</div>
			</li>
			<li>
				<div class = 'box_title'>
					Password: 
				</div>
				<div class = 'box_field'>
					<input type="password" name="client_password" pattern="{6,}" required/>
				</div>
			</li>
			<li>
				<div class = 'box_title'>
					Verify Password:
				</div>
				<div class = 'box_field'>
					<input type="password" name="client_password_ver" pattern="{6,}" required/>
				</div>
			</li>
			<li>
				<div class = 'box_title'>
					Email:
				</div>
				<div class = 'box_field'>
					<input type="text" name="client_email" pattern="[a-z,A-Z,0-9]+@[a-z,A-Z]*(.(com|ca|edu))$" required/>
				</div>
			</li>
		<!-- Year dropdown -->
			<li>
				<div class = 'box_title'>
					Birthday: 
				</div>
				<div class = 'box_field'>
					<select name="year" id="year">
						<?PHP for($i=date("Y"); $i<=date("Y")+2; $i++)
								if($year == $i)
									echo "<option value='$i' selected>$i</option>";
								else
									echo "<option value='$i'>$i</option>";
						?>
					</select>
						<!-- Month dropdown -->
					<select name="month" id="month" onchange="" size="1">
						<option value="01">January</option>
						<option value="02">February</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>

					<!-- Day dropdown -->
					<select name="day" id="day" onchange="" size="1">
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
				</div>
			</li>
		</ul>
		<input type="submit" value ="Register" name="register" />
		<input type="RESET" value ="Reset" name="reset" />
	</form>
	</div>
</div><!-- end survey form -->
</body>
</html>