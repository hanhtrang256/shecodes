<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Trang đáng ghéc</title>
        <style>
            <?php include "css/styleslogin.css" ?>
        </style>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div id="signin">
            <form action="login.php" method="post">
                <h2>Login</h2>
                <div id="input-box">
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    
                    <!-- <label>USERNAME</label> <br>  -->
                    <input name="username" type="text" placeholder="Enter username" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div id="input-box">
                    <!-- <label>PASSWORD</label> <br>  -->
                    <input name="password" type="password" placeholder="Enter password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                
                <button id="btn" type="submit">Login</button>

                <div id="register-link">
                    <p>Don't have an account ? <a href="register.php">Register</a> </p>
                </div>
            </form>
        </div>
    </body>
</html>