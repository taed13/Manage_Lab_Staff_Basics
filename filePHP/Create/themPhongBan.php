<?php

@include 'config.php';

if (isset($_POST['submit'])) {

   $IDPB = mysqli_real_escape_string($conn, $_POST['IDPB']);
   $TenPB = mysqli_real_escape_string($conn, $_POST['TenPB']);
   $MoTa = mysqli_real_escape_string($conn, $_POST['MoTa']);

   $select = " SELECT * FROM phongban WHERE IDPB = '$IDPB' && TenPB ='$TenPB' && MoTa = '$MoTa' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $error[] = 'lab already exist!';
   } else {
      $insert = "INSERT INTO phongban(IDPB, TenPB, MoTa) VALUES('$IDPB', '$TenPB', '$MoTa')";
      mysqli_query($conn, $insert);
      header('location:/LabCNWEB/filePHP//Create/themPhongBan.php');
   }
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Phòng Ban</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/LabCNWEB/fileCSS/styleLogin.css">

</head>

<body>

    <div class="form-container">

        <form action="themPhongBan.php" method="post">
            <h3>Thêm Phòng Ban</h3>
            <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
            <input type="text" name="IDPB" required placeholder="enter your id lab">
            <input type="text" name="TenPB" required placeholder="enter your lab name">
            <input type="text" name="MoTa" required placeholder="enter your describe">
            <input type="submit" name="submit" value="add lab now" class="form-btn">
        </form>

    </div>

</body>

</html>