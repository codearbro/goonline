<?php
$db=mysqli_connect("localhost","root","","goline");
    $id=$_GET['id'];
    $del="DELETE FROM `friends` WHERE `friends`.`id` = $id";
	mysqli_query($db,$del);
header("location:friend.php");
	?>