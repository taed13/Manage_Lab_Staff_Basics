<?php
$myID = $_REQUEST['IDPB'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
$db_selected = mysqli_select_db($link, 'DULIEU');
$rs = mysqli_query($link, "SELECT * FROM phongban WHERE IDPB = '$myID'");
$row = mysqli_fetch_array($rs, MYSQLI_BOTH);
?>

<html>

<body>
    <form action="xulycapnhatPhongBan.php?IDPB=<?php echo $row['IDPB']; ?>" method="POST">
        <table width='100%' boder="0">
            <tr>
                <td>MÃ PHÒNG BAN</td>
                <td><input type="text" size="20" name="txtIDPB" readonly value="<?php echo $row['IDPB']; ?>"></td>
            </tr>
            <tr>
                <td>TÊN PHÒNG BAN</td>
                <td><input type="text" size="20" name="txtTenpb" value="<?php echo $row['TenPB']; ?>"></td>
            </tr>
            <tr>
                <td>MÔ TẢ</td>
                <td><input type="text" size="20" name="txtMota" value="<?php echo $row['MoTa']; ?>"></td>
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