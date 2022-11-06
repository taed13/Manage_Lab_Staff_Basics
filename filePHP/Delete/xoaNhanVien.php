<?php
$link = mysqli_connect("localhost", "root", "") or die("không thể kết nối đến MYSQL");
mysqli_select_db($link, "DULIEU");
$sql = "SELECT * FROM nhanvien";
$result = mysqli_query($link, $sql);
echo "<table border = 1 width = 100%>
    <caption >Xóa Nhân Viên</caption>";
echo    "<TR>
            <TH>Mã NV</TH>
            <TH>Tên NV</TH>
            <TH>Mã PB</TH>
            <TH>Địa Chỉ</TH>
            <TH>chọn</TH>
        </TR>";
while ($row = mysqli_fetch_array($result)) {

    echo    "<TR>
                <TD>" . $row['IDNV'] . "</TD>
                <TD>" . $row['HoTen'] . "</TD>
                <TD>" . $row['IDPB'] . "</TD>
                <TD>" . $row['DiaChi'] . "</TD>
                <TD style = 'text-align:center'><a href = 'xulyxoaNhanVien.php?IDNV=" . $row['IDNV'] . "'>xxx</a></TD>
            </TR>";
}

echo "</table>";
mysqli_free_result($result);
mysqli_close($link);
?>

<html>

</html>