<?php
mysqli_connect("localhost","root","")or die("could not conected");
$db=mysqli_select_db("image")or die("note conected");
if(!db){
echo "not";
}else{
echo "yes";
}
?>