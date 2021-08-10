<html>

<head>
    <link rel="stylesheet" href="loginui.css">
    <link rel="stylesheet" href="navigationStyle.css">
    <link rel="stylesheet" href="headerstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ac1fb5070d.js" crossorigin="anonymous"></script>
    <title>Login Page</title>
</head>

<body>

    <?php include 'header.php'?>
    <?php include 'navigation.php'?>
    <div id="logInContainer">
        <div class="headerContainer">
            <h1>LOGIN</h1>
        </div>
        <form action="login.php" method="POST">
            <div class="usernameContainer">
                <label for="usernamel">Username:</label>
                <input type="text" id="usernamel" name="usernamel" onchange="validationl()" value="">
            </div>
            <div class="passwordContainer">
                <label for="passwordl">Password:</label>
                <input type="text" id="passwordl" name="passwordl" onchange="validationl()" value="">
            </div>
            <input type="submit" id="lsubmitbtn" name="lsubmit" value="submit" disabled="disabled">

        </form>
    </div>
    <script src="app.js"></script>
    <script src="login.js"></script>
</body>

</html>