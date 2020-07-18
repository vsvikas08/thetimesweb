<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header("location:login.php");
  }
  else{
	
?>
<html>
    <head>
	 <title>Welcome to admin Pannel</title>
	 <style>
	    body{
			background:gray;
		}
	    .top{
			background:#00cc00;
			color:#fff;
			width:100%;
			height:100px;
			padding-top:10px;
			font-family:sans-serif;
		}
		.aside{
			float:left;
			background:black;
			color:#fff;
			width:300px;
			height:1200px;
			margin-top:5px;
		}
		.menu li{
			list-style:none;
			background:;
		}
		.menu a{
	      color:#00cc00;
	      text-decoration:none;
	      font-size:18px;
	      margin:5px;
          padding:5px;
	  
	  
         }
        .menu a:hover{
	     text-decoration:underline;
	     color:#fff;
		 background:red;
	     font-weight:bolder;
         }
		
		.text11{
	    color:#00ccff;
	    font-family:sans-serif;
	   font-style:italic;
	
       }
       .text22{
    	color:#f4511e;
     	font-family:sans-serif;
    	font-style:italic;
	
      }
	  .top2{
		  float:right;
		  margin-top:5px;
		  height:50px;
		  width:1200px;
		  
		  background:#00cc00;
	  }
	  .logout{
		  background-color:#0033cc;
		  border:2px solid gray;
		  font-size:17px;
		  border-radius:8px;
		  
		  
	  }
	  .logout a:link{
		  text-decoration:none;
		  color:white;
		  font-family:serif;
	  }
	  .log{
		  float:right;
	  }
	 </style>
	</head>
<body>
<header class="top"><b><center><h1>Welcome to Admin Pannel of <span class="text11"><b>the</b></span><span class="text22"><b>times</b></span><span class="text11"><b>web</b></span></h1></center></b></header>
<div class="aside">
<center><h1>Manage Content</h1></center>
<ul class="menu">
<li><h3><a href="index.php">Home</a></h3></li>
<li><h3><a href="logout.php">Admin Logout</a></h3></li>
</ul>
<fieldset><ul class="menu">
<li><h3><a href="index.php?nview=nview"> View News Post </a></h3></li>
<li><h3><a href="index.php?cview=cview"> View Sports Post </a></h3></li>
<li><h3><a href="index.php?tview=tview"> View Technology Post </a></h3></li>
<li><h3><a href="index.php?eview=eview"> View Education Post </a></h3></li>
<li><h3><a href="index.php?hview=hview"> View Health Post </a></h3></li>
<li><h3><a href="index.php?mview=mview"> View Mobile Post </a></h3></li>
<li><h3><a href="index.php?mview=mview"> View Mobile Post </a></h3></li>
<li><h3><a href="index.php?ads1view=ads1view"> View Advertisement-1 </a></h3></li>
<li><h3><a href="index.php?ads2view=ads2view"> View Advertisement-2 </a></h3></li>
<li><h3><a href="index.php?ads3view=ads3view"> View Advertisement-3 </a></h3></li>
<li><h3><a href="index.php?ads4view=ads4view"> View Advertisement-4 </a></h3></li>
<li><h3><a href="index.php?ads5view=ads5view"> View Advertisement-5 </a></h3></li>
<li><h3><a href="index.php?ads6view=ads6view"> View Advertisement-6 </a></h3></li>
</ul></fieldset>

<fieldset><ul class="menu">
<li><h3><a href="index.php?ninsert=ninsert">Insert News Post</a></h3></li>
<li><h3><a href="index.php?cinsert=cinsert">Insert Sports Post</a></h3></li>
<li><h3><a href="index.php?tinsert=tinsert">Insert Technology Post</a></h3></li>
<li><h3><a href="index.php?einsert=einsert">Insert Education Post</a></h3></li>
<li><h3><a href="index.php?hinsert=hinsert">Insert Health Post</a></h3></li>
<li><h3><a href="index.php?ads1insert=ads1insert">Insert Advertisement-1</a></h3></li>
<li><h3><a href="index.php?ads2insert=ads2insert">Insert Advertisement-2</a></h3></li>
<li><h3><a href="index.php?ads3insert=ads3insert">Insert Advertisement-3</a></h3></li>
<li><h3><a href="index.php?ads4insert=ads4insert">Insert Advertisement-4</a></h3></li>
<li><h3><a href="index.php?ads5insert=ads5insert">Insert Advertisement-5</a></h3></li>
<li><h3><a href="index.php?ads6insert=ads6insert">Insert Advertisement-6</a></h3></li>
</ul></fieldset>
</div>

<div class="top2">
<div class="log"><h3>Welcome:<?php echo $_SESSION['user_name']; ?> <?php echo $_SESSION['login_name']; ?> <button class="logout"><a href="logout.php">Log Out </a></button></h3></div>
<div><h3><p align="center"><?php echo date("l jS F Y"); ?></p></h3></div>
</div>


<?php
if(isset($_GET['ninsert'])){
	include("insert_news.php");
}
?>
<?php
if(isset($_GET['tinsert'])){
	include("insert_tech.php");
}
?>
<?php
if(isset($_GET['cinsert'])){
	include("insert_cric.php");
}
?>
<?php
if(isset($_GET['einsert'])){
	include("insert_edu.php");
}
?>
<?php
if(isset($_GET['hinsert'])){
	include("insert_health.php");
}
?>
<?php
if(isset($_GET['minsert'])){
	include("insert_mobile.php");
}
?>
<?php
if(isset($_GET['ads1insert'])){
	include("ads1.php");
}
?>
<?php
if(isset($_GET['ads2insert'])){
	include("ads2.php");
}
?>
<?php
if(isset($_GET['ads3insert'])){
	include("ads3.php");
}
?>
<?php
if(isset($_GET['ads4insert'])){
	include("ads4.php");
}
?>
<?php
if(isset($_GET['ads5insert'])){
	include("ads5.php");
}
?>
<?php
if(isset($_GET['ads6insert'])){
	include("ads6.php");
}
?>


<!-- View News -->

<?php if(isset($_GET['nview'])) { ?>
<table width="1100px" align="center" border="3px" >
<tr>
  <td align="center" bgcolor="#00ccff" colspan="9"><h2>View all Post</h2></td>
</tr>
<tr>
  <th bgcolor="white">News No.</th>
  <th bgcolor="white">News Title</th>
  <th bgcolor="white">News Date</th>
  <th bgcolor="white">News Img1</th>
  <th bgcolor="white">News Content1</th>
  <th bgcolor="white">News Img2</th>
  <th bgcolor="white">News Content2</th>
  <th bgcolor="white">Edit</th>
  <th bgcolor="white">Delete</th>
</tr>
<?php
   include("includes/connect.php");
   
   if(isset($_GET['nview'])){
	   $query= "select * from news order by 1 DESC";
	   $run= mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($run)){
		   $i=1;
		   $id=$row['news_id'];
		   $title=$row['news_title'];
		   $date=$row['news_date'];
		   $img1=$row['news_img1'];
		   $img2=$row['news_img2'];
		   $content1=substr($row['news_content1'],0,50);
		   $content2=substr($row['news_content2'],0,50);
	  
?>
<tr>
  <td align="center" bgcolor="white"><?php echo $id; ?></td>
  <td bgcolor="white"><?php echo $title; ?></td>
  <td bgcolor="white"><?php echo $date; ?></td>
  <td bgcolor="white"><img src="../images_news/<?php echo $img1; ?>" width="50" height="50" ></td>
  <td bgcolor="white"><?php echo $content1; ?></td>
  <td bgcolor="white"><img src="../images_news/<?php echo $img2; ?>" width="50" height="50" ></td>
  <td bgcolor="white"><?php echo $content2; ?></td>
  <td align="center" bgcolor="white"><a href="edit_news.php?edit=<?php echo $id; ?>">Edit</a></td>
  <td align="center" bgcolor="white"><a href="delete_news.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>

<?php }}} ?>
</table>

