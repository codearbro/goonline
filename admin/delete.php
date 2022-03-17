<?php
$db=mysqli_connect("localhost","root","","goline");
$id=$_GET['id'];
$del="DELETE FROM `users` WHERE `users`.`id` = $id";
mysqli_query($db,$del);
?>
<script type="text/javascript">
window.location="users.php";
</script>

