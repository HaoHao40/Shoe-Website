<html>

<head>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="navigationStyle.css">
    <link rel="stylesheet" href="headerstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ac1fb5070d.js" crossorigin="anonymous"></script>
    <title>Register Page</title>
</head>

<body>
    <?php include 'header.php'?>
    <?php include 'navigation.php'?>
    <div id="signUpContainer">
        <div class="headerContainer">
            <h1>SIGN UP</h1>
        </div>
        <form action="signup.php" method="POST">
            <div class="usernameContainer">
                <label for="usernames">Username:</label>
                <input type="text" id="usernames" onchange="validations()" value="" name="usernames">
            </div>
            <div class="passwordContainer">
                <label for="passwords">Password:</label>
                <input type="text" id="passwords" onchange="validations()" value="" name="passwords">
            </div>
            <div class="addressContainer">
                <label for="addresss">Address:</label>
                <input type="text" id="addresss" onchange="validations()" value="" name="addresss">
            </div>
            <div class="genderContainer">
                <label for="genders">Gender:</label>
                <select name="genders" id="genders" onchange="validations()" name="genders">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <div class="emailContainer">
                <label for="emails">Email:</label>
                <input type="email" id="emails" onchange="validations()" value="" name="emails">
            </div>
            <input type="submit" id="ssubmitbtn" name="ssubmit" value="submit" disabled="disabled">

        </form>

    </div>
    <script src="register.js"></script>
    <script src="app.js"></script>
</body>

</html>