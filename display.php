<?php
include 'connection.php'
?>

<html>
<head>
<title>Dsipaly Data</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
  <style>
    .table{
      background-color:white;
      width:100%;
    
     
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
        <li><a href="home.html">Logout</a></li>
       
      </ul></header>
<h1 class="text-light">School Details</h1>
<table class="table">
  <thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">school name</th>
      <th scope="col">school address</th>
      <th scope="col">landline number</th>
      <th scope="col">Mobile number</th>
      <th scope="col">School type</th>
      <th scope="col">Zone</th>
      <th scope="col">province</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
$sql= " SELECT * FROM `school_details` ";
$result= mysqli_query($con,$sql);
if($result){
    while ($row = mysqli_fetch_assoc($result) ){
        $id=$row['school_id'];
        $schoolname = $row['school name'];
        $Saddress =$row['school address'];
        $Land =$row['landline number'];
        $mobile =$row['mobile number'];
        $schooltype =$row['school type'];
        $zone =$row['zone'];
        $province=$row['province'];

        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$schoolname.'</td>
        <td>'.$Saddress.'</td>
        <td>'.$Land.'</td>
        <td>'.$mobile.'</td>
        <td>'.$schooltype.'</td>
        <td>'.$zone.'</td>
        <td>'.$province.'</td>

        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        
        </td>
        ';
    }
}
?>

<!------------<button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>------------->
</tbdy>
</table>

<button class="btn btn-primary">  <a href = "add_new_school.php" class="text-light">Add New School Detail</a></button>
</body>

</html>

