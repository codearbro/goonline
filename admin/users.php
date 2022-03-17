<html>
<head><title>admin</title>
</head>
<body style="background-image:url('../go_files/images/finish_back.png');background-attachment:fixed;padding:0px;margin:0px;">
<div style="aborder:solid black 2px;height:60px;width:100%;background-image:url('../images/top_background.jpg');">
<img src='../images/gonline_logo1.png'style='height:55px;height:60px;position:absolute;margin-left:10px;margin-top:2px;'>
<div style="position:absolute;color:blue;margin-top:5px;margin-left:79px;font-size:40px;">Go Online</div>
<div style="position:absolute;margin-left:900px;margin-top:19px;font-size:16px;">
<a href="logout.php"style="text-decoration:none;color:white;">|Logout|</a>
</div>
<div style="background-color:#aaf9ff;position:absolute;border-left:solid white 2px;border-right:solid white 2px;width:800px;height:auto;margin-left:300px;margin-top:60px;">
<div style="margin-left:300px;font-size:25px;color:blue;">USERS</div>
<table  style="margin:14px ;">
<tr style="color:green;font-weight:bold;">
<td>Id</td>
<td>Email</td>
<td>Name</td>
<td>Gender</td>
<td>Birthday</td>
<td>Delete</td>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","goline");
	$sql=mysqli_query($conn,"SELECT * FROM `users` ");
while($row=mysqli_fetch_array($sql))
{
?>
	<tr>
	<td><?php echo $row['id'];?></td>
	<td><a href="profile.php?email=<?php echo $row['email'];?>"><?php echo $row['email'];?></a></td>

	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['birthday_date'];?></td>
	<td><a href="delete.php?id=<?php echo $row['id']?>">delete</a></td>
	</tr>
<?php 
}
?>
</table>

</div>
</body>
</html>
	