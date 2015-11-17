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

$MTitle=(isset($_POST['MTitle'])); 
$MRate=(isset($_POST['MRating'])); 
$Genre=(isset($_POST['Genre'])); 
$SRate=(isset($_POST['SRating'])); 
$Year=(isset($_POST['Year'])); 
$Runtime=(isset($_POST['Runtime'])); 
$TRelease=(isset($_POST['TRelease'])); 
$DRelease=(isset($_POST['DRelease'])); 
$Actors=(isset($_POST['Actors'])); 
//$=Save(isset($_POST['save']);// to upload image  
$Studio=(isset($_POST['Studio'])); 
$Plot=(isset($_POST['Plot'])); 
$Vtype=(isset($_POST['VType'])); 


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