<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Kiem</title>
    <link rel="stylesheet" href="/PracticeFirst/fileCSS/styleLogin.css">
</head>

<body>
    <div class="form-container">
        <form name="f1" action="xulytimkiemNhanVien.php" method="post">
            <div>
                <h3>Tìm kiếm thông tin Nhân Viên</h3>
            </div>
            <div>
                Tìm kiếm theo:
                <input type="radio" name="r1" value="rIDNV" checked="checked">IDNV
                <input type="radio" name="r1" value="rHoten">Họ Tên
                <input type="radio" name="r1" value="rDiachi">Địa Chỉ
            </div>
            <div>
                Nhập thông tin nhân viên:
                <input type="text" name="info" required placeholder="enter infor">
            </div>
            <div>
                <input type="submit" name="submit" value="OK" class="form-btn">
                <input type="reset" name="reset" value="Reset" class="form-btn">
            </div>
        </form>
    </div>
</body>

</html>