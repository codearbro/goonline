<?php
include("../login.php");
//include("profile_config.php");

session_start();
if(!isset($_SESSION["sess_user"]) && !isset($_SESSION["profile"])){
		header("location:../index.php");
}
	//if(!isset($_SESSION["profile"])){
		//header("location:../index.php");
//}
else{

?>
<html>
<head><link rel="stylesheet" type="text/css"href="css/home.css">
<title>home</title>
</head>
<body style="background-image:url('images/finish_back.png');background-attachment: fixed;">
<!--top-->
<div style="aborder:solid black 2px;height:60px;width:100%;background-image:url('images/top_background.jpg');">
<img src='../images/gonline_logo1.png'style='height:55px;height:60px;position:absolute;margin-left:10px;margin-top:2px;'>
<div style="position:absolute;color:blue;margin-top:5px;margin-left:79px;font-size:40px;">Go Online</div>

<form method="post">
	<div style="position:absolute; left:19%; top:2%; z-index:1;"> 
	<input type="text" name="search1" style="height:25; width:500;" placeholder="Search for people"> 
	<button type="submit"name="search"><img src='images/1search.png'style="margin-top:-14px;position:absolute;margin-left:-32px;"/>
	 </button>
</div>
</form>
<?php
if(isset($_POST['search']))
{
	$sname=$_POST['search1'];
	$ddb=mysqli_connect("localhost","root","","goline");
	$ssql=mysqli_query($ddb,"SELECT * FROM `profile`");
	while($mmrow=mysqli_fetch_array($ssql))
	{
		if($sname==$mmrow['name']){
			header("location:search_result.php?name=".$mmrow['name']."");

		break;
		}
		else
			echo "<script>alert('people not found')</script>";
		break;
	}
}
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
<img src="images/share2.png"style="position:absolute;height:30;width:30;margin-left:auto;margin-top:-5px;opacity:0.9"></a>
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
</div>
<?php
}
?>
<div style="background-color:#aaf9ff;position:absolute;border-left:solid white 2px;border-right:solid white 2px;width:800px;height:auto;margin-left:300px;margin-top:0px;">

<?php echo "<a href='go_user/user_profile.php'><img src='uploads/".$userdata['profile_pic']."'style='position:absolute;width:80px;height:80px;margin-left:60px;margin-top:10px;' ></a>"?>


<!--for show email-->
<div style="color:grey;font-size:20px;position:static;margin-left:179px;margin-right:259px;margin-top:30px;margin-bottom:10px;border-bottom:inset white 2px;">
welcome,<?php echo $userdata['name'] ?>
</div>
<div>
<div style="background-color:white;height:300px;">
<form action="post_img_upload.php"method="post"enctype="multipart/form-data"style="height:30px;">
<div style="position:absolute;margin-left:20px;margin-top:35px;font-size:20px;color:blue;">Images</div>
<div style="position:absolute;margin-left:25px;margin-top:60px;border:inset grey 1px;height:70px;width:580px;padding:4px 4px 4px 4px">
<input type="file"name="imgstory"style="position:absolute;width:200px;height:20px;font-size:12px;">
<input type="submit"name="postimage"value="preview"style="font-weight:bold;width:50px;height:22px;margin-left:220px;margin-bottom:10px;color:white;background-color:grey;font-size:12px;">
</div>
</form>
<!------->
<form action="home.php"method="post">
<DIV style="margin-top:85px;margin-left:29px;">	
<div style="position:absolute;margin-top:-25px;color:red;font-size:15px;"> Please browse same picture </div>
<input type="file"name="post_image"style="position:absolute;width:200px;height:20px;font-size:12px;">
</div>
<div style="position:absolute;margin-left:20px;margin-top:22px;font-size:20px;color:blue;">Your story:</div>
<div style="position:absolute;margin-left:25px;margin-top:45px;">
<input type="text"name="story"placeholder=" Hello ,<?php echo $userdata['name'] ?>  write somthing here."style="osition:absolute;width:600px;height:100px;font-size:20px;">
</br>
<div style="margin-top:10px;">
<input type="submit"name="poststory"value="POST"style="position:absolute;font-weight:bold;width:70px;height:28px;margin-left:600px;margin-top:0px;color:white;background-color:green;font-size:14px;">
</div></div>
</form>
<!--post images for folder-->
</div>
<!-- there is an php for story-->
<?php
if(isset($_POST['poststory']))
{
	$name=$userdata['name'];
	$story=$_POST['story'];
	$image=$_POST['post_image'];
	$db=mysqli_connect("localhost","root","","goline");
	$sql=mysqli_query($db,"INSERT INTO `user_post` (name,story,post_image) VALUES('$name','$story','$image')");
	?>
	<script type="text/javascript">
window.location="home.php";
</script>
	<?php
	}
	?>
	<!--php for show story-->
	<?php
	$db=mysqli_connect("localhost","root","","goline");
	$sql="SELECT * FROM `user_post`";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_array($result)){
			if($userdata['name']==$row['name']){
			$ddb=mysqli_connect("localhost","root","","goline");
$ssql=mysqli_query($ddb,"select * from `profile`");
while($user=mysqli_fetch_assoc($ssql))
{
	if($row['name']==$user['name']){
			ECHO "<div style='margin-left:190px;color:grey;margin-top:30px;border-bottom:solid grey 2px;margin-right:350px;'><img src='uploads/".$user['profile_pic']."'style='height:40px;width:40px;border-radius:20px;margin-top:-13px;margin-left:-50px;position:absolute;'>".$user['name']." , shared his story</div>";
}}
			echo "<div style='background-color:snow;padding:2px 2px 2px 2px;width:60%;height:auto;margin-left:140px;margin-top:10px;color:#ff288f;'>
			".$row['story']."";
			if($row['post_image']!=""){
			echo "<img src='post_img_upload/".$row['post_image']."'style='background-color:snow;padding:2px 2px 2px 2px;width:60%;height:auto;margin-left:140px;margin-top:10px;color:#ff288f;'>";
			}?> 
		</br><a href="delete.php?id=<?php echo $row['id']?>"style='text-decoration:none;color:white;background-color:grey;'>delete this post</a><?php
		echo "</br></div>";
		}}
		
	}
	?>
</div>

</div>
<?php
}
?>

</body>
</html>
