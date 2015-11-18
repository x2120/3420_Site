<?php
    $servername = "localhost";
	$server_username = "justinvuong";
	$server_password = "1234";
	$dbname = "justinvuong";

	// Create connection
	$conn = new mysqli($servername, $server_username, $server_password, $dbname);

	// Check connection

	if ($conn->connect_error)
		{ die("Connection failed: " . $conn->connect_error); }
	
	$client_username = $_POST["client_username"];
	$client_password = $_POST["client_password"];

	$client_username = stripslashes($client_username);
	$client_password = stripslashes($client_password);
	$client_username = mysql_real_escape_string($client_username);
	$client_password = mysql_real_escape_string($client_password);

	$sql = "SELECT * FROM User WHERE name = '$client_username' and password = '$client_password' ";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);

	//if results match, then count = 1
	if($count == 1)
	{
		//session creation
		$session_name = 'sec_session_id';
	    $secure = SECURE;
	        
	    // Forces sessions to only use cookies.
	    if (ini_set('session.use_only_cookies', 1) === FALSE)
	    {
	        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
	        exit();
	    }
	    
	    // Gets current cookies params.
	    $cookieParams = session_get_cookie_params();
	    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
	    
	    // Sets the session name to the one set above.
	    session_name($session_name);
	    session_start();
	    session_regenerate_id(true);

	    echo "<p>Login successful</p>";
	}
	
	else
		{ echo "Wrong Username or Password"; }

	$conn->close();
?>
    
    <!-- //check if logged in
    function login_check()
    {
    if (isset($_SESSION['user_login_status']) && $_SESSION['user_login_status'] == 1)
    { return true; }
      
    else
    { return false; }
	} -->