<?php
    $db_path = "localhost";
    $username = "justinvuong";
    $user_password = "1234";
    $db_name = "justinvuong";

	$db_connect = new mysqli($db_path, $username, $password, $db_name) or die("cannot connect"); 
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	$result = mysql_query("SELECT * FROM $tbl_name WHERE name = '$username' and password = '$password' ");

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

	$db_connect = close();
?>
    
    <!-- //check if logged in
    function login_check()
    {
    if (isset($_SESSION['user_login_status']) && $_SESSION['user_login_status'] == 1)
    { return true; }
      
    else
    { return false; }
	} -->