<style>
.*{
	padding:0px;
	margin:0px;
}
</style>
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

<div style="background-color:#aaf9ff;position:absolute;border-left:solid white 2px;border-right:solid white 2px;width:400px;height:auto;;margin-left:0px;margin-top:60px;">
<!--for friends -->

<div style="margin-left:20px;margin-top:20px;color:grey;font-size:25px;">
FRIENDS:</div></br>
<?php
$db=mysqli_connect("localhost","root","","goline");
	$sql=mysqli_query($db,"select * from `friends`");

while($frow=mysqli_fetch_assoc($sql)){

if(($frow['sender_id']==$userdata['email'])&&$frow['flag']==1){
//echo $frow['reciever_id'];
$fremail=$frow['reciever_id'];
$ddb=mysqli_connect("localhost","root","","goline");
$ssql=mysqli_query($ddb,"select * from `profile`");
while($user=mysqli_fetch_assoc($ssql))
{
	if($fremail==$user['email']){
		echo "<img src='uploads/".$user['profile_pic']."'style='height:130px;width:130px;margin:13px 13px 13px 13px;'>";
echo "<div style='position:absolute;margin-left:160px;margin-top:-120px;font-size:25px;font-weight:bold;'>".$user['name']."</br>
		<h1 style='font-size:15px;'>".$user['bio']."</h1></div>";
?>
<a href="chat.php?email=<?php echo $user['email'];?>"style="position:absolute;margin-top:100px;margin-left:20px;text-decoration:none;font-size:18px;color:white;background-color:grey;padding:2px 2px 2px 2px;border:inset white 2px;">
message
</a>
<?php
echo "</br>";
}}
}
if(($frow['reciever_id']==$userdata['email'])&&$frow['flag']==1){
//echo $frow['reciever_id'];
$fremail=$frow['sender_id'];
$ddb=mysqli_connect("localhost","root","","goline");
$ssql=mysqli_query($ddb,"select * from `profile`");
while($user=mysqli_fetch_assoc($ssql))
{
	if($fremail==$user['email']){
		echo "<img src='uploads/".$user['profile_pic']."'style='height:130px;width:130px;margin:13px 13px 13px 13px;'>";
echo "<div style='position:absolute;margin-left:160px;margin-top:-120px;font-size:25px;font-weight:bold;'>".$user['name']."</br>
		<h1 style='font-size:15px;'>".$user['bio']."</h1></div>";
?>
<a href="chat.php?email=<?php echo $user['email'];?>"style="position:absolute;margin-top:100px;margin-left:20px;text-decoration:none;font-size:18px;color:white;background-color:grey;padding:2px 2px 2px 2px;border:inset white 2px;">
message
</a>
<?php
echo "</br>";
}}
}
}
?>
</div>
<?php
$conn=mysqli_connect("localhost","root","","goline");
$email=$_GET['email'];
//echo $_GET['email'];
$sql=mysqli_query($conn,"SELECT * FROM `profile` WHERE email='$email'");

while($row=mysqli_fetch_assoc($sql))
	{
		$email=$row['email'];
		if($email==$email)
	{
		//echo "complete";
	
 //if(isset($_POST['message']))
 
?>
 <div style="position:fixed;height:594px;width:962px;margin-top:60px;margin-left:400px;background-color:white;">

 <?php
 {
  $fremail=$email;
  $ddb=mysqli_connect("localhost","root","","goline");
  $ssql=mysqli_query($ddb,"select * from `profile`");
   while($user=mysqli_fetch_assoc($ssql))
   {
	if($fremail==$user['email']){
		echo "<div style='border:groove white 2px;background-color:azure;'>";
		echo "<img src='uploads/".$user['profile_pic']."'style='height:40px;width:40px;margin-left:0px;'>";
        echo "<div style='margin-left:50px;margin-top:-40px;margin-bottom:8px;font-size:18px;font-weight:bold;'>".$user['name']."
		<h1 style='font-size:10px;'>".$user['bio']."</h1></div>";
        echo "</div>";
	?>
<div style="height:450px;width:952px;overflow:auto;overflow-y:scroll">	
	<?php
	$msql=mysqli_query($db,"SELECT * FROM `message`");
while($mrow=mysqli_fetch_assoc($msql)){
if($mrow['sender_id']==$userdata['email']&&$mrow['reciever_id']==$fremail){
?>

	<div style="margin-top:18px;margin-left:500px;background-color:hotpink;font-style:italic;font-weight:bold;margin-right:100px;height:30px;padding:3px 3px 2px 2px;border-radius:4px;">
	<?php echo $mrow['message'];?>
</div>
<?php
}	
if($mrow['sender_id']==$fremail&&$mrow['reciever_id']==$userdata['email']){
?>
	<div style="margin-top:18px;margin-left:80px;background-color:aqua;font-style:italic;font-weight:bold;margin-right:600px;height:30px;padding:3px 3px 2px 2px;border-radius:4px;">
	<?php echo $mrow['message'];?>

</div>

<?php
}
}	
?>
</div>
<form method="post"style="margin-top:30px;margin-left:0px;border:groove pink 4px;width:950px;background-color:lavender">
<input type="text"name="message"placeholder="write message here"style="height:60px;width:850px;font-size:18px;">
<input type="submit"value="SEND"name="text"style="height:30px;width:70px;margin-left:20px;color:white;font-size:16px;background-color:green;">
</form>
<?php
if(isset($_POST['text']))
{
	$dbb=mysqli_connect("localhost","root","","goline");
	$sender=$userdata['email'];
	$reciever=$fremail;
	$message=$_POST['message'];
	$mysql=mysqli_query($db,"INSERT INTO `message`(sender_id,reciever_id,message)VALUES ('$sender','$reciever','$message')");
	?>
	
<?php
	}

}}
}
}
?>

</div>	
	<?php
 }
?>

</div>

</body>
</html>

<?php
}}
?>
