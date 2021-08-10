<?php
    session_start();
    $style = 'blog2N.css';
    if(isset($_SESSION['username']) && isset($_SESSION['gender']) && isset($_SESSION['email']) && isset($_SESSION['status'])) {
        if($_SESSION['gender'] = "M") {
            $style = 'blog2M.css';
        }
        else if($_SESSION['gender'] = "F") {
            $style = 'blog2F.css';
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navigationStyle.css">
    <?php
        echo '<link rel="stylesheet" href="'.$style.'">';
    ?>
    <link rel="stylesheet" href="headerstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/ac1fb5070d.js" crossorigin="anonymous"></script>
    <title>Blog Page 2</title>
</head>
<body class="blogContainer">
    <?php include 'navigation.php'?>
    <?php include 'header.php'?>

    <div class="headline">
        <h1>Air Jordan XXXV PF</h1>
    </div>
    <div>
        <img class="blogCover" src="./image/blog1cover.jpg">
    </div>
    <div class="introduction">
        <h1>Introduction</h1>
        <p>THE FASTEST, MOST RESPONSIVE GAME SHOE YET.</p>
    </div>
    <div class="mainContent">
        <h1>Main Content</h1>
        <p>The lighter the shoe, the less weight to carry, the faster players can go. Evolving last year's release, the Air Jordan XXXV features a stabilising Eclipse plate 2.0, visible cushioning and new Flightwire cables. Lightweight and responsive, it's designed to help players get the most from their power and athleticism. This PF version uses an extra-durable outsole that's ideal for outdoor courts.</p>
    </div>
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/bMPOscCJRZU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="subHeadlines">
        <h1>Sub-headlines</h1>
        
        <ul>
            <li class="subHeaders"><b>Sculpted Support</b></li>
            <li>The smoothly sculpted Eclipse plate 2.0 is raised to enhance side-to-side stability and support. It's hollowed out to help reduce the shoe's overall weight.</li>
        </ul>
        <ul>
            <li class="subHeaders"><b>Visible Zoom</b></li>
            <li>Zoom Air cushioning under the heel and forefoot has a springy, responsive feel. The thick, large-volume heel unit provides impact cushioning, while the large forefoot unit helps provide support. The edges of both units are visible through the hollow midsole plate.</li>
        </ul>
        <ul>
            <li class="subHeaders"><b>Lock In With Flightwires</b></li>
            <li>Flightwire cables stitched into the side radiate up from the curved plate, helping to lock you down over the footbed when you lace up.</li>
        </ul>
        <ul>
            <li class="subHeaders"><b>Traction and Control, Outdoors</b></li>
            <li>The rubber outsole uses a modified herringbone tread pattern that grips the court. It's designed to help you stop, start and change directions on the fly. The extra-durable rubber is designed to hold up on outdoor courts.</li>
        </ul>
        <ul>
            <li class="subHeaders"><b>More Benefits</b></li>
            <li>Subtle design details nod to the Air Jordan 5, including the bump-out collar, shape of the tongue and the rubberised print inspired by the 5's grid mesh.</li>
        </ul>
        <ul>
            <li class="subHeaders"><b>Product Details</b></li>
            <li>Foam sole</li>
            <li>Tongue pull tab</li>
            <li>Heel tab</li>
            <li>Iridescent details</li>
            <li>Not intended for use as Personal Protective Equipment (PPE)</li>
            <li>Colour Shown: Black/White/Chile Red</li>
            <li>Style: CQ4228-001</li>
            <li>Country/Region of Origin: Vietnam</li>
        </ul>
    </div>
    <div class="conclusion">
        <h1>Conclusion</h1>
        <p>The lighter the shoe, the less weight to carry, the faster players can go. Evolving last year's release, the Air Jordan XXXV features a stabilising Eclipse plate 2.0, visible cushioning and new Flightwire cables. Lightweight and responsive, it's designed to help players get the most from their power and athleticism. This PF version uses an extra-durable outsole that's ideal for outdoor courts.</p>
    </div>

    <script src="app.js"></script>
</body>
</html>