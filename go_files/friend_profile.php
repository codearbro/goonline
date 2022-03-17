<html>
<head><link rel="stylesheet" type="text/css"href="css/home.css">
<title>home</title>
</head>
<body style="background-image:url('images/finish_back.png');background-attachment: fixed;">
<!--top-->
<div style="aborder:solid black 2px;height:60px;width:100%;background-image:url('images/top_background.jpg');">
<img src='../images/gonline_logo1.png'style='height:55px;height:60px;position:absolute;margin-left:10px;margin-top:2px;'>
<div style="position:absolute;color:blue;margin-top:5px;margin-left:79px;font-size:40px;">Go Online</div>

<form name="fb_search" action="Search_Display_submi.php" method="get" onSubmit="return bcheck()">
	<div style="position:absolute; left:19%; top:2%; z-index:1;"> 
	<input type="text" name="search1" style="height:25; width:500;"  onKeyUp="searching();" id="search_text1" placeholder="Search for people" > </div>
	
	<div id="searching_ID"></div> 

	
</form>
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
<a href="home.php"style="text-decoration:none;color:white;padding:2px;margin-right:25px;">
<?php echo "<img src='uploads/".$userdata['profile_pic']."'style='height:30px;width:30px;border-radius:20px;position:absolute;margin-left:-34px;margin-top:-4px;'>";?>
<?php echo $userdata['name']?></a>
<a href="public.php"style="text-decoration:none;color:white;padding:2px;">
<img src="images/share2.png"style="position:absolute;height:30;width:30;margin-left:auto;margin-top:-6px;border-radius:30px;opacity:0.9"></a>
<a href="message.php"><img src="images/sms.png"style="position:absolute;height:40;width:40;margin-left:40px;;margin-top:-11px;border-radius:30px;opacity:0.9"></a>
<a href="friend.php"><img src="images/addfriend1.png"style="position:absolute;height:30;width:30;margin-left:85px;;margin-top:-6px;border-radius:30px;opacity:0.9"></a>
<div class="button"><a href="#"><img src="images/aero3.png"style="height:20px;width:20px;"></a>
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
<a href="go_user/user_profile.php"style="text-decoration:none;color:white;">|User profile|</a>
</br><a href="go_user/user_info.php"style="text-decoration:none;color:white;">|User info|</a>
</br><a href="logout.php"style="text-decoration:none;color:white;">|Logout|</a>
</div>
</div>
</div>
<div style="position:absolute;margin-top:70px;margin-left:60px;"></div>
<div style="background-color:#aaf9ff;position:absolute;border-left:solid white 2px;border-right:solid white 2px;width:800px;height:auto;margin-left:300px;margin-top:60px;">

<?php
	
	$conn=mysqli_connect("localhost","root","","goline");
$email=$_GET['email'];
$sql=mysqli_query($conn,"SELECT * FROM `profile` WHERE email='$email'");

