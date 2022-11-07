<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm phòng ban</title>
    <link rel="stylesheet" href="/LabCNWEB/fileCSS/them.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <h1 id="title" class="text-center">Tìm kiếm thông tin phòng ban</h1>
        </header>
        <form name="f1" action="xulytimkiemPhongBan.php" method="post">
            <div>
                Tìm kiếm theo:
                <label>
                    <input type="radio" name="r1" value="rIDPB" checked="checked" class="input-radio">IDPB
                </label>
                <label>
                    <input type="radio" name="r1" value="rTenPB" class="input-radio">Tên Phòng Ban
                </label>
                <label>
                    <input type="radio" name="r1" value="rMoTa" class="input-radio">Mô tả
                </label>
            </div>
            <div class="form-group">
                <label for="">Nhập thông tin phòng ban</label>
                <input type="text" name="info" class="form-control" placeholder="Enter lab you want" required="">
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