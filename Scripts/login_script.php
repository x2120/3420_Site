<?php
class Login
{
    private $db_connection = null;
    public $errors = array();
    public $messages = array();

    //create session
    public function __construct()
    {

        session_start();
        if (isset($_GET["logout"]))
        { $this->do_logout(); }
        elseif (isset($_POST["login"]))
        { $this->do_login(); }
    }

    //login function
    private function do_login()
    {
        // check login form contents
        if (empty($_POST['username']))
        { $this->errors[] = "Username required"; }
        elseif (empty($_POST['user_password']))
        { $this->errors[] = "Password required"; }

        elseif (!empty($_POST['username']) && !empty($_POST['user_password']))
        {
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            // functioning db
            if (!$this->db_connection->connect_errno) {
                
                // format the post info
                $username = $this->db_connection->real_escape_string($_POST['username']);

                //checks credentials
                $sql = "SELECT username, user_email, user_password_hash
                        FROM users
                        WHERE username = '" . $username . "' OR user_email = '" . $username . "';";
                $login_check = $this->db_connection->query($sql);
                
                // if this user exists
                if ($login_check->num_rows == 1) {
                    // get result row (as an object)
                    $result_row = $login_check->fetch_object();
                    
                    // hashed password for basic security
                    if (password_verify($_POST['user_password'], $result_row->user_password_hash))
                    {
                        $_SESSION['username'] = $result_row->username;
                        $_SESSION['user_email'] = $result_row->user_email;
                        $_SESSION['user_login_status'] = 1;
                    }
                
                    else
                    { $this->errors[] = "Wrong password. Try again."; }
                } 
                
                else 
                { $this->errors[] = "This user does not exist."; }
            }
            
            else 
            { $this->errors[] = "Database connection problem."; }
        }
    }
   	
   	//logout function
    public function do_logout()
    {
        // delete the session of the user
        $_SESSION = array();
        session_destroy();
        // return a little feeedback message
        $this->messages[] = "You have been logged out.";
    }
    
    //check if logged in
    public function login_check()
    {
        if (isset($_SESSION['user_login_status']) && $_SESSION['user_login_status'] == 1)
        { return true; }
        
        else
        { return false; }
    }
}