<!-- Sports view -->

<?php if(isset($_GET['cview'])) { ?>
<table width="1100px" align="center" border="3px" >
<tr>
  <td align="center" bgcolor="#00ccff" colspan="11"><h2>View all Post</h2></td>
</tr>
<tr>
  <th bgcolor="white">News No.</th>
  <th bgcolor="white">News Title</th>
  <th bgcolor="white">News Date</th>
  <th bgcolor="white">News Img1</th>
  <th bgcolor="white">News Content1</th>
  <th bgcolor="white">News Img2</th>
  <th bgcolor="white">News Content2</th>
  <th bgcolor="white">News Img3</th>
  <th bgcolor="white">News Content3</th>
  <th bgcolor="white">Edit</th>
  <th bgcolor="white">Delete</th>
</tr>
<?php
   include("includes/connect.php");
   
   if(isset($_GET['cview'])){
	   $query= "select * from cric order by 1 DESC";
	   $run= mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($run)){
		   $i=1;
		   $id=$row['cric_id'];
		   $title=$row['cric_title'];
		   $date=$row['cric_date'];
		   $img1=$row['cric_img1'];
		   $img2=$row['cric_img2'];
		   $img3=$row['cric_img3'];
		   $content1=substr($row['cric_content1'],0,50);
		   $content2=substr($row['cric_content2'],0,50);
		   $content3=substr($row['cric_content3'],0,50);
	  
?>
<tr>
  <td align="center" bgcolor="white"><?php echo $id; ?></td>
  <td bgcolor="white"><?php echo $title; ?></td>
  <td bgcolor="white"><?php echo $date; ?></td>
  <td bgcolor="white"><img src="../images_cric/<?php echo $img1; ?>" width="50" height="50" ></td>
  <td bgcolor="white"><?php echo $content1; ?></td>
  <td bgcolor="white"><img src="../images_cric/<?php echo $img2; ?>" width="50" height="50" ></td>
  <td bgcolor="white"><?php echo $content2; ?></td>
  <td bgcolor="white"><img src="../images_cric/<?php echo $img3; ?>" width="50" height="50" ></td>
  <td bgcolor="white"><?php echo $content3; ?></td>
  <td align="center" bgcolor="white"><a href="edit_cric.php?edit=<?php echo $id; ?>">Edit</a></td>
  <td align="center" bgcolor="white"><a href="delete_cric.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>

<?php }}} ?>
</table>

