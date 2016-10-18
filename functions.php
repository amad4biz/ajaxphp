<?php 

/*$servername = "localhost:81";
$username = "username";
$password = "";
*/
// Create connection
$conn = mysqli_connect("localhost", "root", "", "twitterdb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>