<!doctype html>
<html>
<head></head>
<body>
<form name="form1"action=""method="post"enctype="multipart/form-data">
<table>
<tr>
<td>select file</td>
<td><input type="file"name='f1'></td>
</tr>
<tr>
<td><input type="submit"name="submit1"value="upload"></td>
<td><input type="submit"name="submit2"value="display"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
$db=mysqli_connect("localhost","root","","image");
if(isset($_POST['submit1']))
{

	$image=addslashes(file_get_contents($_FILES['f1']['tmp_name']));
	$sql=mysqli_query($db,"INSERT INTO `images`(image) VALUES('".$image."')");
}
if(isset($_POST['submit2']))
{
	$image=['image'];
	$db=mysqli_connect("localhost","root","","image");
	$res="select image from images WHERE image=$image";
	$sql=mysqli_query($db,$res);
	echo "<table>";
	echo "<tr>";
	$row=mysqli_fetch_array($sql);
	
	echo "<img src='data:image/jpeg:base64,'".base64_encode($row['image']).'"height="100"width="100"/>';	
	
}
?>