<?php
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

<div class="menuContainer">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
</div>
<div>
    <ul class="navContainer">
        <li class="navList"><a class="nav" href="index.php"><i class="fas fa-home"></i>Home</a></li>
        <li class="navList"><a class="nav" href="shoppingcart.php"><i class="fas fa-shopping-cart"></i>Shop</a></li>
        <li class="navList"><a class="nav" href="blog.php"><i class="fas fa-blog"></i>Blog</a></li>
        <?php
            echo '<li class="navList"><a class="nav" href="'.$link.'"><i class="fas fa-question"></i>FAQ</a></li>';
        ?>
        <li class="navList"><a class="nav" href="AboutUs.php"><i class="far fa-building"></i>About Us</a></li>
        <li class="navList"><a class="nav" href="contact.php"><i class="fas fa-phone"></i>Contact Us</a></li>
    </ul>
</div>