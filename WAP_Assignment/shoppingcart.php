<?php
session_start();
include 'navigation.php';
?>
<?php
if(isset($_SESSION['gender'])) {
    if($_SESSION['gender'] == "M") {
        $style = 'shoppingcartM.css';
    }
    else if($_SESSION['gender'] == "F") {
        $style = 'shoppingcartW.css';
    }
}
else {
    $style = 'shoppingcart.css';
}
?>

<?php
include 'dbConn.php';

if(isset($_POST['Remove'])){

    $itemID = $_POST['itemid'];

    
    $sql="DELETE FROM orderitemlist WHERE itemID = '$itemID'"  ;
if ($db->query($sql)) {
    header("Location: shoppingcart.php");
}
}

if(isset($_POST['Confirm'])){
    $itemSize = $_POST['size'];
    $quantity = $_POST['quantity'];
    $itemID = $_POST['itemid'];

    $sql="UPDATE orderitemlist SET shoeSize='$itemSize',quantity='$quantity' WHERE itemID = '$itemID'"  ;
    if ($db->query($sql)) {
       echo "Updated!";
   } else {
       echo "Fail to Update!";
   }
}
?>

<?php
//add to cart

include 'dbConn.php';
       
if(isset($_POST['add'])){
	if(!isset($_SESSION["listID"])){
        ?>
<script>
alert("You must be a member to purchase");
</script>
<?php
        header("Refresh:0 url=index.php");
    }
    else {
        $itemID = $_GET['id'];
	$QRY = "SELECT shoeID, itemName, brand, price, shoeColor, picture, pic1, pic2, pic3, shoeDescription FROM shoedetail WHERE shoeID='$itemID'";
            $q = mysqli_query($db, $QRY);
           
            while($row = mysqli_fetch_assoc($q))
            {
				$shoeName = $row['itemName'];
                $shoePrice = $row['price'];
				$shoeid = $row['shoeID'];
			}
    $shoe_size = '31';
    $quantity = '1';
    $list_id = $_SESSION["listID"];
	$shoeid = $shoeid;
    $shoePrice = $shoePrice;

    $sql = "INSERT INTO `orderitemlist` (`itemID`, `shoeID`, `shoeName`, `shoeSize`, `quantity`, `sprice`, `listID`) VALUES (NULL, '$shoeid', '$shoeName', '$shoe_size', '$quantity', '$shoePrice', '$list_id');";
     if (mysqli_query($db, $sql)) {
        echo "<script type='text/javascript'>alert('Added to cart!');</script>";
    } else {
        // echo "<script type='text/javascript'>alert('Failed to add to cart');</script>";
    }
    }
}
?>

<html>

<head>
    <title>
        Your Shopping Cart
    </title>

    <?php
        echo '<link rel="stylesheet" href="'.$style.'">';
    ?>
    <link rel="stylesheet" href="navigationStyle.css">
</head>

<body class=cartbody>
    <div class=cartheader>
        <h1>MANGO FOX</h1>
        <p>Your fashion choice</p>
    </div>



    <fieldset class=cartfieldset>
        <legend class=cart>Your shopping cart</legend>



        <?php
                include 'dbConn.php';
                if(isset($_SESSION["listID"])) {
                    $listID = $_SESSION["listID"];

                $QRY = "SELECT itemID, shoeID, shoeName, shoeSize, quantity, sprice FROM orderitemlist WHERE listID='$listID'";
                $q = mysqli_query($db, $QRY);

                
                while($row = mysqli_fetch_assoc($q))
                {
                echo '<form method="POST" class="ShoppingList" action="'.$_SERVER['PHP_SELF'].'"> ';
                echo '<table class=itemlist>';

                echo '<tr><td class=cartleft>Item: </td><td>';
                echo $row['shoeName'].'</td>';
                echo '<input type="hidden" name="itemid" value="'.$row['itemID'].'"/>';
                echo '<form method="POST" action="'.$_SERVER['PHP_SELF'].'"> ';
                echo '<input type="hidden" name="itemid" value="'.$row['itemID'].'"/>';
                echo '<td><label><input type="submit" class="removebutton" value="Remove" name= "Remove"></td></tr><tr><td class=cartleft>Size: </td><td>';
                echo '</form>';
                echo '
                <select id="size" class="sizeoption" name="size">
                <option value="" selected disabled hidden>'.$row['shoeSize'].'</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                </select>';
                echo '</td></tr><tr><td class=cartleft>Quantity: </td>';
                
                echo '<td>
                <select id="quantity" class="quantityoption" name="quantity">
                <option value="" selected disabled hidden>'.$row['quantity'].'</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select></td><td>RM '.$row['sprice']*$row['quantity'].'</td>';
                echo '</tr>';
                echo '<tr><td colspan =3 class="confirmchanges" ><input type="submit" class="confirmbutton" value="Confirm Changes" name= "Confirm"></td></tr>';
                echo '</table></form>';
                }
                }
                else { 
                    echo "User not logged in or unable to fetch data from database";
                }
               
                ?>

        <br />
        <br />
        <div class=proceedpay>
            <a href="shippingpay.php">
                <input type="button" name="proceedpay" value="Proceed" class="proceedbutton" />
            </a>
        </div>
    </fieldset>'




</body>
<script src="app.js"></script>

</html>