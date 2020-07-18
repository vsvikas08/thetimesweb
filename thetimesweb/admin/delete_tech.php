<?php
include("includes/connect.php");

$delete_id=$_GET['del'];
$delete_query= "delete from tech where tech_id='$delete_id'";
if(mysqli_query($con,$delete_query)){
	echo "<script>window.open('index.php?tview=tview','_self')</script>";
}

?>