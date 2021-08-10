<?php
    session_start();
   ?>

<?php
  

    if(isset($_SESSION['gender'])) {

        if($_SESSION['gender'] == "M") {
            $style = 'AboutUsM.css';
        }
        else if($_SESSION['gender'] == "F") {
            $style = 'AboutUsW.css';
        }
      }
      else {
        $style = 'AboutUs.css'; 
      } 

?>

<html>

<head>
    <title>About Us</title>

    <?php
        echo '<link rel="stylesheet" href="'.$style.'">';
    ?>

    <link rel="stylesheet" href="headerstyle.css">
    <link rel="stylesheet" href="navigationStyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ac1fb5070d.js" crossorigin="anonymous"></script>

</head>
<?php include 'navigation.php';?>
<?php include 'header.php';?>

<body class="background">


    <img class="legpic" src="./image/nogender.jpg">


    <h1 class="headerstyle1">About Mango Fox</h1>

    <br />

    <p class="paragraph"><strong>Founded in 2016, Mango Fox Group is Southeast Asia’s leading eCommerce shoes shopping
            platform. With a presence in six countries – Indonesia, Malaysia, the Philippines, Singapore, Thailand and
            Vietnam – we connect this vast and diverse region through our technology, logistics and payments
            capabilities. Today, we have the largest selection of brands and sellers, and by 2030, we aim to serve 300
            million customers. In 2016, Mango Fox became the regional flagship of the MangoBaba Group, and is backed by
            Mangobaba’s best-in-class technology infrastructure.
            <strong></p>

    <br />

    <h1 class="headerstyle2">What is our Mission ?</h1>

    <br />

    <p class="paragraph"><strong>Our mission is what drives us to do everything possible to expand human potential. We
            do that by creating groundbreaking sport innovations, by making our products more sustainably, by building a
            creative and diverse global team and by making a positive impact in communities where we live and work.
            Based in Beaverton, Oregon, NIKE, Inc. includes the Nike, Converse, and Jordan brands.<strong></p>

    <br>
    <hr />
    <br />


    <table class="table1">
        <tr>
            <td><img src="./image/team.jpg" style="width:700px;height:400px;" /></td>
            <td>
                <h4 class="center">OUR TEAM IS A TEAM THAT'S EMPOWERED,DIVERSE AND INCLUSIVE</h4>
            </td>

        </tr>

        <tr>
            <td>
                <h4 class="center">OUR TEAM WILL PROTECTING THE FUTURE OF SPORT</h4>
            </td>
            <td><img src="./image/white.jpg" style="width:700px;height:400px;" /></td>
        </tr>

    </table>

    <script src="app.js"></script>
</body>

</html>