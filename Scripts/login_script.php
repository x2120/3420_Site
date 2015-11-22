<?php
class Login
{
	public $errors = array();
	public $messages = array();

	public function __construct()
	{
		session_start();
		if (isset($_POST["login"]))
			{ $this->login_function(); }
	}	

	public function login_function()
	{
		$conn = "";
		$servername = "localhost";
		$username = "justinvuong";
		$password = "1234";
		$dbname = "justinvuong";
		

		if (!empty($_POST['client_username']) && !empty($_POST['client_password']))
		{
			// Create connection
			$this->conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($this->conn->connect_errno)
				{ die($this->errors[] = 'Connect Error (' . $conn->connect_errno); }
			else
			{
				$client_username = $_POST["client_username"];
				$client_password = $_POST["client_password"];

				$client_username = stripslashes($client_username);
				$client_password = stripslashes($client_password);
				$client_username = $this->conn->real_escape_string($client_username);
				$client_password = $this->conn->real_escape_string($client_password);

				$sql = "SELECT * FROM User WHERE name = '$client_username' and password = '$client_password'";
				$result = $this->conn->query($sql);
				$row_count = $result->num_rows;
				if ($row_count == 1)
				{
					$result_row = $result->fetch_object();
					if (password_verify($_POST['client_password'], $result->client_password_hash))
					{
						$_SESSION['client_username'] = $result->client_username;
						$_SESSION['client_email'] = $result->client_email;
						$_SESSION['user_login_status'] = 1;
					}

					else
						{ $this->errors[] = "Login error"; }
                }
				else
					{ $this->errors[] = "Login error"; }
			}
		}
	}

	public function login_check()
	{
		if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1)
			{ return true; }
		else
			{ return false; }
	}

	public function logout()
	{
		$_SESSION = array();
        session_destroy();
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

