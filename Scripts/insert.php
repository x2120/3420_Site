<?php
$servername = "localhost";
$username = "justinvuong";
$password = "";
$dbname = "justinvuong";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//compare table values if 2 are the same spits out an error

if () == TRUE) {
    echo "There is already a move with that name!";
} 

$MTitle=$_POST['MTitle']; 
$MRate=$_POST['MRating']; 
$Genre=$_POST['Genre']; 
$SRate=$_POST['SRating']; 
$Year=$_POST['Year']; 
$Runtime=$_POST['Runtime']; 
$TRelease=$_POST['TRelease']; 
$DRelease=$_POST['DRelease']; 
$Actors=$_POST['Actors']; 
//$=Save$_POST['save'];// to upload image  
$Studio=$_POST['Studio']; 
$Plots=$_POST['Plot']; 
$Vtype=$_POST['VType']; 


// sql to insert into table
$sql = "INSERT INTO Movies (title, genre, actors, MPAA, relType, stars, runtime, theatRelese, homeRelease, cover, studio, plot)
VALUES ('$MTitle','$Genre','$Actors','$MRate','$Vtype','$SRate','','','','','') "//add values later
;

if ($conn->query($sql) === TRUE) {
    echo "Successfully added to table!";
} else {
    echo "Error adding to table: " . $conn->error;
}

$conn->close();
?> 