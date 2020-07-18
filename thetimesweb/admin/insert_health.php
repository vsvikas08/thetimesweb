<html>
  <head>
      <title>Insert new Health News</title>
	  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
   <script>tinymce.init({ selector:'textarea' });</script>
  </head>
<body>
<h4>Insert image at low size not more than 50kb. </h4>
<form action="insert_health.php" method="post" enctype="multipart/form-data">
<table align="center" border="10" width="800">
  <tr>
    <td align="center" colspan="5" bgcolor="yellow"><h1> Insert new Health News</h1></td>
  </tr>
  
  <tr>
    <td align="right">Post Title:</td>
    <td><input type="text" size="50" name="title"></td>
  </tr>
  
  <tr>
    <td align="right">Post Image:</td>
    <td><input type="file" name="image"></td>
  </tr>
  
  <tr>
    <td align="right">Post Content:</td>
    <td><textarea name="content" cols="40" rows="30"></textarea></td>
  </tr>
  
  <tr>
    <td align="center" colspan="5"><input type="submit" name="submit" value="Publish Now"></td>
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
    $image_name= $_FILES['image']['name'];
    $content= $_POST['content'];
    $image_tmp= $_FILES['image']['tmp_name'];
    $image_size= $_FILES['image']['size'];
    $image_type= $_FILES['image']['type'];
   
	
    if($title =='' or $content ==''){
     	  echo "<script>alert('Any field is empty')</script>";
	      exit();
    }
    
	if($image_type=="image/jpeg" or "image/jpg" or $image_type=="image/gif" or $image_type=="image/png"){
		if($image_size<=500000){
		move_uploaded_file($image_tmp,"../images_health/$image_name");
		}
		else{
			echo "<script>alert('Image is larger in size')</script>";
		}
		
	}
	 else{
			echo "<script>alert('Image type is invalid')</script>";
		}
	$query="insert into health
	(health_title,health_date,health_img,health_content) values('$title','$date','$image_name','$content')";
	if(mysqli_query($con,$query)){
		echo "<center><h1>Post has been Published</h1></center>";
		echo "<script>window.open('index.php','_self')</script>";
    }
	
	
}


?>















