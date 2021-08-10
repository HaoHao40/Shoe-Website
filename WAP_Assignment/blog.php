<?php
    session_start();
    if(isset($_SESSION['gender'])) {
        if($_SESSION['gender'] == "M") {
            $style = 'blogMstyle.css';
        }
        else if($_SESSION['gender'] == "F") {
            $style = 'blogFstyle.css';
        }
    }
    else {
        $style = 'blogNstyle.css';
    }
?>
<html class="blogNHtml" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo '<link rel="stylesheet" href="'.$style.'">';
    ?>
    <link rel="stylesheet" href="navigationStyle.css">
    <link rel="stylesheet" href="headerstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ac1fb5070d.js" crossorigin="anonymous"></script>
    <title>Blog</title>
</head>

<body>
    <?php include 'header.php'?>
    <?php include 'navigation.php'?>
    <div class="blogNavHeader">
        <h1><b>Blog Navigation</b></h1>
    </div>

    <div class="blogcontainer">
        <div class="bloginfo">
            <h2 class="blognum">Blog: 1</h2>
            <h3 class="blogname"><b>Air Jordan XXXV PF</b></h3>
        </div>
        <a href="blog1.php">
            <img class="blogcover" src="./image/blog1cover.jpg">
        </a>
    </div>

    <div class="blogcontainer">
        <div class="bloginfo">
            <h2 class="blognum">Blog: 2</h2>
            <h3 class="blogname"><b>Kyrie 7 EP 'Sisterhood'</b></h3>
        </div>
        <a href="blog2.php">
            <img class="blogcover" src="./image/blog2cover.jpg">
        </a>
    </div>
    <div class="blogcontainer">
        <div class="bloginfo">
            <h2 class="blognum">Blog: 3</h2>
            <h3 class="blogname"><b>LeBron 18</b></h3>
        </div>
        <a href="blog3.php">
            <img class="blogcover" src="./image/blog3cover.jpg">
        </a>
    </div>

    <script src="app.js"></script>
</body>

</html>