<html>
<head><title>user profile</title>
</head>
<body style="background-image:url('../images/finish_back.png');padding:0px;margin:0px;;">
<div style="aborder:solid black 2px;height:60px;width:100%;background-image:url('../images/top_background.jpg');">
<img src='../images/gonline_logo1.png'style='height:55px;height:60px;position:absolute;margin-left:10px;margin-top:2px;'>
<div style="position:absolute;color:blue;margin-top:5px;margin-left:79px;font-size:40px;">Go Online</div>
<?php
session_start();
if(!isset($_SESSION["sess_user"])){
if(!isset($_SESSION['profile'])){
	header("location:../profile_config.php");
}}else
{
	?>
	
<?php
function getuserdata($id)
{
	$array=array();
	$conn=mysqli_connect("localhost","root","","goline");
	$sql=mysqli_query($conn,"SELECT * FROM `profile` WHERE id='".$id."'");
while($row=mysqli_fetch_assoc($sql))
{
	$array['id']=$row['id'];
	$array['email']=$row['email'];
	$array['name']=$row['name'];
	$array['profile_pic']=$row['profile_pic'];
	$array['city']=$row['city'];
	$array['state']=$row['state'];
	$array['country']=$row['country'];
	$array['bio']=$row['bio'];
	$array['mobile_no']=$row['mobile_no'];
	
}
return $array;	
}
function getid($email)
{
	$conn=mysqli_connect("localhost","root","","goline");
	$sql=mysqli_query($conn,"SELECT `id` FROM `profile` WHERE email='".$email."'");
while($row=mysqli_fetch_assoc($sql))
{
	return $row['id'];
}
	}
?>
<?php 
if(isset($_SESSION['profile']))
{
	$userdata=getuserdata(getid($_SESSION['profile']))
	?>
<div style="position:absolute;margin-left:900px;margin-top:19px;color:white;font-size:16px;">
<a href="../home.php"style="text-decoration:none;color:white;padding:2px;margin-right:25px;">
<?php echo "<img src='../uploads/".$userdata['profile_pic']."'style='height:30px;width:30px;border-radius:20px;position:absolute;margin-left:-34px;margin-top:-4px;'>";?>
<?php echo $userdata['name']?></a>
<a href="../public.php"style="text-decoration:none;color:white;padding:2px;">
<img src="../images/share2.png"style="position:absolute;height:30;width:30;margin-left:auto;margin-top:-6px;border-radius:30px;opacity:0.9"></a>
<a href="../message.php"><img src="../images/sms.png"style="position:absolute;height:40;width:40;margin-left:40px;;margin-top:-11px;border-radius:30px;opacity:0.9"></a>
<a href="../friend.php"><img src="../images/addfriend1.png"style="position:absolute;height:30;width:30;margin-left:85px;;margin-top:-6px;border-radius:30px;opacity:0.9"></a>
<div class="button"><a href="#"><img src="../images/aero3.png"style="height:20px;width:20px;"></a>
<div class="drop">
<style>
.button{
	color:red;
	position:reletive;
	margin-top:-20px;
	margin-left:240px;
	
}
.drop{
	display:none;
	position:fixed;
	background-color:grey;
	height:auto;
	margin-left:-20px;
	line-height:30px;
	padding:5px 5px 5px 5px;
}
.button:hover .drop{
	display:block;
}
</style>
<a href="user_profile.php"style="text-decoration:none;color:white;">|User profile|</a>
</br><a href="user_info.php"style="text-decoration:none;color:white;">|User info|</a>
</br><a href="../logout.php"style="text-decoration:none;color:white;">|Logout|</a>
</div>
</div>
</div>
</body>
</html>

	<div style="position:fixed;margin-left:1110px;margin-top:600px;color:#C71585;font-size:20px;">
<div >User Profile-<?php echo $userdata['name'];?>
</div></div>
	<div style="background-color:#aaf9ff;position:absolute;border-left:solid white 2px;border-right:solid white 2px;width:800px;height:auto;margin-left:300px;margin-top:60px;">
	<div style="text-align:center;font-size:25px;color:purple;">User Profile</div>
	<?php echo "<div style='border:inset white 2px;width:150px;height:150px;margin-left:300px;margin-top:40px;border-radius:8px;'>
	<img src='../uploads/".$userdata['profile_pic']."'style='width:140px;height:140px;margin-left:5px;margin-top:5px;border-radius:4px;' ></div>"?>
	<div style="color:magneta;margin-top:10px;margin-left:250px;font-size:33px;margin-bottom:60px;">
	<div style="position:absolute;color:black;font-weight:bold;margin-left:40px;margin-top:-40px;text-align:center;">
	<?php echo $userdata['name'] ?></br>
	</div>
	<div style="color:blue;margin-left:0px;margin-top:30px;">
	City :
	<div style="color:#800000;position:absolute;margin-left:80px;margin-top:-40px;">
	<?php echo $userdata['city'] ?></br>
	</div></div>
	<div style="color:blue;margin-left:0px;margin-top:5px;">
	State:
	<div style="color:#800000;position:absolute;margin-left:80px;margin-top:-40px;">
	<?php echo $userdata['state'] ?></br>
	</div></div>
	<div style="color:blue;margin-left:0px;margin-top:5px;">
	Country:
	<div style="color:#800000;position:absolute;margin-left:120px;margin-top:-40px;">
	<?php echo $userdata['country'] ?></br>
	</div></div>
	<div style="color:blue;margin-left:0px;margin-top:5px;">
	Bio:
	<div style="color:#800000;position:absolute;margin-left:80px;margin-top:-40px;">
	<?php echo $userdata['bio'] ?></br>
	</div></div>
	<div style="color:blue;margin-left:0px;margin-top:5px;">
	Mobile no:
	<div style="color:#800000;position:absolute;margin-left:160px;margin-top:-40px;">
	<?php echo $userdata['mobile_no'] ?></br>
	</div></div>
	<div style="color:blue;margin-left:0px;margin-top:5px;">
	Email:
	<div style="color:#800000;position:absolute;margin-left:100px;margin-top:-40px;">
	<?php echo$userdata['email']?></br>
	</div></div>
	</div>
	
	</div>
	
	
	<?php
	
}}
?>