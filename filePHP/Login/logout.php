<?php
@include 'config.php';
session_start();
session_unset();
session_destroy();
header('location:loginForm.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home IT Faculty</title>
    <link rel="stylesheet" href="/PracticeFirst/fileCSS/index.css">
</head>

<body>
    <div class="container">
        <img src="/PracticeFirst/image/Optimized-header_1 (1).png" alt="" class="header">
        <iframe src="/PracticeFirst/filePHP/animation.php" name="target_form"></iframe>
        <aside name="left-sidebar" class="left-sidebar">
            <a href="/PracticeFirst/filePHP/fileLeftSideBarGeneral/mainForm.php" target="target_form">Trang chủ</a>
            <a href="/PracticeFirst/filePHP/fileLeftSideBarGeneral/thongTinNhanVien.php" target="target_form">Thông Tin
                Nhân Viên<nav></nav></a>
            <a href="/PracticeFirst/filePHP/fileLeftSideBarGeneral/thongTinPhongBan.php" target="target_form">Thông Tin
                Phòng Ban</a>
            <a href="/PracticeFirst/filePHP/Read/timkiemNhanVien.php" target="target_form">Tìm Kiếm Nhân Viên</a>
            <a href="/PracticeFirst/filePHP/Read/timkiemPhongBan.php" target="target_form">Tìm Kiếm Phòng Ban</a>
            <a href="/PracticeFirst/filePHP/Login/loginForm.php" target="target_form">Đăng Xuất</a>
        </aside>
        <img src="/PracticeFirst/image/footer.png" alt="" class="footer">
    </div>
</body>

</html>