<html>
<head><title>error</title></head>
<body style="background-image:url('images/sign_background.jpg');padding:0px;margin:0px;;">
<div style='height:80px;width:100%;background-image:url(images/top_background.jpg);'>
<img src='images/gonline_logo1.png'style='height:55px;height:60px;position:absolute;margin-left:200px;margin-top:5px;'>
<div style='color:blue;font-size:45px;margin-left:300px;padding-top:6px;'>GO ONLINE</div>
</div><div style='background-color:#FFE4E1;color:blue;width:550px;height:550px;margin-left:410px;margin-top:30px;text-align:center;font-size:30px;'>your account will not be registered
<img src="images/sorypic.gif"style="height:430px;width:510px;margin-top:10px;">
        
</body>
</html>
<?php
//session_start();
$conn=mysqli_connect("localhost","root","","goline");

 $name=$_POST['name'];
 $email=$_POST['email'];
 $email2=$_POST['email2'];
 $password=$_POST['Password'];
 $gender=$_POST['sex'];
 $birthday=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
 		
	  if($name==''){
		  echo "<script>alert('name field not empty')</script>";
		echo "<div><a href='index.php'><button>previous</button></a></div>";
		exit();
	  }
	  if($email==''){
		  echo "<script>alert('email does not empty')</script>";
	     echo "<div><a href='index.php'><button>previous</button></a></div>";
		 exit();
	  }
	  if($password==''){
		  echo "<script>alert('password should not be empty')</script>";
		echo "<div><a href='index.php'><button>previous</button></a></div>";
		exit();
	  }
	  if($gender==''){
		  echo "<script>alert('sex field will not be empty chose any one')</script>";
	   echo "<div><a href='index.php'><button>previous</button></a></div>";
	   exit();
	   		 
		 //if($birthday=''){
		  //echo "<script>alert('password should not be empty')</script>";
//	echo "<div><a href='index.php'><button>previous</button></a></div>";
	//exit();
		 }
	  else{
	$query=mysqli_query($conn,"SELECT * FROM 'users' WHERE email='".$email."'");
       $numrows=mysqli_num_rows($query);
	   if($numrows==0)
	{ 

		
      $sql="INSERT INTO `users`(name,email,password,gender,birthday_date)
       VALUES ('$name','$email','$password','$gender','$birthday')"; 
	if($conn->query($sql)){
	 header("location:go_files/profile.php");
////////////////////////////////////////////
	 
$email=$_POST['email'];
$pass=$_POST['password'];	

$conn=mysqli_connect("localhost","root","","goline");
$sql=mysqli_query($conn,"SELECT * FROM `users` WHERE email='".$email."' AND password='".$pass."'");

$numrows=mysqli_num_rows($sql);
//if($numrows!=0)
//{
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
		//header("location:go_files/home.php");
	
	////////////////////////////////////////////////////
		}
		else{
		echo "<br>error".$sql."<br>".$conn->error;
	   
	   }
	}}
else{
		  echo "this email have have been already exist";
	  }
	  
}
?>