<!-- View Technology -->

<?php if(isset($_GET['tview'])) { ?>
<table width="1100px" align="center" border="3px" >
<tr>
  <td align="center" bgcolor="#00ccff" colspan="9"><h2>View all Post</h2></td>
</tr>
<tr>
  <th bgcolor="white">News No.</th>
  <th bgcolor="white">News Title</th>
  <th bgcolor="white">News Date</th>
  <th bgcolor="white">News Img1</th>
  <th bgcolor="white">News Content1</th>
  <th bgcolor="white">News Img2</th>
  <th bgcolor="white">News Content2</th>
  <th bgcolor="white">Edit</th>
  <th bgcolor="white">Delete</th>
</tr>
<?php
   include("includes/connect.php");
   
   if(isset($_GET['tview'])){
	   $query= "select * from tech order by 1 DESC";
	   $run= mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($run)){
		   $i=1;
		   $id=$row['tech_id'];
		   $title=$row['tech_title'];
		   $date=$row['tech_date'];
		   $img1=$row['tech_img1'];
		   $img2=$row['tech_img2'];
		   $content1=substr($row['tech_content1'],0,50);
		   $content2=substr($row['tech_content2'],0,50);
	  
?>
<tr>
  <td align="center" bgcolor="white"><?php echo $id; ?></td>
  <td bgcolor="white"><?php echo $title; ?></td>
  <td bgcolor="white"><?php echo $date; ?></td>
  <td bgcolor="white"><img src="../images_tech/<?php echo $img1; ?>" width="50" height="50" ></td>
  <td bgcolor="white"><?php echo $content1; ?></td>
  <td bgcolor="white"><img src="../images_tech/<?php echo $img2; ?>" width="50" height="50" ></td>
  <td bgcolor="white"><?php echo $content2; ?></td>
  <td align="center" bgcolor="white"><a href="edit_tech.php?edit=<?php echo $id; ?>">Edit</a></td>
  <td align="center" bgcolor="white"><a href="delete_tech.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>

<?php }}} ?>
</table>

