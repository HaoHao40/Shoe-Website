<?php
	session_start();
?>
<?php
    if(isset($_SESSION['gender'])) {
        if($_SESSION['gender'] == "M") {
            $style = 'maindashM.css';
        }
        else if($_SESSION['gender'] == "F") {
            $style = 'maindashW.css';
        }
    }
    else {
        $style = 'maindash.css';
    }
    if(isset($_SESSION['status'])) {
        if($_SESSION['status'] == "admin") {
            $link = 'adminfaqindex.php';
        }
        else if($_SESSION['status'] == "member") {
            $link = 'faq.php';
        }
    }
    else {
        $link = 'faq.php';
    }
?>
<?php include 'dbConn.php'?>

<html>

<head>
    <title>Shoe Website Design</title>
    <link rel="stylesheet" href="Home.css">
    <?php
        echo '<link rel="stylesheet" href="'.$style.'">';
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>


    <div class="Homepage">
        <div class="navContainer">
            <div class="nav-logo">
                <img src="./image/logo.png">
            </div>

            <div class="nav-bar">
                <div class="nav-links">
                    <ul>
                        <a href="index.php">
                            <li>HOME</li>
                        </a>
                        <a href="shoppingcart.php">
                            <li>SHOP</li>
                        </a>
                        <?php 
                            echo '<a href="'.$link.'">
                            <li>FAQ</li>
                        </a>';
                        ?>
                        <a href="AboutUS.php">
                            <li>ABOUT US</li>
                        </a>
                        <a href="contact.php">
                            <li>CONTACT US</li>
                        </a>
                        <a href="blog.php">
                            <li>BLOG</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="search-icon">
            </div>
            <div class="buttonContainer">
                <a href="loginui.php"><button type="button" class="btn">SIGN IN</button></a>
                <a href="register.php"><button type="button" class="btn1">SIGN UP</button></a>
                <a href="logout.php"><button type="button" class="btn2">SIGN OUT</button></a>
            </div>
        </div>
    </div>

    <?php include 'maindash.php'?>
</body>


</html>