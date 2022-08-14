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


    $title = $_POST['title'];
    $task = $_POST['task'];
    // $emailID = $_POST['emailID'];
    // $password = $_POST['password'];


    // $sql = "INSERT INTO students (`sr`, `fname`, `lname`)  VALUES (NULL, '$fname', '$lname')";
    $sql = "INSERT INTO `tasks` (`id`,`Title`, `Task`) VALUES (NULL,'$title', '$task')";

    if ($conn->query($sql) === TRUE) {
        echo "Task Submitted successfully!!<br>";
        echo '<a href="taskManager.php" >New Task?</a><br>';
        echo '<a href="home.html" >Home?</a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

?>