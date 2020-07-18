<?php
include("includes/connect.php");

$delete_id=$_GET['del'];
$delete_query= "delete from ads5 where ads5_id='$delete_id'";
if(mysqli_query($con,$delete_query)){
	echo "<script>window.open('index.php?ads5view=ads5view','_self')</script>";
}

?>