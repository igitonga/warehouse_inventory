<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Warehouse Inventory Portal</title>
</head>
<body>
    <div class="wrapper">
        <!-- alert pop up -->
        <?php  include("backend/alert.php"); ?>

        <div class="login_container">
            <img src="images/login_icon.svg" alt="" class="login_icon">
            <form action="backend/index.php" method="POST">
            <!-- email -->
                <input type="email" class="email" name="email" placeholder="Email" require value=<?php
                if(isset($_COOKIE["email"])){
                    echo $_COOKIE["email"];
                }
                ?>>
                <br>
                <!-- password -->
                <input type="password" class="password" name="password" placeholder="Password"><br>

                <button type="submit" class="btnLogin" name="btnLogin">Login</button>
                <!-- <p class="forgotPassword">Forgot Password ?</p> -->
            </form>
        </div>
    </div>

    <!-- js files -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php session_destroy(); ?>