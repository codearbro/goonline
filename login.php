<?php
if(isset($_POST["login"])){
$email=$_POST['email'];
$pass=$_POST['password'];	

$conn=mysqli_connect("localhost","root","","goline");
$sql=mysqli_query($conn,"SELECT * FROM `users` WHERE email='".$email."' AND password='".$pass."'");

$numrows=mysqli_num_rows($sql);
if($numrows!=0)
{
	while($row=mysqli_fetch_assoc($sql))
	{
		$email=$row['email'];
		$pass=$row['password'];
	}
	if($pass == $pass && $email==$email)
	{
		session_start();
		$_SESSION['sess_user']=$email;
		$_SESSION['profile']=$email;
		
	header("location:go_files/home.php");	
	}
	/////////////////////////////
	
	
	////////////////////////
}else{
	 ?>
	 
<html>
<head><title>reload information</title></head>
<body style="margin:0px;padding:0px;">
<body style="background-image:url('images/sign_background.jpg');padding:0px;margin:0px;;">
<div style='height:80px;width:100%;background-image:url(images/top_background.jpg);'>
<img src='images/gonline_logo1.png'style='height:55px;height:60px;position:absolute;margin-left:200px;margin-top:5px;'>
<div style='color:blue;font-size:45px;margin-left:300px;padding-top:6px;'>GO ONLINE</div>
<h1 style="text-align:center;color:blue;">Email or password does not match</h1>
	<form method="post" action="login.php"><div style="margin-top:50px;margin-left:478px;background-color:lightblue;height:200px;width:400px;">
   <div style="position:absolute;margin-top:25px;margin-left:100px;color:#2f1c2d;font-size:20px;">Email:</div>
   <div style="position:absolute;margin-top:60px;margin-left:100px;"><input type="text"name="email"placeholder=" Email here"style="height:20px;width:170px;"></div>
</br><div style="position:absolute;margin-top:70px;margin-left:100px;color:#2f1c2d;font-size:20px;"> Password:</div>
   <div style="position:absolute;margin-top:100px;margin-left:100px;"><input type="password"name="password"placeholder=" Password here" style="height:20px;width:170px;"></div>
 <div style="position:absolute;margin-top:140px;margin-left:150px;">
 <input type="submit"value="LOG IN"name="login"style="border:outset white 1px;pading:2px 2px 2px 2px;width:65px;height:27px;color:white;background-color:#0abb15;font-weight:bold;margin:3px;"></div>
</div></form>
</body>
</html>
<?php	
}
}
?>
