<html>
<body>
<form action="ads1.php" method="post" enctype="multipart/form-data">
<table align="center" border="5">
<tr><td align="center" colspan="5"><h2>Insert Advertisment-1</h2></td></tr>
<tr>
   <td>Advertisment Image:</td>
   <td><input type="file" name="image"></td>
</tr>
<tr>
   <td>Advertisment url:</td>
   <td><input type="text" name="title"></td>
</tr>
<tr>
   <td align="center" colspan="5"><input type="submit" name="submit" value="Upload"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
include("includes/connect.php");

if(isset($_POST['submit'])){
   
   	$title= $_POST['title'];
	$date= date('y/m/d');
	
	//image name
	
    $image_name= $_FILES['image']['name'];
    
	
	//tmp name
	
    $image_tmp= $_FILES['image']['tmp_name'];
    
   
	
    if($title =='' or $image_name==''){
     	  echo "<script>alert('Any field is empty')</script>";
	      exit();
    }
    else{
		
		//uploading images in folder
		
		move_uploaded_file($image_tmp,"../images_ads1/$image_name");
		
		
		//uploading data into news data base
		
	$query="insert into ads1
	(ads1_href,ads1_date,ads1_img) values('$title','$date','$image_name')";
	$run= mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Post has been Published')</script>";
		echo "<script>window.open('index.php','_self')</script>";
    }
	}
	
}


?>