<?php
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_error($link));
$db_selected = mysqli_select_db($link, 'DULIEU');
$rs = mysqli_query($link, "SELECT * FROM phongban");

echo '<h2 style="text-align:center">Dữ liệu Nhân Viên</h2>';
echo '<Form action="xulycapnhatPhongBan.php">';
echo '<table border="1" width="100%" class="table table-striped">';

echo    '<TR>
            <TH>MÃ PHÒNG BAN</TH>
            <TH>TÊN PHÒNG BAN</TH>
            <TH>MÔ TẢ</TH>
            <TH>CẬP NHẬT</TH>
        </TR>';
while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
    echo
    '<TR>
        <TD>' . $row['IDPB'] . '</TD>
        <TD>' . $row['TenPB'] . '</TD>
        <TD>' . $row['MoTa'] . '</TD>
        <TD><a HREF="formCapNhatPhongBan.php?IDPB=' . $row['IDPB'] . '">...</a></TD>
    </TR>';
}
echo '</TABLE>';
echo '</form>';
//Giai phong tap cac ban ghi trong Srs
mysqli_free_result($rs);
mysqli_close($link);
?>

<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

</html>