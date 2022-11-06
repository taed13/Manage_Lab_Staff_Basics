<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm phòng ban</title>
    <link rel="stylesheet" href="/PracticeFirst/fileCSS/styleLogin.css">
</head>

<body>
    <div class="form-container">
        <form name="f1" action="xulytimkiemPhongBan.php" method="post">
            <div>
                <h3>Tìm kiếm thông tin Phòng Ban</h3>
            </div>
            <div>
                Tìm kiếm theo:
                <div>
                    <input type="radio" name="r1" value="rIDPB" checked="checked">IDPB
                </div>
                <div>
                    <input type="radio" name="r1" value="rTenPB">Tên Phòng Ban
                </div>
                <div>
                    <input type="radio" name="r1" value="rMoTa">Mô Tả
                </div>
            </div>
            <div>
                Nhập thông tin Phòng Ban:
                <input type="text" name="info" required placeholder="enter lab name">
            </div>
            <div>
                <input type="submit" name="submit" value="OK" class="form-btn">
                <input type="reset" name="reset" value="Reset" class="form-btn">
            </div>
        </form>
    </div>
</body>

</html>