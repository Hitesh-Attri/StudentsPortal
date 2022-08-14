<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$conn = new mysqli('localhost','root','','test');

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{

    $sql_query = "INSERT INTO registration (firstName, lastName, gender, email, password, number)
    VALUES ('$firstName','$lastName','$gender', '$email','$password','$number')";

    if(mysqli_query($conn,$sql_query)){
        echo "New details entry inserted successfully";
    }   
    else{
        echo "error: " . $sql . "" . mysqli_error($conn);
    }
}


?>