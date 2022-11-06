<?php

$myID = $_REQUEST['txtIDPB'];
$tenpb = $_REQUEST['txtTenpb'];
$mota = $_REQUEST['txtMota'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
$db_selected = mysqli_select_db($link, 'DULIEU');
$rs = mysqli_query($link, "UPDATE phongban Set TenPB = '$tenpb', MoTa = '$mota' WHERE IDPB = '$myID'");

header("Location:capnhatPhongBan.php");

?>

<html>

</html>