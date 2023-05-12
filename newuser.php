<?php
$con = new mysqli("localhost", "root", "", "srkr_housie");
if ($_POST['submit']) {
    $pid = $_POST['pid'];
    $name = $_POST['name'];
    $place = $_POST['place'];
    $quary = "insert into players (`pid`,`player_name`,`place`,`pin`,`status`) VALUES ('$pid','$name','$place',2023,1);";
    $run = mysqli_query($con,$quary);
    if($run){
        echo "<script>alert('Data Entered Sucessfully')</script>";
    }
    
}
?>