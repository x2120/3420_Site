<?php

    private $db_connection = null;
    public $errors = array();
    public $messages = array();

    private $db_path = "localhost";
    private $username = "justinvuong";
    private $user_password = "1234";
    private $db_name = "justinvuong";

    $search_type = $_POST["search_type"]

	$search = htmlentities($_POST["search"]);

	if(isset($_POST["SButton"]))
	{
		if(isset($_GET["go"]))
		{
			if(preg_match("^/[A-Za-z]+/", $_POST['name'])
			{
				$this->db_connection = new mysqli($db_path, $username, $user_password, $db_name);
				if (!$this->db_connection->connect_errno)
				{
					$sql = "SELECT *
							FROM Movie
							WHERE $search = $search_type"
				}
			}

		}
		
	}

	else
		{ echo "<p>Enter a search query</p>" }
?>