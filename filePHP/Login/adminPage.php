<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:loginForm.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home IT Faculty</title>
    <link rel="stylesheet" href="/PracticeFirst/fileCSS/index.css">
    <script src="/PracticeFirst/fileJS/home.js"></script>
</head>

<body>
    <div class="container">
        <img src="/PracticeFirst/image/Optimized-header_1 (1).png" alt="Paris" class="header">
        <iframe src="/PracticeFirst/filePHP/animation.php" name="target_form"></iframe>
        <aside class="left-sidebar">
            <p style="color:#CCF381;" onclick="myFunction()" id="nameadmin">ADMIN: <?php echo $_SESSION['admin_name'] ?></p>
            <a href=" /PracticeFirst/filePHP/fileLeftSideBarGeneral/mainForm.php" target="target_form">Trang chủ</a>
            <a href="/PracticeFirst/filePHP/fileLeftSideBarGeneral/thongTinNhanVien.php" target="target_form">Thông Tin
                Nhân Viên<nav></nav></a>
            <a href="/PracticeFirst/filePHP/fileLeftSideBarGeneral/thongTinPhongBan.php" target="target_form">Thông Tin
                Phòng Ban</a>
            <a href="/PracticeFirst/filePHP/Read/timkiemNhanVien.php" target="target_form">Tìm Kiếm Nhân Viên</a>
            <a href="/PracticeFirst/filePHP/Read/timkiemPhongBan.php" target="target_form">Tìm Kiếm Phòng Ban</a>
            <a href="/PracticeFirst/filePHP/Create/themNhanVien.php" target="target_form">Thêm Nhân Viên</a>
            <a href="/PracticeFirst/filePHP/Create/themPhongBan.php" target="target_form">Thêm Phòng Ban</a>
            <a href="/PracticeFirst/filePHP/Update/capnhatNhanVien.php" target="target_form">Cập Nhật Thông Tin Nhân
                Viên</a>
            <a href="/PracticeFirst/filePHP/Update/capnhatPhongBan.php" target="target_form">Cập Nhật Thông Tin Phòng
                Ban</a>
            <a href="/PracticeFirst/filePHP/Delete/xoaNhanVien.php" target="target_form">Xoá Thông Tin</a>
            <a href="/PracticeFirst/filePHP/Delete/xoatatcaNhanVien.php" target="target_form">Xoá Tất Cả</a>
            <a href="/PracticeFirst/filePHP/index.php" target="_top">Đăng Xuất</a>
        </aside>
        <img src="/PracticeFirst/image/footer.png" alt="Paris" class="footer">
    </div>
</body>

</html>