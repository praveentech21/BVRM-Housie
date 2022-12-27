<?php
echo "Jai Sri Ram";
$con=new mysqli("43.250.40.60","bo_housie","bo_housie@421","srkr_housie");
if($con){
    echo "Ohm Namo Shivaya";
    if($_POST['submit']){
        echo "jai Sri ram Jai Jai Sri Ram";
        $pid = $_POST['pid'];
        $name = $_POST['name'];
        $place = $_POST['place'];
        $pin = $_POST['pin'];
        $status = $_POST['status'];
        $quary = "insert into players ('pid','player_name','place','pin','status') values ('$pid','$name','$place','$pin',$status)";
        $run = mysqli_query($con, $quary);
        if($run){
            echo "Jai Jai Bhavani";
        }
    }
}
?>
 