<?php
class user_registration
{
	public $errors = array();
	public $messages = array();

	public function __construct()
	{
		if (isset($_POST["register"]))         
			{ $this->register_user(); }
	}
	
	private function register_user()
	{
		$conn = "";
		$servername = "localhost";
		$username = "justinvuong";
		$password = "1234";
		$dbname = "justinvuong";

		if (preg_match('/^[a-z\d]{2,64}$/i', $_POST['client_username'])
			&& strlen($_POST['client_email']) <= 64
			&& filter_var(preg_match('/^[a-z,A-Z,0-9]+@[a-z,A-Z]*(.(com|ca|edu))$/i', $_POST['client_email']))
			&& ($_POST['client_password'] === $_POST['client_password_ver']))
		{
			// create a database connection
			$this->conn = new mysqli($servername, $username, $password, $dbname);
			// if no connection errors (= working database connection)
			if (!$this->conn->connect_errno)
			{
				// escaping, additionally removing everything that could be (html/javascript-) code
				$client_username = $this->conn->real_escape_string(strip_tags($_POST['client_username'], ENT_QUOTES));
                $client_email = $this->conn->real_escape_string(strip_tags($_POST['client_email'], ENT_QUOTES));
				$client_password = $_POST['client_password'];

				// check if user or email address already exists
				$sql = "SELECT * FROM Users WHERE name = '$client_username' OR email = '$client_email'";
				$client_username_check = $this->conn->query($sql);
				if ($client_username_check->num_rows == 1)
					{ echo "Sorry, that username / email address is already taken."; }
				else
				{
					// write new user's data into database
					$sql = "INSERT INTO users (name, password, email)
							VALUES('$client_username', '$client_email', '$client_password')";
					$user_insert = $this->conn->query($sql);
					// if user has been added successfully
					if ($user_insert)
						{ $this->messages[] = "Your account has been created successfully. You can now log in."; }

					else
						{ $this->errors[] = "Sorry, your registration failed. Please go back and try again."; }
				}
			}

			else 
				{ $this->errors[] = "Sorry, no database connection."; }
		}

		else 
			{ $this->errors[] = "An unknown error occurred."; }
	}
}