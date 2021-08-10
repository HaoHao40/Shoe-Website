<?php
    
    include 'dbConn.php';

    if (isset($_POST['lsubmit'])) {
        
        $usernamel = $_POST["usernamel"];
        $passwordl = $_POST["passwordl"];

        $query = "SELECT * FROM member WHERE musername = '$usernamel'";

        $sql =  mysqli_query($db, $query);

        $row = mysqli_fetch_assoc($sql);

        if($passwordl == $row["mpassword"]) {
            session_start();
            $_SESSION["memberID"] = $row["memberid"];
            $_SESSION["username"] = $row["musername"];
            $_SESSION["gender"] = $row["mgender"];
            $_SESSION["email"] = $row["memail"];
            $_SESSION["status"] = $row["status"];
        ?>
<script>
alert("Logged in successfully");
</script>
<?php

            if(isset($_SESSION["memberID"])) {
                $memberID = $_SESSION["memberID"]; 
                $qry = "INSERT INTO `ordercheckout` (`listID`, `memberid`, `shippingReceiver`, `shippingAddress`, `contactNumber`, `totalPrice`) VALUES (NULL, '$memberID', NULL, NULL, NULL, NULL);";
                $s = mysqli_query($db, $query);
                if($s) {
                    echo("success");
                }
                else {
                    echo("fail");
                }
            }
            
            if(isset($memberID)) {
                $qr = "SELECT * FROM `ordercheckout` where `memberid` = '$memberID'";

                $l = mysqli_query($db, $qr);
                $row = mysqli_fetch_assoc($l);
                
                if($memberID == $row["memberid"]) {
                    $_SESSION["listID"] = $row["listID"];
                }
                else {
                    echo(" no list id");
                }
            }

            header("Refresh:1; url= index.php");
        }
        else {
            ?>
<script>
alert("Username or password may be wrong");
</script>
<?php
            header("Refresh:1; url=index.php");
        }

        mysqli_free_result($sql);
    }