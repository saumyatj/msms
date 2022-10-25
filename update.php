<?php
include 'Connection.php';
$id=$_GET['updateid'] ;
$sql ="SELECT  `school name`, `school address`,
 `landline number`, `mobile number`,
 `school type`, `zone`, `province` FROM `school_details` WHERE school_id=$id ";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
 $schoolname = $row['school name'];
 $Saddress =$row['school address'];
 $Land =$row['landline number'];
 $mobile =$row['mobile number'];
 $schooltype =$row['school type'];
 $zone =$row['zone'];
 $province=$row['province'];


if(isset ($_POST['submit'])){
  
  $schoolname = $_POST['schoolname'];
  $Saddress = $_POST['Saddress'];
  $Land = $_POST['Land'];
  $mobile = $_POST['mobile'];
  $schooltype = $_POST['schooltype'];
  $zone = $_POST['zone'];
  $province=$_POST['province'];

  $sql = "UPDATE `school_details` SET `school name` ='$schoolname',
  `school address` = '$Saddress',`landline number` ='$Land',`mobile number`= '$mobile',`school type`= '$schooltype',
  `zone`='$zone',`province`='$province' WHERE school_id=$id" ;
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
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="adddata.css">
  <link rel ="stylesheet" href="dashboard.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <style>
    .container2 {
      background-color: white;
      float:left;
      border-radius: 10px;
      height:500px;
      width:600px;
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
    </style>
</head>
<body>

<header><ul >
        <li><a  href="home.html">Home</a></li>
        <li><a class="active" href="index.php">Dashbord</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a  href="#about">About Us</a></li>
      </ul></header>

<form  method="POST">
<table cellpadding = "5" class="container2">

<!--------------------- First Name ------------------------------------------>
<tr>
<td colspan="2"><h3 align="center"> Update School Deatails</h3></td></tr>
<tr>
<td>School Name</td>
<td><input type="text" name="schoolname" maxlength="50" placeholder="School Name" autocomplete="off" 
value=<?php echo  $schoolname;  ?> > 

</td>
</tr>
<!------------------------ Last Name --------------------------------------->

<tr>
<td>Schoole Address</td>
<td><textarea id="Saddress" name="Saddress" rows="4" cols="50"> <?php echo $Saddress;?></textarea>

</td>

<tr>
    <td>Contact Number</td>
    <td><input type="tel" id="phone" name="Land" placeholder="Land line" value="<?php echo $Land;?> " required>
		
    </td>
    
</tr>

<tr>
    <td></td>
    <td>
		<input type="tel" id="phone" name="mobile" placeholder="mobile" value="<?php echo $mobile;?> " required>
    
    </td>
    
</tr>
    
    <br>
	
<tr>
<td>School Type</td>
<td>
<select id="Stypes" name="schooltype" >
  <option value="" <?php echo $schooltype==''?' selected':''?>>select school type </option>
  <option value="Type 1A, 1B" <?php echo $schooltype=='Type 1A, 1B'?' selected':''?>>Type 1A, 1B</option>
  <option value="Type 1C" <?php echo $schooltype=='Type 1C'?' selected':''?>>Type 1C</option>
  <option value="Type 2" <?php echo $schooltype=='Type 2'?' selected':''?>>Type 2</option>
  <option value="Type 3(i)"  <?php echo $schooltype=='Type 3(i)'?' selected':''?>>Type 3(i)</option>
  <option value="Type 3(ii)" <?php echo $schooltype=='Type 3(ii)'?' selected':''?> >Type 3(ii)</option>
<select>
</td>

<tr>
	<td>Zone</td>
    <td><input type="text" name="zone" maxlength="50" placeholder="Maharagama" value=<?php echo $zone;?>>
	
	</td>
    </tr>
	
	<tr>
	<td>Province</td>
    <td>  
      <select id="Stypes" name="province" >
      <option value="" <?php echo $province==''?'selected':''?> ></option>
      <option value="Estern Province" <?php echo $province=='Estern Province'?'selected':''?>>Estern Province</option>
      <option value="Western Province"<?php echo $province=='Western Province'?'selected':''?>>Western Province </option>
      <option value="Central Province" <?php echo $province=='Central Province'?'selected':''?>>Central Province</option>
      <option value="Northern Province" <?php echo $province=='Northern Province'?'selected':''?>>Northern Province</option>
      <option value="North western Province" <?php echo $province=='North western Province'?'selected':''?>>North western Province</option>
      <option value="North Central Province" <?php echo $province=='North Central Province'?'selected':''?>>North Central Province</option>
      <option value="Sabaragamuwa Province" <?php echo $province=='Sabaragamuwa Province'?'selected':''?>>Sabaragamuwa Province</option>
      <option value="Uva Province"<?php echo $province=='Uva Province'?'selected':''?> >Uva Province</option>
      <option value="Sourthern Province"<?php echo $province=='Sourthern Province'?'selected':''?> >Sourthern Province</option>
    <select>
	
	
	</td>
  </tr>
	
    

<!----------------------- Submit ,update and Reset ------------------------------->
<tr>
<td colspan="3" align="center">
<button type="submit" name="submit" class="btn btn-primary">update</button>
<input type="reset" value="Clear">

</td>
</tr>
</table>


</div>
</form>
</body>
</html>