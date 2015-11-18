<?php
$servername = "localhost";
$username = "justinvuong";
$password = "1234";
$dbname = "justinvuong";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//compare table values if 2 are the same spits out an error

/* if () == TRUE) {
    echo "There is already a move with that name!";
}  */

/*$MTitle=($_GET['MTitle']); 
$MRate=($_GET['Rating[]']); 
$Genre=($_GET['Genre']); 
$SRate=($_GET['Rating']); 
$Year=($_GET['Year']); 
$Runtime=($_GET['Runtime']); 
$TRelease=($_GET['TRelease']); 
$DRelease=($_GET['DRelease']); 
$Actors=($_GET['Actors']); 
$Save=($_GET['AddVideo']); // to upload image  
$Studio=($_GET['Studio']); 
$Plot=($_GET['Plot']); 
$Vtype=($_GET['VType[]']); 
 */


// sql to insert into table 																							add cover (upload image)
$sql = "SELECT title FROM Movie ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> - Name: ". $row["title"].  "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?> 