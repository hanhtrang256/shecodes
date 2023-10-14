<?php
session_start();
include "connectdb.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>HOME</title>
        <style> 
            <?php include "css/profile.css" ?>
        </style>
    </head>
    
    <body>
        <div id="profile">
            <form action="updateinfo.php" method="post">
                <div id="info">
                    <label>Name: </label><p id="name"><?php echo $_SESSION['name']; ?></p>
                </div>

                <div id="info">
                    <label>Username: </label><p id="username"><?php echo $_SESSION['username']; ?></p>
                </div>

                <div id="info">
                    <label>Country: </label>
                    <?php 
                        $id = $_SESSION['id'];
                        $sql = "SELECT country FROM users WHERE id=$id";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_row($result);
                        $country = $row[0];
                        if (empty($country)) {
                    ?>
                    <input name="country" type="text" placeholder="Country">
                    <?php 
                        }
                        else {
                            ?><p id="country"><?php echo $country; ?></p>
                    <?php    
                        }
                    ?>
                </div>
                
                <div id="info">
                    <label>Gender: </label>
                    <?php 
                        $id = $_SESSION['id'];
                        $sql = "SELECT gender FROM users WHERE id=$id";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_row($result);
                        $gender = $row[0];
                        if (empty($gender)) {
                    ?>
                    <input name="gender" type="text" placeholder="Gender">
                    <?php 
                        } 
                        else {
                            ?><p id="gender"><?php echo $gender; ?></p>
                    <?php 
                        }
                    ?>
                </div>
                
                <!-- <div id="info">
                    <label>Date of birth: </label>
                    <input type="date" name="dob">
                </div> -->
                
                <button id="btn" type="submit">Update</button> 
                <br> <br>
                <a href="home.php">Go Back</a>
            </form>
        </div>
    </body>
</html>