<!-- View Education -->

<?php if(isset($_GET['eview'])) { ?>
<table width="1100px" align="center" border="3px" >
<tr>
  <td align="center" bgcolor="#00ccff" colspan="9"><h2>View all Post</h2></td>
</tr>
<tr>
  <th bgcolor="white">News No.</th>
  <th bgcolor="white">News Title</th>
  <th bgcolor="white">News Date</th>
  <th bgcolor="white">News Img</th>
  <th bgcolor="white">News Content</th>
  <th bgcolor="white">Edit</th>
  <th bgcolor="white">Delete</th>
</tr>
<?php
   include("includes/connect.php");
   
   if(isset($_GET['eview'])){
	   $query= "select * from edu order by 1 DESC";
	   $run= mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($run)){
		   $i=1;
		   $id=$row['edu_id'];
		   $title=$row['edu_title'];
		   $date=$row['edu_date'];
		   $img1=$row['edu_img'];
		   $content1=substr($row['edu_content'],0,50);
	  
?>
<tr>
  <td align="center" bgcolor="white"><?php echo $id; ?></td>
  <td bgcolor="white"><?php echo $title; ?></td>
  <td bgcolor="white"><?php echo $date; ?></td>
  <td bgcolor="white"><img src="../images_edu/<?php echo $img1; ?>" width="50" height="50" ></td>
  <td bgcolor="white"><?php echo $content1; ?></td>
  <td align="center" bgcolor="white"><a href="edit_edu.php?edit=<?php echo $id; ?>">Edit</a></td>
  <td align="center" bgcolor="white"><a href="delete_edu.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>

<?php }}} ?>
</table>

<!-- View Health -->

<?php if(isset($_GET['hview'])) { ?>
<table width="1100px" align="center" border="3px" >
<tr>
  <td align="center" bgcolor="#00ccff" colspan="9"><h2>View all Post</h2></td>
</tr>
<tr>
  <th bgcolor="white">News No.</th>
  <th bgcolor="white">News Title</th>
  <th bgcolor="white">News Date</th>
  <th bgcolor="white">News Img</th>
  <th bgcolor="white">News Content</th>
  <th bgcolor="white">Edit</th>
  <th bgcolor="white">Delete</th>
</tr>
<?php
   include("includes/connect.php");
   
   if(isset($_GET['hview'])){
	   $query= "select * from health order by 1 DESC";
	   $run= mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($run)){
		   $i=1;
		   $id=$row['health_id'];
		   $title=$row['health_title'];
		   $date=$row['health_date'];
		   $img1=$row['health_img'];
		   $content1=substr($row['health_content'],0,50);
	  
?>
<tr>
  <td align="center" bgcolor="white"><?php echo $id; ?></td>
  <td bgcolor="white"><?php echo $title; ?></td>
  <td bgcolor="white"><?php echo $date; ?></td>
  <td bgcolor="white"><img src="../images_health/<?php echo $img1; ?>" width="50" height="50" ></td>
  <td bgcolor="white"><?php echo $content1; ?></td>
  <td align="center" bgcolor="white"><a href="edit_health.php?edit=<?php echo $id; ?>">Edit</a></td>
  <td align="center" bgcolor="white"><a href="delete_health.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>

<?php }}} ?>
</table>

<!-- Advertisement view -->

