<html>
  <head></head>
<body>
<form method="post" action="insert_mobile.php" enctype="multipart/form-data">
<table align="center" border="10" width="800">
   <tr><td align="center" colspan="5" bgcolor="yellow" style="padding:5px"><h1>Mobile Information</h1></td></tr>
   <tr>
      <td align="right">Mobile Title:</td>   
      <td><input type="text" size="50" name="title"></td>   
   </tr>
   <tr>
      <td align="right">Mobile Image:</td>  
      <td><input type="file" name="image"></td>  
   </tr>
   <tr>
      <td align="right">Announced:</td>  
      <td><input type="text" size="50" name="announce_date"></td>
	  </tr>
   <tr>
      <td align="right">Launch:</td>  
      <td><input type="text" size="50" name="launch_date"></td>	  
   </tr>
   <tr>
      <td align="center" colspan="5" bgcolor="#00e673">Display</td>  
   </tr>
   <tr>
      <td align="right">Display Protection:</td>  
      <td><input type="text" size="50" name="display_protect"></td>
   </tr>
   <tr>
      <td align="right">Screen size:</td>
      <td><input type="text" name="screen_size"></td>
	</tr>
	<tr>
      <td align="right">Screen Resolution:</td>
      <td><input type="text" name="screen_resolution"></td>
	</tr>
	<tr>
      <td align="right">Screen Type:</td>
      <td><input type="text" name="screen_type"></td>
	</tr>
	<tr><td align="center" colspan="5" bgcolor="#00e673">Body</td></tr>
	<tr>
      <td align="right">Dimmension:</td>
      <td><input type="text" name="body_dimmension"></td>
	</tr>
	<tr>
      <td align="right">Weight:</td>
      <td><input type="text" name="body_weight"></td>
	</tr>
	<tr>
      <td align="right">body type:</td>
      <td><input type="text" name="body_type"></td>
	</tr>
	<tr><td align="center" colspan="5" bgcolor="#00e673">Camera</td></tr>
	<tr>
      <td align="right">Camera primary:</td>
      <td><input type="text" name="camera_primary"></td>
	</tr>
	<tr>
      <td align="right">Camera secondary:</td>
      <td><input type="text" name="camera_secondary"></td>
	</tr>
	<tr>
      <td align="right">Camera features:</td>
      <td><input type="text" name="camera_features"></td>
	</tr>
	<tr><td align="center" colspan="5" bgcolor="#00e673">Memory</td></tr>
	<tr>
      <td align="right">Internal Memory:</td>
      <td><input type="text" name="memory_internal"></td>
	</tr>
	<tr>
      <td align="right">Card slot:</td>
      <td><input type="text" name="memory_card"></td>
	</tr>
	<tr><td align="center" colspan="5" bgcolor="#00e673">Hardware</td></tr>
	<tr>
      <td align="right">Processor chipset:</td>
      <td><input type="text" name="processor_chipset" size="50"></td>
	</tr>
	<tr>
      <td align="right">Processor Speed:</td>
      <td><input type="text" name="processor_speed"></td>
	</tr>
	<tr>
      <td align="right">RAM:</td>
      <td><input type="text" name="ram"></td>
	</tr>
	<tr>
      <td align="right">CPU:</td>
      <td><input type="text" name="cpu" size="50"></td>
	</tr>
	<tr>
      <td align="right">GPU:</td>
      <td><input type="text" name="gpu"></td>
	</tr>
	<tr><td align="center" colspan="5" bgcolor="#00e673">Software</td></tr>
	<tr>
      <td align="right">Operating System:</td>
      <td><input type="text" name="os"></td>
	</tr>
	<tr><td align="center" colspan="5" bgcolor="#00e673">Connectivity</td></tr>
	<tr>
      <td align="right">Wifi:</td>
      <td><input type="text" name="wifi"></td>
	</tr>
	<tr>
      <td align="right">Bluetooth:</td>
      <td><input type="text" name="bluetooth"></td>
	</tr>
	<tr>
      <td align="right">Wifi Hotspot:</td>
      <td><input type="text" name="hotspot"></td>
	</tr>
	<tr>
      <td align="right">NFC:</td>
      <td><input type="text" name="nfc"></td>
	</tr>
	<tr>
      <td align="right">Infrared:</td>
      <td><input type="text" name="infrared"></td>
	</tr>
	<tr>
      <td align="right">USB:</td>
      <td><input type="text" name="usb"></td>
	</tr>
	<tr><td align="center" colspan="5" bgcolor="#00e673">SIM</td></tr>
	<tr>
      <td align="right">SIM type:</td>
      <td><input type="text" name="sim_type"></td>
    <tr>
	  <td align="right">Number of SIM:</td>
	  <td><input type="text" name="sim_no" placeholder="Number of sim"></td></tr>
	</tr>
	<tr>
      <td align="right">4G/LTE:</td>
      <td><input type="text" name="4g"></td>
	</tr>
	<tr>
      <td align="right">3G:</td>
      <td><input type="text" name="3g"></td>
	</tr>
	<tr>
      <td align="right">GSM/CDMA:</td>
      <td><input type="text" name="gsm_cdma"></td>
	</tr>
	<tr><td align="center" colspan="5" bgcolor="#00e673">Sensor</td></tr>
	<tr>
      <td align="right">Compass/Magnetometer:</td>
      <td><input type="text" name="compass"></td>
	</tr>
	<tr>
      <td align="right">Proximity Sensor:</td>
      <td><input type="text" name="proximity"></td>
	</tr>
	<tr>
      <td align="right">Accelerometer</td>
      <td><input type="text" name="accel"></td>
	</tr>
	<tr>
      <td align="right">Ambient Light Sensor:</td>
      <td><input type="text" name="ambient"></td>
	</tr>
	<tr>
      <td align="right">Gyroscope:</td>
      <td><input type="text" name="gyro"></td>
	</tr>
	<tr>
      <td align="right">Barrometer:</td>
      <td><input type="text" name="barro"></td>
	</tr>
	<tr>
      <td align="right">Temperature sensor:</td>
      <td><input type="text" name="temp"></td>
	</tr>
	<tr><td align="center" colspan="5" bgcolor="#00e673">Sound</td></tr>
	<tr>
      <td align="right">Loudspeaker:</td>
      <td><input type="text" name="loud"></td>
	</tr>
	<tr>
      <td align="right">3.5mm jack:</td>
      <td><input type="text" name="jack"></td>
	</tr>
	<tr><td align="center" colspan="5" bgcolor="#00e673">Battery</td></tr>
	<tr>
      <td align="right">Battery type:</td>
      <td><input type="text" name="battery"></td>
	</tr>
   <tr>
       <td align="right">Battery Capacity:</td>
       <td><input type="text" name="mah"></td>
   </tr>
   <tr>
      <td colspan="5" align="center" bgcolor="red"><input type="submit" name="submit" value="Publish Now"></td>
   </tr>

