<?php
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_error($link));
$db_selected = mysqli_select_db($link, 'DULIEU');
$rs = mysqli_query($link, "SELECT * FROM phongban");

echo '<table border="1" width="100%">';
echo '<caption>Dữ liệu Phòng Ban</caption>';

// tieu de cua bang du lieu khi hien thi len web
echo    '<tr>
            <th>IDPB</th>
            <th>Tên Phòng Ban</th>
            <th>Mô Tả</th>
        </tr>';
while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
    echo
    '<tr>
        <td>' . $row['IDPB'] . '</td>
        <td>' . $row['TenPB'] . '</td>
        <td>' . $row['MoTa'] . '</td>
    <tr>';
}
echo '</table>';

mysqli_free_result($rs);
mysqli_close($link);
?>

<html>

</html>