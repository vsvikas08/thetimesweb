<?php
include("includes/connect.php");

$delete_id=$_GET['del'];
$delete_query= "delete from edu where edu_id='$delete_id'";
if(mysqli_query($con,$delete_query)){
	echo "<script>window.open('index.php?eview=eview','_self')</script>";
}

?>