<?php
include("index.php");
include("includes/connect.php");

    $edit_id = @$_GET['edit'];
	$query = "select * from news where news_id='$edit_id'";
	$run = mysqli_query($con,$query);
	while($row=mysqli_fetch_array($run)){
		   
		   $edit_id1=$row['news_id'];
		   $title=$row['news_title'];
		   $date=$row['news_date'];
		   $img1=$row['news_img1'];
		   $img2=$row['news_img2'];
		   $content1=$row['news_content1'];
		   $content2=$row['news_content2'];

?>
<html>
<body>
<form action="edit_news.php?edit_form=<?php echo $edit_id1;?>" method="post" enctype="multipart/form-data">
<table align="center" border="10" width="800">
  <tr>
    <td align="center" colspan="5" bgcolor="yellow"><h1> Edit News</h1></td>
  </tr>
  
  <tr>
    <td bgcolor="#00ccff" align="right">Post Title:</td>
    <td bgcolor="white"><input type="text" size="50" name="title" value="<?php echo $title; ?>"></td>
  </tr>
  
  <tr>
    <td bgcolor="#00ccff" align="right">Post Image 1:</td>
    <td bgcolor="white"><input type="file" name="image1">
	<img src="../images_news/<?php echo $img1; ?>" width="60" height="50">
	</td>
  </tr>
  
  <tr>
    <td bgcolor="#00ccff" align="right">Post Content 1:</td>
    <td bgcolor="white"><textarea name="content1" cols="40" rows="5"><?php echo $content1; ?></textarea></td>
  </tr>
  
  <tr>
    <td bgcolor="#00ccff" align="right">Post Image 2:</td>
    <td bgcolor="white"><input type="file" name="image2">
	<img src="../images_news/<?php echo $img2; ?>" width="60" height="50">
	</td>
  </tr>
  
  <tr>
    <td bgcolor="#00ccff" align="right">Post Content 2:</td>
    <td bgcolor="white"><textarea name="content2" cols="40" rows="5"><?php echo $content2; ?></textarea></td>
  </tr>
 
  <tr bgcolor="#00ccff">
    <td align="center" colspan="5"><input type="submit" name="update" value="Update Now"></td>
  </tr>
	<?php } ?>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['update'])){
	$update_id=$_GET['edit_form'];
	$update_date=date('y-m-d');
	$update_title=$_POST['title'];
	$update_img1=$_FILES['image1']['name'];
	$update_img2=$_FILES['image2']['name'];
	//tmp name
	$update_img1_tmp=$_FILES['image1']['tmp_name'];
	$update_img2_tmp=$_FILES['image2']['tmp_name'];
	    move_uploaded_file($update_img1_tmp,"../images_news/$update_img1");
		move_uploaded_file($update_img2_tmp,"../images_news/$update_img2");
	
	$update_content1=$_POST['content1'];
	$update_content2=$_POST['content2'];
	
	$update_query="update news set news_title='$update_title',news_date='$update_date',news_img1='$update_img1',news_content1='$update_content1',news_img2='$update_img2',news_content2='$update_content2' where news_id='$update_id' ";
	
	if(mysqli_query($con,$update_query)){
		echo "<script>alert('Post has been updated')</script>" ;
		
	}
}





?>





























