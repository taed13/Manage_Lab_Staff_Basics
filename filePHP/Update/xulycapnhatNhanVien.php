<?php

$myID = $_REQUEST['txtIDNV'];
$tennv = $_REQUEST['txtTenNV'];
$myIDPB = $_REQUEST['txtIDPB'];
$diachi = $_REQUEST['txtDiaChi'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
$db_selected = mysqli_select_db($link, 'DULIEU');
$rs = mysqli_query($link, "UPDATE nhanvien Set HoTen = '$tennv', DiaChi = '$diachi'
WHERE IDNV = '$myID'");

header("Location:capnhatNhanVien.php");

?>

<html>

</html>