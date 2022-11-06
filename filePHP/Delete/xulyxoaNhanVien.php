<?php
$id = $_REQUEST['IDNV'];
$link = mysqli_connect("localhost", "root", "") or die("ko the kn");
mysqli_select_db($link, "DULIEU");
$sql = "DELETE FROM nhanvien WHERE IDNV = '$id'";
$rs = mysqli_query($link, $sql);
mysqli_free_result($rs);
mysqli_close($link);
header("Location:xoaNhanVien.php");
?>

<html>

</html>