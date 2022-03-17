<?php
$db=mysqli_connect("localhost","root","","goline");
$id=$_GET['id'];
$del="DELETE FROM `user_post` WHERE `user_post`.`id` = $id";
mysqli_query($db,$del);
header("location:users.php");
?>