<?php
include("includes/connect.php");

$delete_id=$_GET['del'];
$delete_query= "delete from ads2 where ads2_id='$delete_id'";
if(mysqli_query($con,$delete_query)){
	echo "<script>window.open('index.php?ads2view=ads2view','_self')</script>";
}

?>