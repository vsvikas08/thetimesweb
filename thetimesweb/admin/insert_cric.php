<html>
  <head>
      <title>Insert new Cricket News</title>
	  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
   <script>tinymce.init({ selector:'textarea' });</script>
  </head>
<body>
<h4>Insert image at low size not more than 50kb. </h4>
<form action="insert_cric.php" method="post" enctype="multipart/form-data">
<table align="center" border="10" width="800">
  <tr>
    <td align="center" colspan="5" bgcolor="yellow"><h1> Insert new Cricket News</h1></td>
  </tr>
  
  <tr>
    <td align="right">Post Title:</td>
    <td><input type="text" size="50" name="title"></td>
  </tr>
  
  <tr>
    <td align="right">Post Image 1:</td>
    <td><input type="file" name="image1"></td>
  </tr>
  
  <tr>
    <td align="right">Post Content 1:</td>
    <td><textarea name="content1" cols="40" rows="5"></textarea></td>
  </tr>
  
  <tr>
    <td align="right">Post Image 2:</td>
    <td><input type="file" name="image2"></td>
  </tr>
  
  <tr>
    <td align="right">Post Content 2:</td>
    <td><textarea name="content2" cols="40" rows="5"></textarea></td>
  </tr>
  
  <tr>
    <td align="right">Post Image 3:</td>
    <td><input type="file" name="image3"></td>
  </tr>
  
  <tr>
    <td align="right">Post Content 3:</td>
    <td><textarea name="content3" cols="40" rows="5"></textarea></td>
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
	
	//image name
	
    $image_name1= $_FILES['image1']['name'];
    $image_name2= $_FILES['image2']['name'];
    $image_name3= $_FILES['image3']['name'];
	
	//content name
	
    $content1= $_POST['content1'];
    $content2= $_POST['content2'];
    $content3= $_POST['content3'];
	
	//tmp name
	
    $image_tmp1= $_FILES['image1']['tmp_name'];
    $image_tmp2= $_FILES['image2']['tmp_name'];
    $image_tmp3= $_FILES['image3']['tmp_name'];
    
   
	
    if($title =='' or $content1 ==''){
     	  echo "<script>alert('Any field is empty')</script>";
	      exit();
    }
    else{
		
		//uploading images in folder
		
		move_uploaded_file($image_tmp1,"../images_cric/$image_name1");
		move_uploaded_file($image_tmp2,"../images_cric/$image_name2");
		move_uploaded_file($image_tmp3,"../images_cric/$image_name3");
		
	$query="insert into cric
	(cric_title,cric_date,cric_img1,cric_content1,cric_img2,cric_content2,cric_img3,cric_content3) values('$title','$date','$image_name1','$content1','$image_name2','$content2','$image_name3','$content3')";
	$run= mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Post has been Published')</script>";
		echo "<script>window.open('index.php','_self')</script>";
    }
	}
	
}


?>















