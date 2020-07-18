<?php
include("includes/connect.php");

$delete_id=$_GET['del'];
$delete_query= "delete from ads1 where ads1_id='$delete_id'";
if(mysqli_query($con,$delete_query)){
	echo "<script>window.open('index.php?ads1view=ads1view','_self')</script>";
}

?>