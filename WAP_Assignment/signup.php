<?php
    include 'dbConn.php';

    if ((isset($_POST['ssubmit']))) {
        
        $musername = $_POST['usernames'];
        $mpassword = $_POST['passwords'];
        $address = $_POST['addresss'];
        $mgender = $_POST['genders'];
        $memail = $_POST['emails'];
        $query = "INSERT INTO `member`(`musername`, `mgender`, `mpassword`, `address`, `memail`, `status`) VALUES ('$musername', '$mgender', '$mpassword', '$address', '$memail', 'member')";

        $sql = mysqli_query($db, $query);

        if($sql) {
            ?>
            <script>
                alert("Succesfully signed up");
            </script>
            <?php
            header("refresh:1; url=index.php");
        }
        else {
            ?>
            <script>
                alert("Fail to upload to database");
            </script>
            <?php
            header("refresh:1; url=index.php");
        }
    }