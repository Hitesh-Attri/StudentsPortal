<?php

$clgid = $_POST['clgid'];
$pswrd = $_POST['pswd'];


$conn = new mysqli('localhost','root','','test');

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{

    $sql_query = "INSERT INTO login_page (clgid, pswd)
    VALUES ('$clgid','$pswrd')";

    if(mysqli_query($conn,$sql_query)){
        echo "New details entry inserted successfully";
    }   
    else{
        echo "error: " . $sql . "" . mysqli_error($conn);
    }
}


?>