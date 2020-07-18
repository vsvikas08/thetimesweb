<?php
include("includes/connect.php");

$delete_id=$_GET['del'];
$delete_query= "delete from ads4 where ads4_id='$delete_id'";
if(mysqli_query($con,$delete_query)){
	echo "<script>window.open('index.php?ads4view=ads4view','_self')</script>";
}

?>