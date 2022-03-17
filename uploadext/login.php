<?php
session_start();
session_start();
if(isset($_post['submitlogin'])){
	$_SESSION['id']=1;
	header("location:index.php");
}
?>.