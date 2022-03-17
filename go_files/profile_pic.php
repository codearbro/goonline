<?php


 $db=mysqli_connect("localhost","root","","goline");

 
 $image=$_POST['image'];
 $sql="INSERT INTO profile_pic(images) VALUES ('$image')";
mysqli_query($db,$sql);
 /*if($db->query($sql)){
	 echo "seeeeeeec";
	 }
 else{
	 echo "<br>error".$sql."<br>".$db->error;
 }*/

 ?>
 