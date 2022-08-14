<?php
    $collegeID = $_POST['collegeID'];
    $name = $_POST['name'];
    $emailID = $_POST['emailID'];
    $password = $_POST['password'];
    
    $conn = new mysqli("localhost","root","","logins");

    // if(mysqli_connect_error()){
    //     die('connect error('. mysqli_connect_errno().')'. mysqli_connect_error());
    // }
    // else{
    //     $INSERT = "INSERT Into reg_p (collegeID, name, emailID, password) values(? ,?, ?, ?)";
    // }

    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(collegeID, name,ID, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",NULL, $collegeID, $name, $emailID, $password,);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>