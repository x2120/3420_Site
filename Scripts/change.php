<?php
$servername = "localhost";
$username = "justinvuong";
$password = "1234";
$dbname = "justinvuong";
$MTitle=($_GET['MTitle']); 
$MRate=($_GET['Rating']);  
$Genre=($_GET['Genre']); 
$SRate=($_GET['SRating']); 
$Year=($_GET['Year']); 
$Runtime=($_GET['Runtime']); 
$TRelease=($_GET['TRelease']); 
$DRelease=($_GET['DRelease']); 
$Actors=($_GET['Actors']); 
$Save=($_GET['AddVideo']); // to upload image  
$Studio=($_GET['Studio']); 
$Plot=($_GET['Plot']); 
$Storage=($_GET['Storage']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to Update table 																							add cover (upload image)
$sql = "UPDATE Movie 
SET genre='$Genre', actors='$Actors' , MPAA='$MRate', relType='$Storage', stars='$SRate', runtime='$Runtime', theatRelease='$TRelease', homeRelease='$DRelease', studio='$Studio', plot='$Plot' 
WHERE title='$MTitle';
"//add cover
;

if ($conn->query($sql) === TRUE) {
    echo "Successfully Updated the table!";
} else {
    echo "Error adding to table: " . $conn->error;
}

$conn->close();
?> 