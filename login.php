<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $mysqli= require __DIR__ . "\database.php";
    $sql  = sprintf("SELECT * FROM registration WHERE email= '%s'",
    $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query ($sql);

    $user = $result->fetch_assoc();

    if($user){
        if(password_verify($_POST["psw"],$user["password"])){
           session_start();
           session_regenerate_id();
           $_SESSION["user_id"] = $user["id"];
           header("location:index.php");
           exit;
        }
    }
    $is_invalid = true;
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Login page</title>
<meta charset= "utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<style>

  body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url("backgroundimg-01.jpg");
    background-size: 100%;
    background-repeat:repeat;

  }
  .form{
    position: absolute;
    top: 30%;
    left: 30%;
    padding-left: 4%;
    padding-right: 6% ;
      background-color: white;
      width: 531px;
      height: auto;
      align-items: center;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
      
    
}

  /*navigation bar */

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover:not(.active) {
    background-color: #111;
  }
  
  .active {
    background-color: #0d5483;
  }
/*registration btn*/

  .registerbtn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 44%;
    height:50%;
    opacity: 0.9;
    border-radius: 25px;
    
  }

  .registerbtn:hover {
    opacity: 1;
  }

  h2{
    text-align: center;
  }

  .container_register1{
    padding: 16px;
    width: 516px;
    height: auto ;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}
.last{
text-align: center;
}

 p {
  padding-right: 38px;
}
</style>
</head>
<body>

<header><ul >
        <li><a  href="home.html">Home</a></li>
        <li><a class="active" href="login.php">Dashbord</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a  href="about.html">About Us</a></li>
      </ul></header>
<div class="form">
<h2>Login</h2> 

    <form  method="post">
        <table>
            <tr>
            <th> <label><b>Email</b></label></th>
            <th><input type="text" placeholder="Enter Email" name="email"  id="email" 
                value="<?=htmlspecialchars($_POST["email"]??"")?>"></th>
            </tr>   
            <tr>
                <th><label><b>Password</b></label></th>
                <th><input type="password" placeholder="Enter Password" name="psw" id="psw"></th>
            </tr>
        <tr>
        <th colspan="2" class="last"><button type="submit" name="submit" class="btn btn-primary" class="text-light">Logon</button>
        </tr>
        <tr>
            <th colspan="2" class="last">
            <div class="container_register1">  
            <p>Don't have an account?<a href="register.html">Register now</a>.</p>
            </div>
         </th>
        </tr>
        
      </form>
      </table>
</div>
</body>

</html>