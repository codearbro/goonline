<?php
$db=mysqli_connect("localhost","root","","goline");
    $id=$_GET['id'];
    $del="UPDATE `friends`SET flag='1' WHERE `friends`.`id` = $id";
	mysqli_query($db,$del);
header("location:friend.php");
	?>