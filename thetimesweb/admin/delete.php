<?php
include("connect.php");

$delete_id=$_GET['del'];
$delete_query= "delete from news where news_id='$delete_id'";
if(mysqli_query($delete_query)){
	echo "<script>window.open('index.php?deleted=Post has been deleted','_self')</script>";
}

?>