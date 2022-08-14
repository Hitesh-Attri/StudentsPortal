<?php

    $collegeID = $_POST['collegeID'];
    $Name = $_POST['name'];
    $emailID = $_POST['emailID'];
    $password = $_POST['password'];


    $con = new mysqli("localhost","root","","logins");

    if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
		$stmt = $con->prepare("insert into reg4 (collegeID,Name,emaiID, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", NULL, $collegeID, $Name, $emailID, $password);
		$stmt->execute();
		// $execval = $stmt->execute();
		// echo $execval;
		echo "Registration successfully...";
        echo '<a href="login_reg.html" >LOGIN</a>';
		$stmt->close();
		$con->close();
	}
?>
