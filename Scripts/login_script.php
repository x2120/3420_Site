<?php
class Login
{
	public $conn = null;
	public $errors = array();
	public $messages = array();

	public function __construct()
	{
		session_start();
		if (isset($_POST["login"]))
		{ 
			$this->login_function();			
		}
	}	

	public function login_function()
	{
		echo "<p>Wu-tang</p>";

		$servername = "localhost";
		$username = "justinvuong";
		$password = "1234";
		$dbname = "justinvuong";
		

		if (!empty($_POST['client_username']) && !empty($_POST['client_password']))
		{
			echo "<p>Wu-tang</p>";
			// Create connection
			$this->conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error)
				{ die('Connect Error (' . $conn->connect_errno . ') '. $conn->connect_error); }
			else
			{
				$client_username = isset($_POST["client_username"]);
				$client_password = isset($_POST["client_password"]);

				$client_username = stripslashes($client_username);
				$client_password = stripslashes($client_password);
				$client_username = mysqli_real_escape_string($client_username);
				$client_password = mysqli_real_escape_string($client_password);

				$sql = "SELECT * FROM User WHERE name = '$client_username' and password = '$client_password'";
				$result = mysqli_query($sql) or trigger_error(mysqli_error()." ".$sql);
			}

			if ($result->num_rows == 1)
			{ echo "<p>Woot</p>"; }
		}
	}

	public function login_check()
	{
		if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1)
			{ return true; }
		else
			{ return false; }
	}
}
	

	// if ($result == false)
	// {
	// 	echo "<p>Query Error</p>";
	// 	mysql_close($conn);
	// }
	
	// else
	// { 
	// 	$count = mysql_num_rows($result); 
	// 	//if results match, then count = 1
	// 	if($count == 1)
	// 	{
	// 		//session creation
	// 		$session_name = 'sec_session_id';
	// 		$secure = SECURE;
				
	// 		// Forces sessions to only use cookies.
	// 		if (ini_set('session.use_only_cookies', 1) === FALSE)
	// 		{
	// 			header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
	// 			exit();
	// 		}
			
	// 		// Gets current cookies params.
	// 		setcookie('Username', $client_username, time() + (86400 * 30), "/");
			
	// 		// Sets the session name to the one set above.
	// 		session_name($session_name);
	// 		session_start();
	// 		session_regenerate_id(true);

	// 		echo "<p>Login successful</p>";
	// 	}
		
	// 	else
	// 		{ echo "Wrong Username or Password"; }

	// 	mysql_close($conn);
	// }
?>