while($row=mysqli_fetch_assoc($sql))
	{
		$email=$row['email'];
		if($email==$email)
	{
	echo "<div style='margin-left:290px;margin-top:40px;'><img src='uploads/".$row['profile_pic']."'style='height:200px;width:200px;'>";
	echo "<div style='margin-left:70px;font-size:20px;font-weight:bold;'>".$row['name']."</div></div>";
?>
<?php
	$db=mysqli_connect("localhost","root","","goline");
	$sql=mysqli_query($db,"select * from `friends`");

while($frow=mysqli_fetch_assoc($sql)){
$flag=$frow['flag'];
switch($flag)
{
case "0":
	if(($frow['reciever_id']==$email)&&($frow['sender_id']==$userdata['email']))
	{	

?>
		<div style="margin-left:350px;margin-top:20px;">
		<a href="delete_friend.php?id=<?php echo $frow['id']?>"style="height:30px;width:100px;background-color:grey;color:white;text-decoration:none;padding:4px 4px 4px 4px;font-weight:bold;">
		cancel request
		</a>
		</div>
		<div style="text-align:center;margin-top:20px;font-size:25px;color:darkred;">friend request has been sent sucessfully </div>
		<div style="border-bottom:solid grey 2px;"></div>
		<?php
		}
		else
		if(($frow['reciever_id']==$userdata['email'])&&($frow['sender_id']==$email))
		{
		?>
		<div style="margin-left:350px;margin-top:20px;">
		<a href="#"style="height:30px;width:100px;background-color:grey;color:white;text-decoration:none;padding:4px 4px 4px 4px;font-weight:bold;">
		request pending
		</a></div>
		<div style="text-align:center;margin-top:20px;font-size:25px;color:darkred;">check your friend request</div>
			<div style="border-bottom:solid grey 2px;"></div>
		<?php
		}
		break;
	case "1":
	   if(($frow['reciever_id']==$email)&&($frow['sender_id']==$userdata['email']))
		{
		?>
		<div style="margin-left:350px;margin-top:20px;">
		<a href="delete_friend.php?id=<?php echo $frow['id']?>"style="height:30px;width:100px;background-color:grey;color:white;text-decoration:none;padding:4px 4px 4px 4px;font-weight:bold;">
		unfriend
		</a></div>
		<div style="text-align:center;margin-top:20px;font-size:25px;color:darkred;">you are friends </div>
			<div style="border-bottom:solid grey 2px;"></div>
		<?php
	$db=mysqli_connect("localhost","root","","goline");
	$sql="SELECT * FROM `user_post`";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)>0){
		while($prow=mysqli_fetch_array($result)){
			if($row['name']==$prow['name']){
			$ddb=mysqli_connect("localhost","root","","goline");
$ssql=mysqli_query($ddb,"select * from `profile`");
while($user=mysqli_fetch_assoc($ssql))
{
	if($row['name']==$user['name']){
			ECHO "<div style='margin-left:190px;color:grey;margin-top:30px;border-bottom:solid grey 2px;margin-right:350px;'><img src='uploads/".$user['profile_pic']."'style='height:40px;width:40px;border-radius:20px;margin-top:-13px;margin-left:-50px;position:absolute;'>".$user['name']." , shared his story</div>";
}}
			echo "<div style='background-color:snow;padding:2px 2px 2px 2px;width:60%;height:auto;margin-left:140px;margin-top:10px;color:#ff288f;'>
			".$prow['story']."";
			if($prow['post_image']!=""){
			echo "<img src='post_img_upload/".$prow['post_image']."'style='background-color:snow;padding:2px 2px 2px 2px;width:60%;height:auto;margin-left:140px;margin-top:10px;color:#ff288f;'>";
			} 
		
		echo "</br></div>";
		}}
		
	}?>
		<?php
		}else
       if(($frow['reciever_id']==$userdata['email'])&&($frow['sender_id']==$email))
		{
			?>
		<div style="margin-left:350px;margin-top:20px;">
		<a href="delete_friend.php?id=<?php echo $frow['id']?>"style="height:30px;width:100px;background-color:grey;color:white;text-decoration:none;padding:4px 4px 4px 4px;font-weight:bold;">
		remove friend
		</a></div>
		<div style="text-align:center;margin-top:20px;font-size:25px;color:darkred;">you are friends</div>
				<div style="border-bottom:solid grey 2px;"></div>
			<?php
	$db=mysqli_connect("localhost","root","","goline");
	$sql="SELECT * FROM `user_post`";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)>0){
		while($prow=mysqli_fetch_array($result)){
			if($row['name']==$prow['name']){
			$ddb=mysqli_connect("localhost","root","","goline");
$ssql=mysqli_query($ddb,"select * from `profile`");
while($user=mysqli_fetch_assoc($ssql))
{
	if($row['name']==$user['name']){
			ECHO "<div style='margin-left:190px;color:grey;margin-top:30px;border-bottom:solid grey 2px;margin-right:350px;'><img src='uploads/".$user['profile_pic']."'style='height:40px;width:40px;border-radius:20px;margin-top:-13px;margin-left:-50px;position:absolute;'>".$user['name']." , shared his story</div>";
}}
			echo "<div style='background-color:snow;padding:2px 2px 2px 2px;width:60%;height:auto;margin-left:140px;margin-top:10px;color:#ff288f;'>
			".$prow['story']."";
			if($prow['post_image']!=""){
			echo "<img src='post_img_upload/".$prow['post_image']."'style='background-color:snow;padding:2px 2px 2px 2px;width:60%;height:auto;margin-left:140px;margin-top:10px;color:#ff288f;'>";
			} 
		
		echo "</br></div>";
		}}
		
	}
	?>
		<?php
			}
		break;
		
}}
if((($userdata['email'])&&($email))!=$frow)
{
?>
<form method='post'>	
<input type='submit'value='ADD FRIEND'name='add_friend'style='margin-left:350px;margin-top:30px;height:30px;width:100px;'/>
</form>
	</div>
	<?php
   break;
	}
?>
<?php	}}
	?>
	

</body>
</html>

<?php
}}
?>

<?php
if(isset($_POST['add_friend'])){
	$sender=$userdata['email'];
	$reciever=$email;
	$db=mysqli_connect("localhost","root","","goline");
	$sql=mysqli_query($db,"INSERT INTO `friends`(sender_id,reciever_id,flag) VALUES('$sender','$reciever','0')");
echo "sucess";
	header("location:friend.php");
	}
	?>