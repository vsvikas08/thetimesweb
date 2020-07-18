<?php
include("includes/connect.php");

$delete_id=$_GET['del'];
$delete_query= "delete from news where news_id='$delete_id'";
if(mysqli_query($con,$delete_query)){
	echo "<script>window.open('index.php?nview=nview','_self')</script>";
}

?>