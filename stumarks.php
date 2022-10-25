
<!DOCTYPE html>
<html>
<head>
    <title>prediction page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel ="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="view_update_add.css">

    <link rel="stylesheet" href="predicton.css">
    </head>
<style>
.button{
  position: absolute;
  top: 29%;
  left: 38%;
}

</style>

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
                  <li><a href="schooldetails.html">School Deatails</a></li>
                  <li><a href="scldata.htm">Viwe Student Marks</a></li>
                  <li><a href="prediction.html">Prediction System</a></li>
                  <li><a href="stumarks.php">Upload Student Marks</a></li>
                  <li><a href="home.html">LogOut</a></li>
                </ul>
              </div>
            </div>
          </nav>
          
          <div class="container-fluid">
            <div class="row content">
              <div class="col-sm-3 sidenav hidden-xs">
                <ul class="nav nav-pills nav-stacked">
                  <br><br><br>
                  <li><a href="index.php">Dashboard</a></li>
                  <li><a href="display.php">School Deatails</a></li>
                  <li><a href="scldata.htm">Viwe Student Marks</a></li>
                  <li ><a href="prediction.html">Prediction System</a></li>
                  <li class="active"><a href="stumarks.php">Upload Student Marks</a></li>
                  <li><a href="home.html">LogOut</a></li>
                  
                </ul><br>
            </div> 
      <div class="container">


            <form action="upload.php" method="post" enctype="multipart/form-data">
              <input type="file" name="fileToUpload" id="fileToUpload">
              <input type="submit" value="Upload File" name="submit">
            </form>
            <br><br><br><br><br><br>
        <table>
          <tr>
            <th colspan="2" ><h3> Select the file to uplod  </h3></th>
          </tr>
        
          <tr>
            <th>File name</th>
            <td>
              <?php

                  $target_dir = "uploads/";
                  $myfiles = array_diff(scandir($target_dir), array('.', '..')); 
                    
                  foreach($myfiles as $filename){
                  // if(is_file($filename)){
                        echo $filename, '<br>'; 
                  // }   
                  }
              ?>
            </td>
          </tr>

        </table>
        
        
        <br><br><br>
        
      </div>

    </body>

</html>