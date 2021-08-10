<?php
session_start();
if(isset($_SESSION['gender'])) {
    if($_SESSION['gender'] == "M") {
        $style = 'shippingpayM.css';
    }
    else if($_SESSION['gender'] == "F") {
        $style = 'shippingpayW.css';
    }
}
else {
    $style = 'shippingpay.css';
}
?>

<html>

<head>
    <title>
        Check Out
    </title>

    <link rel="stylesheet" href="navigationStyle.css">
    <?php
        echo '<link rel="stylesheet" href="'.$style.'">';
    ?>
</head>

<body class=shippingbody>
    <?php include 'navigation.php';?>
    <fieldset class=shippingfieldset>
        <legend class=shipping>Your shipping detail</legend>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <table class=shippinginfo>
                <tr>
                    <td>Receiver: </td>
                    <td><input type="text" id="receiver" name="receiver"></td>
                </tr>
                <tr>
                    <td>Shipping address: </td>
                    <td><textarea id="address" name="address"></textarea></td>
                </tr>
                <tr>
                    <td>Contact number: </td>
                    <td><input type="tel" id="contactnum" name="contactnum"></td>
                </tr>
                <tr>
                    <td colspan=2 class="totalprice">
                <tr>
                    <td colspan=2 class="submit"><br /><br /><input type="submit" name="Submit" value="Submit"
                            class="submitbutton"></td>
                </tr>



            </table>
        </form>


        <?php
    include 'dbConn.php';

	if(isset($_POST['Submit'])) {
		$receiver = $_POST['receiver'];
		$address = $_POST['address'];
		$contactnum = $_POST['contactnum'];
        $list = $_SESSION['listID'];

		$sql="UPDATE ordercheckout SET shippingReceiver='$receiver',shippingAddress='$address',contactNumber='$contactnum' WHERE listID = '$list'"  ;
     if (mysqli_query($db, $sql)) {
        echo "<script type='text/javascript'>alert('Your Order is Received!');</script>";
        $query = "DELETE FROM `orderitemlist` WHERE listID = '$list'";
        mysqli_query($db, $query);
        echo header("refresh:1; url=index.php"); //return to main dash
    } else {
        echo "Failed to update";
    }
	}

    
    if(isset($_SESSION['listID'])) {
        $list_id = $_SESSION['listID'];
          
    $QRY = "SELECT sprice FROM orderitemlist WHERE listID='$list_id'";
    $q = mysqli_query($db, $QRY);
    $totalPrice = 0;
    while($row = mysqli_fetch_assoc($q))
    {
    $totalPrice += $row['sprice'];
    }

    echo 'Total Price is: RM'.$totalPrice.'.<br/><br/>';

    echo 'All Order are Cash-On-Delivery.<br/><br/> Estimated delivery time: 3-5 working days.';

    $sql="UPDATE ordercheckout SET totalPrice='$totalPrice' WHERE itemID = listID='$list_id'"  ;
    }
?>


</body>
<script src="app.js"></script>

</html>