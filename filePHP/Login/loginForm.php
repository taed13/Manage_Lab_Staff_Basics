<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/LabCNWEB/fileCSS/styleLogin.css">
    <script>
    $(function() {
        $("#includedContent").load("/LabCNWEB/filePHP/index.php");
    });
    </script>
</head>

<body>

    <div class="form-container">

        <form action="xulyLogin.php" method="post" target="_top">
            <h3>login now</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="username" name="username" required placeholder="enter your username">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have an account? <a href="registerForm.php">register now</a></p>
        </form>

    </div>

</body>

</html>