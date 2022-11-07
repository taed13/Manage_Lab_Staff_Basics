<?php

@include 'config.php';

if (isset($_POST['submit'])) {

   $IDNV = mysqli_real_escape_string($conn, $_POST['IDNV']);
   $HoTen = mysqli_real_escape_string($conn, $_POST['HoTen']);
   $DiaChi = mysqli_real_escape_string($conn, $_POST['DiaChi']);
   $IDPB = mysqli_real_escape_string($conn, $_POST['IDPB']);

   $select = " SELECT * FROM nhanvien WHERE IDNV = '$IDNV' && HoTen = '$HoTen' && IDPB ='$IDPB' && DiaChi = '$DiaChi' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'user already exist!';
   } else {
      $insert = "INSERT INTO nhanvien(IDNV, HoTen, IDPB, DiaChi) VALUES('$IDNV', '$HoTen', '$IDPB', '$DiaChi')";
      mysqli_query($conn, $insert);
      header('location:/LabCNWEB/filePHP/Create/themNhanVien.php');
   }
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Nhân Viên</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/LabCNWEB/fileCSS/styleLogin.css">

</head>

<body>

    <div class="form-container">

        <form action="themNhanVien.php" method="post">
            <h3>Thêm Nhân Viên</h3>
            <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
            <input type="text" name="IDNV" required placeholder="enter your id staff">
            <input type="text" name="HoTen" required placeholder="enter your name">
            <input type="text" name="IDPB" required placeholder="enter your lab">
            <input type="text" name="DiaChi" required placeholder="enter your address">
            <input type="submit" name="submit" value="add staff now" class="form-btn">
        </form>

    </div>

</body>

</html>