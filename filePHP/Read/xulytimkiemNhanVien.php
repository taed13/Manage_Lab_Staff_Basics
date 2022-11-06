<?php
$radio = $_REQUEST['r1'];
$data = $_REQUEST['info'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_connect_error($link));
$db_selected = mysqli_select_db($link, 'DULIEU');
if ($radio == 'rIDNV')
    $rs = mysqli_query($link, "SELECT * FROM nhanvien WHERE IDNV = '$data'");
if ($radio == 'rHoten')
    $rs = mysqli_query($link, "SELECT * FROM nhanvien WHERE Hoten LIKE '%$data%'");
if ($radio == 'rDiachi')
    $rs = mysqli_query($link, "SELECT * FROM nhanvien WHERE Diachi LIKE '%$data%'");

echo '<table border="1" width="100%">';
echo '<caption>Dữ liệu bảng Nhân Viên</caption>';
echo    '<TR>
            <TH>IDNV</TH>
            <TH>Họ tên</TH>
            <TH>IDPB</TH>
            <TH>Địa chỉ</TH>
        </TR>';
while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
    echo    '<TR>
                <TD>' . $row['IDNV'] . '</TD>
                <TD>' . $row['HoTen'] . '</TD>
                <TD>' . $row['IDPB'] . '</TD>
                <TD>' . $row['DiaChi'] . '</TD>
            <TR>';
}
echo '<TABLE>';

mysqli_free_result($rs);
mysqli_close($link);

?>

<html>

</html>