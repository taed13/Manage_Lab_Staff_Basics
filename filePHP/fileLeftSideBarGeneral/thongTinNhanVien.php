<?php
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_error($link));
$db_selected = mysqli_select_db($link, 'DULIEU');
$rs = mysqli_query($link, "SELECT * FROM nhanvien");

echo '<h2 style="text-align:center">Dữ liệu Nhân Viên</h2>';
echo '<table border="1" width="100%" class="table table-striped">';
// tieu de cua bang du lieu khi hien thi len web
echo '<tr>
        <th>IDNV</th>
        <th>Họ tên</th>
        <th>IDPB</th>
        <th>Địa chỉ</th>
    </tr>';
while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
    echo '<tr>
        <td>' . $row['IDNV'] . '</td>
        <td>' . $row['HoTen'] . '</td>
        <td>' . $row['IDPB'] . '</td>
        <td>' . $row['DiaChi'] . '</td>
    </tr>';
}
echo '</table>';


mysqli_free_result($rs);
mysqli_close($link);
?>

<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

</html>