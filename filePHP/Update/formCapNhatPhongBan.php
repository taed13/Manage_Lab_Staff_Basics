<?php
$myID = $_REQUEST['IDPB'];
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
$db_selected = mysqli_select_db($link, 'DULIEU');
$rs = mysqli_query($link, "SELECT * FROM phongban WHERE IDPB = '$myID'");
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
                        <input type="submit" value="OK" class="form-btn">
                        <input type="Reset" value="Reset" class="form-btn">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>