<?php
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>HOME</title>
        <!-- <link rel="stylesheet" href="styles.css"> -->
        <style>
            <?php include "css/styles.css" ?>
        </style>
    </head>
    <body>
        <!----------------------------------------- TOOLBAR ------------------------------------------->
        <a id="signout" href="logout.php">Log out</a>      
        <h1 id="hello"> Hello, <a href="profile.php"><?php echo $_SESSION['name']; ?></a> </h1>
        
        <div id="toolbar">
            <div id="toolbar_left">
                <a href="https://www.facebook.com/">LOCATIONS</a>
                <a href="https://www.usaco.guide/">COLLEGE CATALOG</a>
                <a href="https://www.usaco.guide/">EVENTS</a>
                <a href="https://www.usaco.guide/">CANVAS LOGIN</a>
                <a href="https://www.usaco.guide/">WORKFORCE DEVELOPMENT</a>
            </div>
            <div id="toolbar_right">
                <a href="https://www.usaco.guide/">Jobs</a>
                <a href="https://www.usaco.guide/">Give</a>
                <a href="https://www.usaco.guide/">MyCCP</a>
                <a href="https://www.facebook.com/">Apply</a>
            </div>
        </div>

        <!----------------------------------------- HOME ------------------------------------------->
        <div id="home">
            <h1 style="float:left" title="Home">Community of Philadelphia</h1>
        </div>

        <div id="Search">
            <input placeholder="Search" id="searchbox" type="search">
            <img src="img/logo_search.png" title="search">
        </div>

        <!----------------------------------------- INTRO ------------------------------------------->
        <div id="intro">
            <ul id="intro_show">
                <li id="intro1">
                    <a id="link1" href="https://ccp.edu/why-choose-us">WHY CHOOSE US</a>
                    <ul id="list">
                        <ul id="list1">
                            <li><a href="#">a</a></li>
                            <li><a href="#">b</a></li>
                            <li><a href="#">c</a></li>
                        </ul>
                    </ul>
                </li>
            </ul>
            
            <ul id="intro_show">
                <li id="intro2">
                    <a id="link1" href="https://ccp.edu/why-choose-us">GETTING STARTED</a>
                    <ul id="list">
                        <ul id="list2">
                            <li><a href="#">a</a></li>
                            <li><a href="#">b</a></li>
                            <li><a href="#">c</a></li>
                        </ul>
                    </ul>
                </li>
            </ul>
            
            <ul id="intro_show">
                <li id="intro3">
                    <a id="link1" href="https://ccp.edu/why-choose-us">PAYING FOR COLLEGE</a>
                    <ul id="list">
                        <ul id="list3">
                            <li><a href="#">a</a></li>
                            <li><a href="#">b</a></li>
                            <li><a href="#">c</a></li>
                        </ul>
                    </ul>
                </li>
            </ul>

            <ul id="intro_show">
                <li id="intro4">
                    <a id="link1" href="https://ccp.edu/why-choose-us">ACADEMIC OFFERINGS</a>
                    <ul id="list">
                        <ul id="list4">
                            <li><a href="#">a</a></li>
                            <li><a href="#">b</a></li>
                            <li><a href="#">c</a></li>
                        </ul>
                    </ul>
                </li>
            </ul>

            <ul id="intro_show">
                <li id="intro5">
                    <a id="link1" href="https://ccp.edu/why-choose-us">STUDENT SUPPORT</a>
                    <ul id="list">
                        <ul id="list5">
                            <li><a href="#">a</a></li>
                            <li><a href="#">b</a></li>
                            <li><a href="#">c</a></li>
                        </ul>
                    </ul>
                </li>
            </ul>


            <ul id="intro_show">
                <li id="intro6">
                    <a id="link1" href="https://ccp.edu/why-choose-us">CAMPUS LIFE</a>
                    <ul id="list">
                        <ul id="list6">
                            <li><a href="#">a</a></li>
                            <li><a href="#">b</a></li>
                            <li><a href="#">c</a></li>
                        </ul>
                    </ul>
                </li>
            </ul>


            <ul id="intro_show">
                <li id="intro7">
                    <a id="link1" href="https://ccp.edu/why-choose-us">ABOUT US</a>
                    <ul id="list">
                        <ul id="list7">
                            <li><a href="#">a</a></li>
                            <li><a href="#">b</a></li>
                            <li><a href="#">c</a></li>
                        </ul>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- -----------------------SLOGAN----------------- -->
        <div id="slogan" width="100%" height="400px">
            
        </div>

        <!-- ------------------------FOOTER----------------------- -->
        <footer>
            <p> &copy; Chả Cốm</p>
            <a href=""
        </footer>
    </body>
</html>

<?php
    } 
    else {
        header("Location: index.php");
        exit();
    }
?>