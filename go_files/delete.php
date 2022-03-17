<?php
$db=mysqli_connect("localhost","root","","goline");
$id=$_GET['id'];
$del="DELETE FROM `user_post` WHERE `user_post`.`id` = $id";
mysqli_query($db,$del);
?>
<script type="text/javascript">
window.location="home.php";
</script>