<?php if(isset($_GET['ads1view'])) { ?>
<table width="1100px" align="center" border="3px" >
<tr>
  <td align="center" bgcolor="#00ccff" colspan="9"><h2>View Advertisement-1</h2></td>
</tr>
<tr>
  <th bgcolor="white">Ads No.</th>
  <th bgcolor="white">Ads href</th>
  <th bgcolor="white">Ads date</th>
  <th bgcolor="white">Ads Img1</th>
  <th bgcolor="white">Delete</th>
</tr>
<?php
   include("includes/connect.php");
   
   if(isset($_GET['ads1view'])){
	   $query= "select * from ads1 order by 1 DESC";
	   $run= mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($run)){
		   $i=1;
		   $id=$row['ads1_id'];
		   $title=$row['ads1_href'];
		   $date=$row['ads1_date'];
		   $img1=$row['ads1_img'];
	  
?>
<tr>
  <td align="center" bgcolor="white"><?php echo $id; ?></td>
  <td bgcolor="white"><?php echo $title; ?></td>
  <td bgcolor="white"><?php echo $date; ?></td>
  <td bgcolor="white"><img src="../images_ads1/<?php echo $img1; ?>" width="50" height="50" ></td>
  <td align="center" bgcolor="white"><a href="delete_ads1.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>

<?php }}} ?>
</table>

<?php if(isset($_GET['ads2view'])) { ?>
<table width="1100px" align="center" border="3px" >
<tr>
  <td align="center" bgcolor="#00ccff" colspan="9"><h2>View Advertisement-1</h2></td>
</tr>
<tr>
  <th bgcolor="white">Ads No.</th>
  <th bgcolor="white">Ads href</th>
  <th bgcolor="white">Ads date</th>
  <th bgcolor="white">Ads Img1</th>
  <th bgcolor="white">Delete</th>
</tr>
<?php
   include("includes/connect.php");
   
   if(isset($_GET['ads2view'])){
	   $query= "select * from ads2 order by 1 DESC";
	   $run= mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($run)){
		   $i=1;
		   $id=$row['ads2_id'];
		   $title=$row['ads2_href'];
		   $date=$row['ads2_date'];
		   $img1=$row['ads2_img'];
	  
?>
<tr>
  <td align="center" bgcolor="white"><?php echo $id; ?></td>
  <td bgcolor="white"><?php echo $title; ?></td>
  <td bgcolor="white"><?php echo $date; ?></td>
  <td bgcolor="white"><img src="../images_ads2/<?php echo $img1; ?>" width="50" height="50" ></td>
  <td align="center" bgcolor="white"><a href="delete_ads2.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>

<?php }}} ?>
</table>

<?php if(isset($_GET['ads3view'])) { ?>
<table width="1100px" align="center" border="3px" >
<tr>
  <td align="center" bgcolor="#00ccff" colspan="9"><h2>View Advertisement-1</h2></td>
</tr>
<tr>
  <th bgcolor="white">Ads No.</th>
  <th bgcolor="white">Ads href</th>
  <th bgcolor="white">Ads date</th>
  <th bgcolor="white">Ads Img1</th>
  <th bgcolor="white">Delete</th>
</tr>
<?php
   include("includes/connect.php");
   
   if(isset($_GET['ads3view'])){
	   $query= "select * from ads3 order by 1 DESC";
	   $run= mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($run)){
		   $i=1;
		   $id=$row['ads3_id'];
		   $title=$row['ads3_href'];
		   $date=$row['ads3_date'];
		   $img1=$row['ads3_img'];
	  
?>
<tr>
  <td align="center" bgcolor="white"><?php echo $id; ?></td>
  <td bgcolor="white"><?php echo $title; ?></td>
  <td bgcolor="white"><?php echo $date; ?></td>
  <td bgcolor="white"><img src="../images_ads3/<?php echo $img1; ?>" width="50" height="50" ></td>
  <td align="center" bgcolor="white"><a href="delete_ads3.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>

<?php }}} ?>
</table>

