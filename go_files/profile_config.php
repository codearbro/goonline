<?php
if(isset($_POST["upload"]))
{
	$conn=mysqli_connect("localhost","root","","goline");
 $name=$_POST['name'];
 $email=$_POST['email'];
 $images=$_POST['profile_pic'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $country=$_POST['country'];
 $bio=$_POST['bio'];
 $mobile=$_POST['mobile_no'];
 $sql=mysqli_query($conn,"INSERT INTO `profile`(name,email,profile_pic,city,state,country,bio,mobile_no) 
 VALUES ('$name','$email','$images','$city','$state','$country','$bio','$mobile')");
///////////////

///////////////
session_start();
$_SESSION['profile']=$email;
 header("location:go_user/user_profile.php");
 }

?>
<html>
<head><title>error</title></head>
<body style="background-image:url('images/finish_back.png');padding:0px;margin:0px;;">
<div style='height:80px;width:100%;background-image:url(images/top_background.jpg);'>
<img src='images/gonline_logo1.png'style='height:55px;height:60px;position:absolute;margin-left:200px;margin-top:5px;'>
<div style='color:blue;font-size:45px;margin-left:300px;padding-top:6px;'>GO ONLINE</div>
</div>
    <div style="background-color:#E0FFFF;height:550px;width:600px;margin-left:410px;margin-top:10px;">  
</div>
<div style='position:absolute;margin-left:660px;margin-top:-40px;'>
	 <a href='profile.php'style='border:outset grey 2px;padding:2px 2px 2px 2px;width:100px;height:30px;text-decoration:none;font-size:25px;background-color:grey;color:white;'>
	 Previous</a>
	 </div>
	
</body>
</html>


 

	 
 
 

