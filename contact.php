<!doctype html>
<html lang="en">
  <head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="homepage.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<style>
.contactform{
    background-color: white;
    padding: 25px;
    border-radius: 15px;
}
.contact-table-right{
    width: auto;
    height: auto;
}
.contact-title p{
    color: white;
    font-size: 19px;
} 
</style>
  </head>

  <body>

    <header><ul >
        <li><a  href="home.html">Home</a></li>
        <li><a href="login.php">Dashbord</a></li>
        <li><a class="active" href="contact.php">Contact Us</a></li>
        <li><a  href="about.html">About Us</a></li>
      </ul>
    </header>

    <section id="contact-table">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="contact-table-area">
            
               <div class="contact-title">
                 <h2>Contact Us </h2>
                 <p align="center" >To contact us you can send us a massage with your idea. Please free to fill the table and submit the form below </p>
               </div>
        
               <div class="contact-table-content">           
                 <div class="row">
                   <div class="col-md-6">
                     <div class="contact-table-left">

<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "msms";

$conn = mysqli_connect($server , $username , $password , $dbname);

//insert
$errorfound = false;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit' )

{

    if(!(isset($_POST['name']) && $_POST['name'] != '')){
      echo("Name is required <br>");
      $errorfound = true;
    }

    if(!(isset($_POST['email']) && $_POST['email'] != '')){
      echo("email is required <br>");
      $errorfound = true;
    }

    if(!(isset($_POST['subject']) && $_POST['subject'] != '')){
      echo("subject is required <br>");
      $errorfound = true;
    }

    if(!(isset($_POST['message']) && $_POST['message'] != '')){
      echo("message is required <br>");
      $errorfound = true;
    }
      
	if($errorfound === false){
	
    $name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
	
		$query = "INSERT INTO  contact_page (`name`,`email`,`subject`,`Message`) 
    VALUES('$name', '$email' , '$subject' , '$message' )";
	
		$run = mysqli_query($conn,$query) or die(mysqli_error());
	
		
		if($run){
			echo "<script>alert('Data Added Succusfully')</script>";
		}
		else{
			echo "Data not added";
		}
	}
	else{
		echo " all fields required";
	}
}

?>
<form class="contactform" method="post">
<table>
  <tr>
  <th>Name</th>
  <td><input type="text" required="required" size="30" value="" name="name"></td>
  </tr>
  <tr>
  <th>Email</th>
  <td><input type="email" required="required" aria-required="true" value="" name="email" size="30" ></td>
  </tr>
  <tr>
    <th>Subject</th>
    <td><input type="text" name="subject" size="30" ></td>
  </tr>
  <tr>
    <th>Message</th>
    <td><textarea required="required" aria-required="true" rows="8" cols="45" name="message"></textarea></td>
  </tr>
</table>                  
<p class="form-submit">
<button value="submit" type="submit" name="submit" class="btn btn-primary">Submt</button>
</p>        
</form>
 </div>
 </div>
 <div class="col-md-6">
 <div class="contact-table-right">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9975958856376!2d79.92697171409532!3d6.890889620696603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae250afe624020d%3A0xe7203be66ee3c329!2sMinistry%20of%20Education%20Isurupaya!5e0!3m2!1sen!2slk!4v1666463704418!5m2!1sen!2slk" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
       
  <footer>

  </footer>
  </body>

  </html>