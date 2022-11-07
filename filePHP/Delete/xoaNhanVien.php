<?php
$link = mysqli_connect("localhost", "root", "") or die("không thể kết nối đến MYSQL");
mysqli_select_db($link, "DULIEU");
$sql = "SELECT * FROM nhanvien";
$result = mysqli_query($link, $sql);

echo '<h2 style="text-align:center">Dữ liệu Nhân Viên</h2>';
echo '<table border="1" width="100%" class="table table-striped">';
echo    "<TR>
            <TH>Mã NV</TH>
            <TH>Tên NV</TH>
            <TH>Mã PB</TH>
            <TH>Địa Chỉ</TH>
            <TH>Chọn</TH>
        </TR>";
while ($row = mysqli_fetch_array($result)) {

    echo    "<TR>
                <TD>" . $row['IDNV'] . "</TD>
                <TD>" . $row['HoTen'] . "</TD>
                <TD>" . $row['IDPB'] . "</TD>
                <TD>" . $row['DiaChi'] . "</TD>
                <TD><a href = 'xulyxoaNhanVien.php?IDNV=" . $row['IDNV'] . "'>xxx</a></TD>
            </TR>";
}

echo "</table>";
mysqli_free_result($result);
mysqli_close($link);
?>

<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

</html>