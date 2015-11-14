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

// sql to insert into table
$sql = "INSERT INTO Movies (title, genre, actors, MPAA, relType, stars, runtime, theatRelese, homeRelease, cover, studio, plot)
Values (,,,,) "//add values later
;

if ($conn->query($sql) === TRUE) {
    echo "Successfully added to table!";
} else {
    echo "Error adding to table: " . $conn->error;
}

$conn->close();
?> 