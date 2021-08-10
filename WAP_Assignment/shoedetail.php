<?php
    session_start();
    include 'navigation.php';
    if(isset($_SESSION['gender'])) {
        if($_SESSION['gender'] == "M") {
            $style = 'shoedetailM.css';
        }
        else if($_SESSION['gender'] == "F") {
            $style = 'shoedetailW.css';
        }
    }
    else {
        $style = 'shoedetail.css';
    }
?>

<html>

<head>
    <title>
        MANGO FOX
    </title>
    <link rel="stylesheet" href="navigationStyle.css">
    <?php
        echo '<link rel="stylesheet" href="'.$style.'">';
    ?>

</head>

<body class=detailbody>
    <div class=detailheader>
        <h1>MANGO FOX</h1>
        <p>Your fashion choice</p>
    </div>
    <?php

            $servername = "localhost";
            $username = "root";
            $password = "";

            try {
            $conn = new PDO("mysql:host=$servername", $username, $password);
            }
            catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
            $conn = null;

            $dbname = "web dev";
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            
            $itemID = $_GET['id'];

            $QRY = "SELECT shoeID, itemName, brand, price, shoeColor, picture, pic1, pic2, pic3, shoeDescription FROM shoedetail WHERE shoeID='$itemID'";
            $q = $conn->query($QRY);
            $q->setFetchMode(PDO::FETCH_ASSOC);
           
            while($row = $q->fetch())
            {
			
			
            echo '<form method= "POST" action="shoppingcart.php?id='.$itemID.'">';
            echo '<table class = detailtable>';
            echo '<tr><td rowspan =4 class= detailpic><img src="data:image/png;base64,'.base64_encode( $row['picture'] ).'"  /></td>';
            echo '<td rowspan =4 class= detailpic><img src="data:image/png;base64,'.base64_encode( $row['pic1'] ).'"  /></td>';
            echo '<td class= itemname><h1>'.$row['itemName'].'</h1></td></tr>';
            echo '<tr><td class= itembrand>'.$row['brand'].'</td></tr>';
            echo '<tr><td class= itemprice>RM '.$row['price'].'</td></tr>';
            echo '<tr><td class= itemcolor>'.$row['shoeColor'].'</td></tr>';
            echo '<tr><td class= detailpic><img src="data:image/png;base64,'.base64_encode( $row['pic2'] ).'"  /></td>';
            echo '<td class= detailpic><img src="data:image/png;base64,'.base64_encode( $row['pic3'] ).'"  /></td>';
            echo '<td class= itemdesc>'.$row['shoeDescription'].'</td></tr>';
            echo '</table>';
            }
            echo '<div class=addtocart><input type="submit" value="Add to Cart" name="add" class="addtocartbutton">
           </div>';
            echo '</form>';
            
           
          



            $itemID = $_GET['id'];

            $QRY = "SELECT reviewID, name, review FROM review WHERE shoeID='$itemID'";
            $q = $conn->query($QRY);
            $q->setFetchMode(PDO::FETCH_ASSOC);
           
            echo '<br/><br/><table class = reviewtable><tr><th colspan = 2 class = reviewheader>Review(s)</th></tr>';
            
            
            while($row = $q->fetch())
            {
            echo '<tr><td class= reviewname>By ';
            echo $row['name'];
            echo ': </td><td class= reviewcontent>';
            echo $row['review'];
            echo '</td></tr>';
            }
            echo '</table>';

        ?>

    <div class=terms>

        <h3 class="del">Delivery & Return Policy</h3>
        <h4 class="del">Returns</h4>
        <p class="del">Our policy lasts 14 days. If 14 days have gone by since your purchase, unfortunately we can’t
            offer you a refund or exchange.
            To be eligible for a return, your item must be unused and in the same condition that you received it. It
            must also be in the original packaging.
            Customized products and gift cards are exempt from being returned.
        </p><br>

        <h4 class="del">Refunds</h4>
        <p class="del">Once your return is received and inspected, we will send you an email to notify you that we have
            received your returned item. We will also notify you of the approval or rejection of your refund.
            If you are approved, then your refund will be processed, and a credit will automatically be applied to your
            credit card or original method of payment, within 30 days.
        </p><br>
        <h4 class="del">Late or missing refunds</h4>
        <p class="del">If you haven’t received a refund yet, first check your bank account again.
            Then contact your credit card company, it may take some time before your refund is officially posted.
            Next contact your bank. There is often some processing time before a refund is posted.
            If you’ve done all of this and you still have not received your refund yet, please contact us at
            mangofox@gmail.com.
        </p><br>

        <h4 class="del">Sale items</h4>
        <p class="del">Only regular priced items may be refunded, unfortunately sale items cannot be refunded.
        </p><br>

        <h4 class="del">Exchanges</h4>
        <p class="del">We replace the product if they are defective or damaged.
            Or item that is unused and in the same condition that you received it. It must also be in the original
            packaging.
            Customized products and gift cards are exempt from being exchanged.
            If you need to exchange it, send us an email at mangofox@gmail.com and send your item to: 222 JALAN MEWAH,
            52000 KUALA LUMPUR.
        </p><br>

        <h4 class="del">Gifts</h4>
        <p class="del">If the item was marked as a gift when purchased and shipped directly to you,
            you’ll receive a gift credit for the value of your return. Once the returned item is received,
            a gift certificate will be mailed to you. If the item wasn’t marked as a gift when purchased,
            or the gift giver had the order shipped to themselves to give to you later,
            we will send a refund to the gift giver and he will find out about your return.
        </p><br>

        <h4 class="del">Shipping</h4>
        <p class="del">To return your product, you should mail your product to: 222 JALAN MEWAH, 52000 KUALA LUMPUR.
            You will be responsible for paying for your own shipping costs for returning your item.
            Shipping costs are non-refundable. If you receive a refund, the cost of return shipping will be deducted
            from your refund.
            Depending on where you live, the time it may take for your exchanged product to reach you, may vary.
            You should consider using a trackable shipping service or purchasing shipping insurance.
            We don’t guarantee that we will receive your returned item.
        </p>
    </div>
    <script src="app.js"></script>
</body>

</html>