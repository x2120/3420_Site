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
$VType=($_GET['type']); 

// sql to insert into table 																							add cover (upload image)


$sql = "UPDATE Movie 
SET genre='$Genre', actors='$Actors' , MPAA='$MRate', relType='$Vtype', stars='$SRate', runtime='$Runtime', theatRelease='$TRelease', homeRelease='$DRelease', studio='$Studio', plot='$Plot' 
WHERE title='$MTitle';
"//add cover
;

if ($conn->query($sql) === TRUE) {
    echo "Successfully added to table!";
} else {
    echo "Error adding to table: " . $conn->error;
}

$conn->close();
?> 