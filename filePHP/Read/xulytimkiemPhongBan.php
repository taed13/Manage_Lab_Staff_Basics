<?php
$radio = $_REQUEST['r1'];
$data = $_REQUEST['info'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_connect_error($link));
$db_selected = mysqli_select_db($link, 'DULIEU');
if ($radio == 'rIDPB')
    $rs = mysqli_query($link, "SELECT * FROM phongban WHERE IDPB = '$data'");
if ($radio == 'rTenPB')
    $rs = mysqli_query($link, "SELECT * FROM phongban WHERE TenPB LIKE '%$data%'");
if ($radio == 'rMoTa')
    $rs = mysqli_query($link, "SELECT * FROM phongban WHERE MoTa LIKE '%$data%'");

echo '<h2 style="text-align:center">Dữ liệu Phòng Ban</h2>';
echo '<table border="1" width="100%" class="table table-striped">';
echo    '<TR>
            <TH>IDPB</TH>
            <TH>Tên Phòng Ban</TH>
            <TH>Mô tả</TH>
        </TR>';
while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
    echo    '<TR>
                <TD>' . $row['IDPB'] . '</TD>
                <TD>' . $row['TenPB'] . '</TD>
                <TD>' . $row['MoTa'] . '</TD>
            <TR>';
}
echo '<TABLE>';

mysqli_free_result($rs);
mysqli_close($link);

?>

<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

</html>