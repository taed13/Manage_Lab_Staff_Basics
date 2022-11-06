<?php
$myID = $_REQUEST['IDNV'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
$db_selected = mysqli_select_db($link, 'DULIEU');
$rs = mysqli_query($link, "SELECT * FROM nhanvien WHERE IDNV = '$myID'");
$row = mysqli_fetch_array($rs, MYSQLI_BOTH);
?>

<html>

<body>
    <form action="xulycapnhatNhanVien.php?IDNV=<?php echo $row['IDNV']; ?>" method="POST">
        <table width='100%' boder="0">
            <tr>
                <td>Mã Nhân Viên</td>
                <td><input type="text" size="20" name="txtIDNV" readonly value="<?php echo $row['IDNV']; ?>"></td>
            </tr>
            <tr>
                <td>Tên Nhân Viên</td>
                <td><input type="text" size="20" name="txtTenNV" value="<?php echo $row['HoTen']; ?>"></td>
            </tr>
            <tr>
                <td>Tên Phòng Ban</td>
                <td><input type="text" size="20" name="txtIDPB" readonly value="<?php echo $row['IDPB']; ?>"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" size="20" name="txtDiaChi" value="<?php echo $row['DiaChi']; ?>"></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="OK">
                    <input type="Reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>