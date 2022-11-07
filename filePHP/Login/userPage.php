<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
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
    <link rel="stylesheet" href="/LabCNWEB/fileCSS/index.css">
</head>

<body>
    <div class="container">
        <img src="/LabCNWEB/image/Optimized-header_1 (1).png" alt="" class="header">
        <iframe src="/LabCNWEB/filePHP/animation.php" name="target_form"></iframe>
        <aside name="left-sidebar" class="left-sidebar">
            <p style="color:#CCF381;">USER: <?php echo $_SESSION['user_name'] ?></p>
            <a href="/LabCNWEB/filePHP/fileLeftSideBarGeneral/mainForm.php" target="target_form">Trang chủ</a>
            <a href="/LabCNWEB/filePHP/fileLeftSideBarGeneral/thongTinNhanVien.php" target="target_form">Thông Tin
                Nhân Viên<nav></nav></a>
            <a href="/LabCNWEB/filePHP/fileLeftSideBarGeneral/thongTinPhongBan.php" target="target_form">Thông Tin
                Phòng Ban</a>
            <a href="/LabCNWEB/filePHP/Read/timkiemNhanVien.php" target="target_form">Tìm Kiếm Nhân Viên</a>
            <a href="/LabCNWEB/filePHP/Read/timkiemPhongBan.php" target="target_form">Tìm Kiếm Phòng Ban</a>
            <a href="/LabCNWEB/filePHP/index.php" target="_top">Đăng Xuất</a>
        </aside>
        <img src="/LabCNWEB/image/footer.png" alt="" class="footer">
    </div>
</body>

</html>