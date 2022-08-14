<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// $servername = "localhost";
// $username = "id19387990_logins_h";
// $password = "2k@gF=bV=pNO5Fhx";
// $dbname = "id19387990_logins";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id=$_GET['id'];

$query = "DELETE FROM tasks WHERE id = '$id'";

$data = mysqli_query($conn,$query);

if($data){
    echo "<font color = 'green'> Record deleted!!<br>";
    echo "<a href='taskManager.php'>Refresh</a>";
}
else{
    echo " <font color = 'red'>Failed to delete the record!<br>";
    echo "<a href='taskManager.php'>Refresh</a>";
}


?>