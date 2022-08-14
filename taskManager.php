<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author1" content="Aashnaa, missaashnaa1@gmail.com">
  <meta name="author2" content="Hitesh, hiteshatttri71@gmail.com">
  <meta name="designer" content="Aashnaa, Hitesh">
  <meta name="copyright" content="">
  <meta name="reply-to" content="hiteshatttri71.com">
  <meta name="owner" content="&copy;A_H">
  <meta name="summary" content="webpage for students, notes, other info">
  <title>Tasks</title>
  <link rel="icon" href="tm.png" type="image/icon type">
  <link rel="stylesheet" href="css_task.css">

  <style>
    body{
        background-image: url('tsk.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    /* .navbar{
      background-color: #596270;
    } */

  
  
</style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <!-- <script>
    window.alert("DO NOT LEAVE THE PAGE, ELSE YOU'LL HAVE TO LOGIN AGAIN!! ");
  </script> -->
  <nav class="navbar navbar-expand-lg bg-light ">
    <div class="container-fluid">
      <a class="navbar-brand navbar-nav mr-auto" href="index.html">Students Portal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav navlist">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutUs.html">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="login_reg.html">Log Out</a></li>
              <li><button class="dropdown-item"><a class="dropdown-item" href="#">test</a></button></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
  <div class="form-box">
    <form id="login" class="input-group" action="tastM.php" method="post">
        <input type="text" class="input-field" name="title" placeholder="Title" required> 
        <br>
        <textarea rows="5" cols="20" name="task" class="input-field" placeholder="Enter your task" required></textarea>
        <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
  <br>
  <div class="task-table">
    <h5>Tasks----></h5>
    <table class="table1">
      <tr>
        <th class="th1">ID</th>
        <th class="th2">Title</th>
        <th class="th3">Task</th>
        <th class="th4" ><img src="deleteW.jpg" width="20px" alt=""></th>
      </tr>
      <?php
        $conn = mysqli_connect("localhost", "root", "", "test");
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id, Title, Task FROM tasks";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        $disp_id = 1;
        //<td>" . $row["id"]. "</td>
        while($row = $result->fetch_assoc()) {
        echo "
          <tr>
            <td>" . $disp_id. "</td>
            <td>" . $row["Title"] . "</td>
            <td>". $row["Task"]. "</td>
            <td><a href='delete.php?id=$row[id]'>Delete</a></td></tr>";
            $disp_id = $disp_id + 1;
        }
        echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        ?>
    </table>
    <br>
    <!-- <form action="get_task_data.php">
      <button type="submit">Show Tasks</button>
    </form> -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>