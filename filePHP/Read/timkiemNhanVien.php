<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Kiem</title>
    <link rel="stylesheet" href="/LabCNWEB/fileCSS/them.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <h1 id="title" class="text-center">Tìm kiếm thông tin nhân viên</h1>
        </header>
        <form name="f1" action="xulytimkiemNhanVien.php" method="post">
            <div>
                Tìm kiếm theo:
                <label>
                    <input type="radio" name="r1" value="rIDNV" checked="checked" class="input-radio">IDNV
                </label>
                <label>
                    <input type="radio" name="r1" value="rHoten" class="input-radio">Họ Tên
                </label>
                <label>
                    <input type="radio" name="r1" value="rDiachi" class="input-radio">Địa Chỉ
                </label>
            </div>
            <div class="form-group">
                <label for="">Nhập thông tin nhân viên</label>
                <input type="text" name="info" class="form-control" placeholder="Enter infor you want" required="">
            </div>
            <div class="form-group">
                <button type="submit" id="submit" class="submit-button">
                    Submit
                </button>
            </div>
            <div class="form-group">
                <button type="reset" id="reset" class="submit-button">
                    Reset
                </button>
            </div>
        </form>
    </div>
</body>

</html>