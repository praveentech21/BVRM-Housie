<?php
$con = new mysqli("localhost", "root", "", "srkr_housie");
if ($_POST['submit']) {
    $pid = $_POST['pid'];
    $name = $_POST['name'];
    $place = $_POST['place'];
    $pin = $_POST['pin'];
    $status = $_POST['status'];
    $quary = "insert into players (`pid`,`player_name`,`place`,`pin`,`status`) VALUES ('$pid','$name','$place','$pin',$status);";
    $run = mysqli_query($con,$quary);
    if($run){
        echo "<script>alert('Data Entered Sucessfully')</script>";
        // header("Location:newuser.html");
    }
}
?>