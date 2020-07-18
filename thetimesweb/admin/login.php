<?php
session_start();

?>

<html>
<head>
<style>
   .top{
	   background:#ff6600;
	   color:#fff;
	   font-family:sans-serif;
   }
   .login_id{
	   background:#33ccff;
	   color:#ff6600;
	   font-family:comic sans MS;
	   
   }
   .login_pass{
	   background:#33ccff;
	   color:#ff6600;
	   font-family:comic sans MS;
   }
   .field{
	   background:#33ccff;
   }
   .button{
	   background-color:#33ccff;
	   border:1px solid black;
	   border-radius:8px;
	   color:;
	   font-size:20px;
	   transition-duration:0.4s;
	   cursor:pointer;
	   
   }
   .button1{
	   background-color:#fff;
	   color:black;
	   border:1px solid black;
   }
   .button1:hover{
	   background-color:#33ccff;
	   color:#fff;
	   border:1px solid green;
   }
   
</style>
</head>
<body>

<table border="5" align="center" >
<form action="login.php" method="get">
   <tr><td class="top" align="center" colspan="5"><h1>Admin Login</h1></td></tr>
   <tr><td align="right" class="login_id">User ID:</td>
   <td class="field"><input size="40" type="text" name="user_name"></td></tr>
   <tr>
    <td align="right" class="login_pass">User Password:</td>
    <td class="field"><input size="40" type="password" name="user_pass"></td>
   </tr>
   <tr class="top"><td align="center" colspan="5"><input class="button button1" type="submit" name="login" value="Log In"></td></tr>
</form>
</table>


</body>
</html>

<?php
include("includes/connect.php");

if(isset($_GET['login'])){
	$user_name=$_GET['user_name'];
	$user_pass=$_GET['user_pass'];
	$login_name=$_GET['login_name'];
	
	$login_query="select * from login where user_name='$user_name' AND user_pass='$user_pass'";
	
	$run=mysqli_query($con,$login_query);
	
	if(mysqli_num_rows($run)>0){
		while($row=mysqli_fetch_array($run)){
	    $login_name=$_GET['login_name'];
		$_SESSION['login_name']=$login_name;}
		$_SESSION['user_name']=$user_name;
		
		
		echo "<script>window.open('index.php','_self')</script>";
		
	}
	else{
		echo "<script>alert('User Name or Password is wrong')</script>";
	}
	
}


?>




















