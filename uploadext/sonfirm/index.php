<?php
include"db.php";
?>
<table border="2"style="margin_auto;">
<tr>
<th>id</th>
<th>image</th>
</tr>
<?php
$sql=mysqli_query("select * from images");
while($data=mysqli_fetch_array($sql))
{
?>
<tr>
<td><?php echo $data['id'];?></td>
<td><?php echo $data['images'];?></td>
<?php
}
?>
</table>