</table>
</form>
</body>
</html>

<?php
include("includes/connect.php");

if(isset($_POST['submit'])){
	$title= $_POST['title'];
	$date= date('d/m/y');
	
	//image name
	
    $image_name= $_FILES['image']['name'];
	
	//tmp name
	
    $image_tmp= $_FILES['image']['tmp_name'];
	
	$announce=$_POST['announce_date'];
	$launch=$_POST['launch_date'];
	//display features
	$dispro=$_POST['display_protect'];
	$dissize=$_POST['screen_size'];
	$disreso=$_POST['screen_resolution'];
	$distype=$_POST['screen_type'];
	//body features
	$bdim=$_POST['body_dimmension'];
	$bweight=$_POST['body_weight'];
	$btype=$_POST['body_type'];
	//camera features
	$cpri=$_POST['camera_primary'];
	$csec=$_POST['camera_secondary'];
	$cfeatures=$_POST['camera_features'];
	//memory features
	$minternal=$_POST['memory_internal'];
	$mcard=$_POST['memory_card'];
	//hardware features
	$hchipset=$_POST['processor_chipset'];
	$hspeed=$_POST['processor_speed'];
	$hram=$_POST['ram'];
	$hcpu=$_POST['cpu'];
	$hgpu=$_POST['gpu'];
	//operating system
	$os=$_POST['os'];
	//conectivity features
	$wifi=$_POST['wifi'];
	$bluetooth=$_POST['bluetooth'];
	$hotspot=$_POST['hotspot'];
	$nfc=$_POST['nfc'];
	$infrared=$_POST['infrared'];
	$usb=$_POST['usb'];
	//sim features
	$stype=$_POST['sim_type'];
	$sno=$_POST['sim_no'];
	$s4g=$_POST['4g'];
	$s3g=$_POST['3g'];
	$sgsm=$_POST['gsm_cdma'];
    //sensor features
	$scompass=$_POST['compass'];
	$sproximity=$_POST['proximity'];
	$saccel=$_POST['accel'];
	$sambient=$_POST['ambient'];
	$sgyro=$_POST['gyro'];
	$sbarro=$_POST['barro'];
	$stemp=$_POST['temp'];
	//sound features
	$loud=$_POST['loud'];
	$jack=$_POST['jack'];
	//battery features
	$battype=$_POST['battery'];
	$batcap=$_POST['mah'];
	
	
	if($title =='' or $cpri==''	){
     	  echo "<script>alert('Any field is empty')</script>";
	      exit();
    }
    else{
		
		//uploading images in folder
		
		move_uploaded_file($image_tmp,"../images_mobile/$image_name");
		
	$query="insert into mobile
	(mobile_title,mobile_date,mobile_img,mobile_announce,mobile_launch,mobile_disprotect,mobile_dissize,mobile_res,mobile_distype,mobile_bdim,mobile_bweight,mobile_btype,mobile_cpri,mobile_csec,mobile_cfeatures,mobile_minternal,mobile_mcard,mobile_hchip,mobile_hspeed,mobile_hram,mobile_hcpu,mobile_hgpu,mobile_os,mobile_wifi,mobile_bluetooth,mobile_hotspot,mobile_nfc,mobile_infrared,mobile_usb,mobile_simtype,mobile_simno,mobile_sim4g,mobile_3g,mobile_gsm,mobile_compass,mobile_proximity,mobile_accel,mobile_ambient,mobile_gyro,mobile_barro,mobile_temp,mobile_loud,mobile_35mm,mobile_battype,mobile_batcap) values('$title','$date','$image_name','$announce','$launch','$dispro','$dissize','$disreso','$distype','$bdim','$bweight','$btype','$cpri','$csec','$cfeatures','$minternal','$mcard','$hchipset','$hspeed','$hram','$hcpu','$hgpu','$os','$wifi','$bluetooth','$hotspot','$nfc','$infrared','$usb','$stype','$sno','$s4g','$s3g','$sgsm','$scompass','$sproximity','$saccel','$sambient','$sgyro','$sbarro','$stemp','$loud','$jack','$battype','$batcap')";
	$run= mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Post has been Published')</script>";
    }
	}
	
}







?>
