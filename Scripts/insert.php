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

/*if () == TRUE) {
    echo "There is already a move with that name!";
} */

$MTitle=($_GET['MTitle']); 
/*$MRate=($_GET['MRating']); */
$Genre=($_GET['Genre']); 
/*$SRate=($_GET['SRating']); */
$Year=($_GET['Year']); 
$Runtime=($_GET['Runtime']); 
$TRelease=($_GET['TRelease']); 
$DRelease=($_GET['DRelease']); 
$Actors=($_GET['Actors']); 
/*$=Save($_GET['save']); // to upload image   */
$Studio=($_GET['Studio']); 
$Plot=($_GET['Plot']); 
/*$Vtype=($_GET['VType']); */


// sql to insert into table 																							add cover (upload image)
$sql = "INSERT INTO Movie (title, genre, actors, MPAA, relType, stars, runtime, theatRelease, homeRelease, studio, plot)
VALUES ('$MTitle','$Genre','$Actors','$MRate','$Vtype','$SRate','$Runtime','$TRelease','$DRelease','$Studio','$Plot') "//add cover
;

if ($conn->query($sql) === TRUE) {
    echo "Successfully added to table!";
} else {
    echo "Error adding to table: " . $conn->error;
}

$conn->close();
?> 