<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "logins";

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


    $collegeID = $_POST['collegeID'];
    $name = $_POST['name'];
    $emailID = $_POST['emailID'];
    $password = $_POST['password'];


    // $sql = "INSERT INTO students (`sr`, `fname`, `lname`)  VALUES (NULL, '$fname', '$lname')";
    $sql = "INSERT INTO `reg4` (`id`, `collegeID`, `name`, `emaiID`, `password`) VALUES (NULL,'$collegeID', '$name', '$emailID', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo '<a href="login_reg.html" >LOGIN</a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

?>