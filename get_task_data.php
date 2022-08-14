<?php
        $conn = mysqli_connect("localhost","root", "", "test");
        if( $conn-> connect_error){
          die("Connection failed:" . $conn-> connect_error);
        }
        $sql = "SELECT id, Title, Task from tasks";
        $result = $conn-> query($sql);

        if( $result->num_rows > 0){
          while($row = $result-> fetch_assoc()){
            echo "<tr><td>".$row["id"]."</td><td>".$row["Title"]."</td><td>".$row["Task"]."</td></tr>";
          }
          echo "</table>";
        }
        else{
          echo "0 result";
        }
        $conn-> close();
?>