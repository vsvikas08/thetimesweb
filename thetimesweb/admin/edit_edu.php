<?php
include("index.php");
include("includes/connect.php");

    $edit_id = @$_GET['edit'];
	$query = "select * from edu where edu_id='$edit_id'";
	$run = mysqli_query($con,$query);
	while($row=mysqli_fetch_array($run)){
		   
		   $edit_id1=$row['edu_id'];
		   $title=$row['edu_title'];
		   $date=$row['edu_date'];
		   $img1=$row['edu_img'];
		   $content1=$row['edu_content'];

?>
<html>
<body>
<form action="edit_edu.php?edit_form=<?php echo $edit_id1;?>" method="post" enctype="multipart/form-data">
<table align="center" border="10" width="800">
  <tr>
    <td align="center" colspan="5" bgcolor="yellow"><h1> Edit Education News</h1></td>
  </tr>
  
  <tr>
    <td bgcolor="#00ccff" align="right">Post Title:</td>
    <td bgcolor="white"><input type="text" size="50" name="title" value="<?php echo $title; ?>"></td>
  </tr>
  
  <tr>
    <td bgcolor="#00ccff" align="right">Post Image:</td>
    <td bgcolor="white"><input type="file" name="image">
	<img src="../images_edu/<?php echo $img1; ?>" width="60" height="50">
	</td>
  </tr>
  
  <tr>
    <td bgcolor="#00ccff" align="right">Post Content:</td>
    <td bgcolor="white"><textarea name="content" cols="40" rows="5"><?php echo $content1; ?></textarea></td>
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
	$update_img=$_FILES['image']['name'];
	//tmp name
	$update_img_tmp=$_FILES['image']['tmp_name'];
	    move_uploaded_file($update_img_tmp,"../images_edu/$update_img");
	
	$update_content=$_POST['content'];
	
	$update_query="update edu set edu_title='$update_title',edu_date='$update_date',edu_img='$update_img',edu_content='$update_content' where edu_id='$update_id' ";
	
	if(mysqli_query($con,$update_query)){
		echo "<script>alert('Post has been updated')</script>" ;
		
	}
}





?>





























