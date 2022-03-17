<?php
session_start();
unset($_SESSION['sess_user']);
unset($_SESSION['profile']);
session_destroy();
?><html>
<head><title>log out</title></head>
<body style="background-image:url('images/sign_background.jpg');padding:0px;margin:0px;;">
<div style='height:80px;width:100%;background-image:url(images/top_background.jpg);'>
<img src='images/gonline_logo1.png'style='height:55px;height:60px;position:absolute;margin-left:200px;margin-top:5px;'>
<div style='color:blue;font-size:45px;margin-left:300px;padding-top:6px;'>GO ONLINE</div>

</div>
<div style="text-align:center;">
<h1 style="text-align:center;color:blue;"> you are logout sucessfully</h1>
<a href="/goonline/index.php" style="font-size:20px;text-decoration:none;color:white;background-color:green;padding:3px 3px 3px 3px;"><strong>go to main page</strong> </a>        
</div>
</body>
</html>
