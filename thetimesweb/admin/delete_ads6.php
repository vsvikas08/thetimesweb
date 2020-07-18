<?php
include("includes/connect.php");

$delete_id=$_GET['del'];
$delete_query= "delete from ads6 where ads6_id='$delete_id'";
if(mysqli_query($con,$delete_query)){
	echo "<script>window.open('index.php?ads6view=ads6view','_self')</script>";
}

?>