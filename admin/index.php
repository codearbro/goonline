<! doctype html>
<html>
<head>
<title>login for admin
</title>
</head>
<body style="background-image:url('../go_files/images/finish_back.png');padding:0px;margin:0px;;">
<div style="aborder:solid black 2px;height:60px;width:100%;background-image:url('../images/top_background.jpg');">
<img src='../images/gonline_logo1.png'style='height:55px;height:60px;position:absolute;margin-left:10px;margin-top:2px;'>
<div style="position:absolute;color:blue;margin-top:5px;margin-left:79px;font-size:40px;">Go Online</div>

<div style="position:absolute;height:400px;width:400px;background-color:grey;margin-left:450px;margin-top:100px;border-radius:15px;">
<DIV style="text-align:center;font-size:25px;margin-top:10px;font-family:algerian;color:white;">LOG IN AS ADMIN</div>
<form method="post"action="index.php">
</br><div style="margin-left:50px;margin-top:50px;color:cyan;font-size:20px;">USERNAME:
</br><input type="text" name="username" style="width:300px;height:30px;color:white;background-color:#050012;border-radius:6px;"></div>
</br><div style="margin-left:50px;margin-top:0px;color:cyan;font-size:20px;">PASSWORD
</br><input type="password" name="password"style="width:300px;height:30px;color:white;background-color:#050012;border-radius:6px;"></div>
</br><input type="submit"name="submit"value="LOG IN"style="margin-left:140px;margin-top:40px;font-size:25px;color:white;background-color:#050012;border-radius:6px;">
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$pass=$_POST['password'];	

$conn=mysqli_connect("localhost","root","","goline");
$sql=mysqli_query($conn,"SELECT * FROM `admin` WHERE username='".$username."' AND password='".$pass."'");

$numrows=mysqli_num_rows($sql);
if($numrows!=0)
{
	while($row=mysqli_fetch_assoc($sql))
	{
		$username=$row['name'];
		$pass=$row['password'];
	}
	if($pass == $pass && $username==$username)
	{
				
		header("location:users.php");	
	}
}else
{
	echo "<div style='position:absolute;margin-left:480px;margin-top:500px;color:darkred;font-size:22px;font-weight:bold;'>You are not ADMIN please try again</div>";
}
}