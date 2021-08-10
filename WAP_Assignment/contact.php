<?php
session_start();
if(isset($_SESSION['gender'])) {
    if($_SESSION['gender'] == "M") {
        $style = 'contactstyleM.css';
    }
    else if($_SESSION['gender'] == "F") {
        $style = 'contactstyleF.css';
    }
}
else {
    $style = 'contactstyle.css';
}

if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $subject = $_POST['Subject'];
    $from = $_POST['Email'];
    $message = $_POST['Message'];

    $to = "mangofox@gmail.com";
    $headers = "From: ".$from;

    mail($to, $subject, $message, $headers);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        echo '<link rel="stylesheet" href="'.$style.'">';
    ?>
    <link rel="stylesheet" href="navigationStyle.css">
    <link rel="stylesheet" href="headerstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ac1fb5070d.js" crossorigin="anonymous"></script>
    <script type="application/javascript">
    function Success() {
        alert("The form has been submitted!");
    }

    function validation() {
        // In this functions we will check if the user had entered all the required information or not, and 
        // whether the entered values are valid or not, to enable the 'Submit Button'
        let NameValid = false;
        let EmailValid = false;
        let SubjectValid = false;
        let MessageValid = false;

        // Get the information keyed in by the user  
        let Name = document.getElementById("Name").value;
        let Email = document.getElementById("Email").value;
        let Subject = document.getElementById("Subject").value;
        let Message = document.getElementById("Message").value;


        // Validate the email
        if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+[@][a-zA-Z0-9]+[.][a-zA-Z0-9]*$/.test(Email) && Email != "") {
            EmailValid = true;
        } else {
            EmailValid = false;
        }

        // Validating the Name (Assuming that names can take only letter and not cannot be blank)
        if (/^[a-zA-Z0-9]*$/.test(Name) && Name != "")
            NameValid = true;
        else
            NameValid = false;

        // Validating the Subject (Assuming that subject cannot be blank)
        if (Subject != "")
            SubjectValid = true;
        else
            SubjectValid = false;

        // Validating the Message (Assuming that message cannot be blank)
        if (Message != "")
            MessageValid = true;
        else
            MessageValid = false;

        // Check if any of them is missing and decide whether to enable or disable the 'Submit' button
        if (NameValid == false || EmailValid == false || SubjectValid == false || MessageValid == false)
            document.getElementById("submit").disabled = true;
        else
            document.getElementById("submit").disabled = false;
    }
    </script>
</head>

<body>
    <?php include 'navigation.php';?>
    <?php include 'header.php';?>
    <h3>Contact Form</h3>

    <div class="container">
        <div class="form">
            <form action="" method="POST">
                <label for="Name">Full name</label>
                <input type="text" id="Name" name="Name" placeholder="Full name.." onchange="validation()">

                <label for="Email">Email address</label>
                <input type="email" id="Email" name="Email" placeholder="Email address.." onchange="validation()">

                <label for="Subject">Subject</label>
                <input type="text" id="Subject" name="Subject" placeholder="Subject.." onchange="validation()"></input>

                <label for="Message">Message</label>
                <textarea id="Message" name="Message" placeholder="Message.." style="height:200px"
                    onchange="validation()"></textarea>

                <input type="submit" disabled id="submit" Value="Submit" onclick="Success()"></input>
            </form>
        </div>
        <div class="contactinfo">
            <br>
            <h4>Contact</h4><br>
            <p>Phone number : 0123456789</p>
            <p>Email address : mangofox@gmail.com</p>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>