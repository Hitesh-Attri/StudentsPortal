<?php
    $clgid = $_POST['clgid'];
    $pswd = $_POST['pswd'];

    $con = new mysqli("localhost","root","","logins");
    if($con->connect_error){
        die("Failed to connect: ".$con->connect_error);
    }
    else{
        $stmt = $con->prepare("select * from reg4 where collegeID = ?");
        $stmt->bind_param("s", $clgid);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $pswd){
                echo '<h2> Login Successful <br> <a href="home.html">Click here</a> ';
            }else{
                echo "<h2> Invalid Email or password <h2>";
                echo '<br> <a href="index.html">Go to Students Portal</a>';
            }
        }
        else{
            echo "<h2> Invalid Email or password <h2>";
            echo '<br> <a href="index.html">Go to Students Portal</a>';
        }
    }
?>