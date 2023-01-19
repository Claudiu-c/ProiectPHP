<?php
$con=new mysqli('localhost','root','','desktop');
if(!$con){
    die(mysqli_error($con));
}
//echo "connected"
?>