<?php
session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM registration WHERE id={$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>index</title>
<meta charset= "utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="index.css">
<link rel ="stylesheet" href="dashboard.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

body{
  background-image: url("backgroundimg-01.jpg");
}
     .container1 {
      background-color: rgb(255, 255, 255);
      border-radius: 5px;
      height: 350px;
    }
   

    .welcome 
    { 
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    width:auto;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
   
}

   
    </style>
</head> 
<body>


<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">SM System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Dashboard</a></li>
        <li><a href="display.php">School Deatails</a></li>
        <li><a href="prediction.html">Prediction System</a></li>
        <li><a href="stumarks.php"> Student Marks</a></li>
        <li><a href="index.html">LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <br><br>
      <h2 font color="white">Mathematics Students Managment system  </h2>
      <br>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="dashboard.php">Dashboard</a></li>
        <li><a href="display.php">School Deatails</a></li>
        <li><a href="prediction.html">Prediction System</a></li>
        <li><a href="stumarks.php">Student Marks</a></li>
        <li><a href="home.html">LogOut</a></li>
        
      </ul><br>
    </div>
    <br>
<div class="col-sm-9">
      <div class="welcome">
      <?php
if(isset($user)):?>

<h3>Hi <?= htmlspecialchars($user["full name"])?></h3>
<h3>occupation :<?= htmlspecialchars($user["occupation"])?></h3>
<!----------<p><a href="home.html">Log Out </a></p>
<?php else: ?>
<p><a href="login.php">Log In </a> Or <a href="register.html">Sign Up</a></p>
<?php endif; ?>
------->
</div>

<br>

</body>
</html> 