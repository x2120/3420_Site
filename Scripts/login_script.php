<?php
class login_script
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
					// if (password_verify($_POST['client_password'], $result->client_password_hash))
					// {
						$_SESSION['client_username'] = $result->client_username;
						$_SESSION['client_email'] = $result->client_email;
						$_SESSION['user_login_status'] = 1;
					// }
					// 
					// else
					// 	{ $this->errors[] = "Login error"; }
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

	public function deleteAccount()
	{
		$conn = '';
		$servername = "localhost";
		$username = "justinvuong";
		$password = "1234";
		$dbname = "justinvuong";
		
		$this->conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
		if ($this->conn->connect_errno)
		{
			echo "fuck";
			die($this->errors[] = 'Connect Error (' . $conn->connect_errno);
		}
		else
		{
			echo "boosh";
			$username = $_SESSION['client_username'];
			$sql = "DELETE FROM User WHERE name = '$username'";
			$result = $this->conn->query($sql);
			$_SESSION = array();
	        session_destroy();	
		}
	}
}
?>