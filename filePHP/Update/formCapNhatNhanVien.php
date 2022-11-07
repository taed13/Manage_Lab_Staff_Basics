<?php
$myID = $_REQUEST['IDNV'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
$db_selected = mysqli_select_db($link, 'DULIEU');
$rs = mysqli_query($link, "SELECT * FROM nhanvien WHERE IDNV = '$myID'");
$row = mysqli_fetch_array($rs, MYSQLI_BOTH);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/LabCNWEB/fileCSS/styleLogin.css">
</head>

<body>
    <div class="form-container">
        <form action="xulycapnhatNhanVien.php?IDNV=<?php echo $row['IDNV']; ?>" method="POST">
            <h3>Cập nhật Nhân Viên</h3>
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
                        <input type="submit" value="OK" class="form-btn">
                        <input type="Reset" value="Reset" class="form-btn">
                    </td>
                </tr>
            </table>


        </form>
    </div>
</body>


</html>