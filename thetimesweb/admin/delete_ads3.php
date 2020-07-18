<?php
include("includes/connect.php");

$delete_id=$_GET['del'];
$delete_query= "delete from ads3 where ads3_id='$delete_id'";
if(mysqli_query($con,$delete_query)){
	echo "<script>window.open('index.php?ads3view=ads3view','_self')</script>";
}

?>