<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Register nè Trang đáng ghéc</title>
        <style>
            <?php include "css/styles3.css" ?>
        </style>
    </head>
    <body>
        <div id="signup-div">
            <form id="signup-form" action="signup-check.php" method="post">
                <div id="reg"> 
                    <h2>Register</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                </div>
                
                <div id="reg">
                    <?php if (isset($_GET['name'])) { ?>
                        <input name="name" type="text" placeholder="Enter name" value="<?php echo $_GET['name']; ?>">
                    <?php } else{ ?>
                        <input name="name" type="text" placeholder="Enter name">
                    <?php  }?>
                </div>
                
                <div id="reg">
                    <?php if (isset($_GET['username'])) { ?>
                        <input name="username" type="text" placeholder="Enter username" value="<?php echo $_GET['username']; ?>">
                    <?php } else{ ?>
                        <input name="username" type="text" placeholder="Enter username">
                    <?php  }?>
                </div>
                
                <div id="reg">
                    <input name="password" type="password" placeholder="Enter password">
                </div>

                <div id="reg">
                    <input name="repassword" type="password" placeholder="Confirm your password">
                </div>

                <button id="btn" type="submit">Create</button>
                
                <div id="goback">
                    <a href="index.php" class="ca">Already have an account ?</a>
                </div>
            </form>
        </div>
    </body>
</html>