<?php if(isset($_GET['ads4view'])) { ?>
<table width="1100px" align="center" border="3px" >
<tr>
  <td align="center" bgcolor="#00ccff" colspan="9"><h2>View Advertisement-1</h2></td>
</tr>
<tr>
  <th bgcolor="white">Ads No.</th>
  <th bgcolor="white">Ads href</th>
  <th bgcolor="white">Ads date</th>
  <th bgcolor="white">Ads Img1</th>
  <th bgcolor="white">Delete</th>
</tr>
<?php
   include("includes/connect.php");
   
   if(isset($_GET['ads4view'])){
	   $query= "select * from ads4 order by 1 DESC";
	   $run= mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($run)){
		   $i=1;
		   $id=$row['ads4_id'];
		   $title=$row['ads4_href'];
		   $date=$row['ads4_date'];
		   $img1=$row['ads4_img'];
	  
?>
<tr>
  <td align="center" bgcolor="white"><?php echo $id; ?></td>
  <td bgcolor="white"><?php echo $title; ?></td>
  <td bgcolor="white"><?php echo $date; ?></td>
  <td bgcolor="white"><img src="../images_ads4/<?php echo $img1; ?>" width="50" height="50" ></td>
  <td align="center" bgcolor="white"><a href="delete_ads4.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>

<?php }}} ?>
</table>

<?php if(isset($_GET['ads5view'])) { ?>
<table width="1100px" align="center" border="3px" >
<tr>
  <td align="center" bgcolor="#00ccff" colspan="9"><h2>View Advertisement-1</h2></td>
</tr>
<tr>
  <th bgcolor="white">Ads No.</th>
  <th bgcolor="white">Ads href</th>
  <th bgcolor="white">Ads date</th>
  <th bgcolor="white">Ads Img1</th>
  <th bgcolor="white">Delete</th>
</tr>
<?php
   include("includes/connect.php");
   
   if(isset($_GET['ads5view'])){
	   $query= "select * from ads5 order by 1 DESC";
	   $run= mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($run)){
		   $i=1;
		   $id=$row['ads5_id'];
		   $title=$row['ads5_href'];
		   $date=$row['ads5_date'];
		   $img1=$row['ads5_img'];
	  
?>
<tr>
  <td align="center" bgcolor="white"><?php echo $id; ?></td>
  <td bgcolor="white"><?php echo $title; ?></td>
  <td bgcolor="white"><?php echo $date; ?></td>
  <td bgcolor="white"><img src="../images_ads5/<?php echo $img1; ?>" width="50" height="50" ></td>
  <td align="center" bgcolor="white"><a href="delete_ads5.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>

<?php }}} ?>
</table>

<?php if(isset($_GET['ads6view'])) { ?>
<table width="1100px" align="center" border="3px" >
<tr>
  <td align="center" bgcolor="#00ccff" colspan="9"><h2>View Advertisement-1</h2></td>
</tr>
<tr>
  <th bgcolor="white">Ads No.</th>
  <th bgcolor="white">Ads href</th>
  <th bgcolor="white">Ads date</th>
  <th bgcolor="white">Ads Img1</th>
  <th bgcolor="white">Delete</th>
</tr>
<?php
   include("includes/connect.php");
   
   if(isset($_GET['ads6view'])){
	   $query= "select * from ads6 order by 1 DESC";
	   $run= mysqli_query($con,$query);
	   while($row=mysqli_fetch_array($run)){
		   $i=1;
		   $id=$row['ads6_id'];
		   $title=$row['ads6_href'];
		   $date=$row['ads6_date'];
		   $img1=$row['ads6_img'];
	  
?>
<tr>
  <td align="center" bgcolor="white"><?php echo $id; ?></td>
  <td bgcolor="white"><?php echo $title; ?></td>
  <td bgcolor="white"><?php echo $date; ?></td>
  <td bgcolor="white"><img src="../images_ads6/<?php echo $img1; ?>" width="50" height="50" ></td>
  <td align="center" bgcolor="white"><a href="delete_ads6.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>

<?php }}} ?>
</table>

</body>
</html>




<?php } ?>




