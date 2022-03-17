
<!doctype html>
<html>
<head>
<title>welcome to go online</title>
<link rel="stylesheet" type="text/css"href="index1.css">
</head>
<script>
function time_get()
{
	d=new Date();
	mon=d.getMonth()+1;
	time=d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+";"+d.getMinutes();
	reg.fb_join_time.value=time;
	}
	</script>
<body>
<div id="top"> 
<img class="logo"src="images/gonline_logo1.png">
<div class="name">GO ONLINE</div>
<div class="top_login">
 <form method="post" action="login.php">
   <div style="position:absolute;margin-top:2px;color:#2f1c2d;font-size:20px;">Email:</div>
   <div style="position:absolute;margin-top:25px;"><input type="text"name="email"placeholder=" Email here"style="height:20px;width:170px;"></div>
<div style="position:absolute;margin-top:0px;margin-left:190px;color:#2f1c2d;font-size:20px;"> Password:</div>
   <div style="position:absolute;margin-top:25px;margin-left:190px;"><input type="password"name="password"placeholder=" Password here" style="height:20px;width:170px;"></div>
 <div style="position:absolute;margin-top:19px;margin-left:370px;">
 <input type="submit"value="LOG IN"name="login"style="border:outset white 1px;pading:2px 2px 2px 2px;width:65px;height:27px;color:white;background-color:#0abb15;font-weight:bold;margin:3px;"></div>
</form>
</div>
</div>
<div id="middle">
<div style="text-align:center;color:#8A2BE2;font-size:20px;font-weight:bold;font-family:algerian;">Go online is the fastest way to share and connect people in your life</div>
<div class="signup">
<div style="margin-bottom:-20px;color:white;font-family:algerian;"><h1>Sign up for new user</h1></div>
<form method="post"action="signup.php" >
<div style="position:absolute;float:left;margin-top:-7px;margin-left:150px;color:white;font-size:30px;">Name:</div>
<div style="positon:absolute;margin-top:70px;margin-left:130px;color:blue;"><input type="text"name="name"placeholder=" Name"style="width:240px;height:25px;color:white;background-color:#050012;border-radius:4px;"></div>
<div style="position:absolute;float:left;margin-top:10px;margin-left:150px;color:white;font-size:30px;">Email:</div>
<div style="positon:absolute;margin-top:15px;margin-left:130px;color:blue;"><input type="text"name="email" placeholder=" Email"style="width:240px;height:25px;color:white;background-color:#050012;border-radius:4px;"></div>
<div style="position:absolute;float:left;margin-top:10px;margin-left:43px;color:white;font-size:30px;">Re-enter Email:</div>
<div style="positon:absolute;margin-top:15px;margin-left:130px;color:blue;"><input type="text"name="email2"placeholder=" Confirm-email"style="width:240px;height:25px;color:white;background-color:#050012;border-radius:4px;"></div>
<div style="position:absolute;float:left;margin-top:10px;margin-left:48px;color:white;font-size:30px;">New Password:</div>
<div style="positon:absolute;margin-top:15px;margin-left:130px;color:blue;"><input type="password"name="Password"placeholder="create password"style="width:240px;height:25px;color:white;background-color:#050012;border-radius:4px;"></div>
<div style="position:absolute;margin-top:8px;margin-left:175px;color:white;font-size:30px;">I am:</div>
<div style="positon:absolute;margin-top:15px;margin-left:0px;color:blue;">
<select name="sex" style="width:40;height:25;font-size:18px;padding:3;color:white;background-color:#050012;border-radius:4px;">
			<option value="Select Sex:"> Select Sex: </option>
			<option value="Female"> Female </option>
			<option value="Male"> Male </option>
		</select></div>
<div style="position:absolute;margin-top:8px;margin-left:125px;color:white;font-size:30px;">birthday:</div>
<div style="positon:absolute;margin-top:15px;margin-left:90px;color:blue;">
<select name="month" style="width:40;height:25;font-size:18px;padding:2px;color:white;background-color:#050012;border-radius:4px;">
<option value="month:">month</option>
<script type="text/javascript">
	 
	var m=new Array("","jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec");
	for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}
			</script>
</select>
<select name="day" style="width:40;height:25;font-size:18px;padding:2px;color:white;background-color:#050012;border-radius:4px;">
<option value="day:">day:</option>
<script type="text/javascript">
    for(i=1;i<=31;i++)
	{
		document.write("<option value='"+i+"'>" + i + "</option>");
	}
	</script>
</select>
<select name="year" style="width:40;height:25;font-size:18px;padding:2px;color:white;background-color:#050012;border-radius:4px;">
<option value="year">year:</option>
<script type="text/javascript">
 for(i=2005;i>=1970;i--)
 {
	 document.write("<option value='"+i+"'>"+i+"</option>")
 }
 </script>
</select>
</br><div style="position:absolte;margin-left:-100px;margin-top:20px;">
<input type="submit" value="Sign up"name="signup"style="height:40px;width:90px;padding:5px 5px 5px 5px;font-size:20px;font-weight:bold;border:outset white 1px;color:white;background-color:#050012;border-radius:4px;">
</div></form>
</div>
</div>
</div>
</body>
</html>