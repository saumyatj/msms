 <?php
include 'Connection.php';

if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `school_details` WHERE school_id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:display.php');
    }else {
        die(mysqli_error($con));
    }
}

?>
