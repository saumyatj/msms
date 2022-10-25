<?php
include 'Connection.php';
if(isset ($_POST['submit'])){
  
  $schoolname = $_POST['schoolname'];
  $Saddress = $_POST['Saddress'];
  $Land = $_POST['Land'];
  $mobile = $_POST['mobile'];
  $schooltype = $_POST['schooltype'];
  $zone = $_POST['zone'];
  $province=$_POST['province'];

  $sql = "INSERT INTO `school_details`(`school_id`, `school name`, `school address`, `landline number`, `mobile number`, `school type`, `zone`, `province`) 
  VALUES ('','$schoolname','$Saddress',' $Land','$mobile','$schooltype','$zone','$province') " ;
  $result = mysqli_query($con,$sql);
  if ($result){
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}
?>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

  <link rel="stylesheet" href="homepage.css">
  <link rel ="stylesheet" href="dashboard.css">
  <style>

    .container2 
    {
      background-color: white;
      float:left;
      border-radius: 10px;
      height:500px;
      width:600px;
    }
    form {
    position: absolute;
    right: 0%;
    left: 30%;
    width: fit-content;
   
}
td,th{
  padding: 10px;
}
    
    </style>
</head>
<body>
<header>
  <ul >
        <li><a  href="home.html">Home</a></li>
        <li><a class="active" href="index.php">Dashbord</a></li>
        <li><a href="home.html">Logout</a></li>     
  </ul>
</header>

<form  method="POST">
<table cellpadding = "5" class="container2">

<!--------------------- First Name ------------------------------------------>
<tr>
<td colspan="2"><h3 align="center"> Update School Deatails</h3></td></tr>
<tr>
<td>School Name</td>
<td><input type="text" name="schoolname" maxlength="50" placeholder="School Name" />

</td>
</tr>
<!------------------------ Last Name --------------------------------------->

<tr>
<td>School Address</td>
<td><textarea id="Saddress" name="Saddress" rows="4" cols="50" > </textarea>

</td>

<tr>
    <td>Contact Number</td>
    <td><input type="tel" id="phone" name="Land" placeholder="Land line number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
		
    </td>
    
</tr>

<tr>
    <td></td>
    <td>
		<input type="tel" id="phone" name="mobile" placeholder="mobile number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
    
    </td>
    
</tr>
    
    <br>
	
<tr>
<td>School Type</td>
<td>
<select id="Stypes" name="schooltype" >
  <option value="" selected > </option>
  <option value="Type 1A, 1B">Type 1A, 1B</option>
  <option value="Type 1C">Type 1C</option>
  <option value="Type 2">Type 2</option>
  <option value="Type 3(i)" >Type 3(i)</option>
  <option value="Type 3(ii)" >Type 3(ii)</option>
<select>
</td>

<tr>
	<td>Zone</td>
    <td><input type="text" name="zone" maxlength="50" placeholder="type your zone"/>
	
	</td>
    </tr>
	
	<tr>
	<td>Province</td>
    <td>  
      <select id="Stypes" name="province" >
      <option value="" selected ></option>
      <option value="Estern Province">Estern Province</option>
      <option value="Western Province">Western Province </option>
      <option value="Central Province">Central Province</option>
      <option value="Northern Province" >Northern Province</option>
      <option value="North western Province" >North western Province</option>
      <option value="North Central Province" >North Central Province</option>
      <option value="Sabaragamuwa Province" >Sabaragamuwa Province</option>
      <option value="Uva Province" >Uva Province</option>
      <option value="Sourthern Province" >Sourthern Province</option>
    <select>
	
	
	</td>
  </tr>
	
    

<!----------------------- Submit ,update and Reset ------------------------------->
<tr>
<td colspan="3" align="center">
<button type="submit" name="submit" class="btn btn-primary">Submt</button>
<input type="reset" value="Clear">

</td>
</tr>
</table>


</div>
</form>
</body>
</html>