<div class=mainbody>
    <div class=mainheader>
        <h1>MANGO FOX</h1>
        <p>Your fashion choice</p>
    </div>
    <?php

            echo '<table class = outerTable><tr><td>';

            echo '<table class = productTable1>';
            if(isset($_SESSION['memberID'])) {
                $memberID = $_SESSION['memberID'];
            

                $QRY = "SELECT listID FROM ordercheckout WHERE memberid='.$memberID.'";
                $q = mysqli_query($db, $QRY);

                if(mysqli_num_rows($q) > 0) {
                    while($row = mysqli_fetch_assoc($q))
                {
                $listID = $row['listID'];
                }
                $_SESSION['listID'] = $listID;
                }

            }
            $QRY = "SELECT shoeID, itemName, brand, price, shoeColor, picture FROM shoedetail WHERE category='M'";
            $q = mysqli_query($db, $QRY);
           
            if(mysqli_num_rows($q) > 0) {
                while($row = mysqli_fetch_assoc($q))
            {
            echo '<tr><td class = tableitem>'.$row['itemName'] . '</td>';
            echo '<td rowspan =4 class= tablepic><a href ="shoedetail.php?id='.$row['shoeID'] .'">'. '<img src="data:image/png;base64,'.base64_encode( $row['picture'] ).'"  height="150px" width="150px"/></a></td></tr>';
            echo '<tr><td class= tablebrand>' . $row['brand'] . '</td></tr>';
            echo '<tr><td class=tableprice> RM ' . $row['price'] . '</td></tr>';
            echo '<tr><td class=tablecolor>' . $row['shoeColor'].'</td></tr>';
            }
            }

            echo   '</table></td><td>';
            echo '<table class = productTable2>';

            $QRY = "SELECT shoeID, itemName, brand, price, shoeColor, picture FROM shoedetail WHERE category='W'";
            $q = mysqli_query($db, $QRY);
           
            if(mysqli_num_rows($q) > 0) {
                while($row = mysqli_fetch_assoc($q))
            {
            echo '<tr><td rowspan =4 class= tablepic><a href ="shoedetail.php?id='.$row['shoeID'] .'">'. '<img src="data:image/png;base64,'.base64_encode( $row['picture'] ).'"  /></a></td>';
            echo '<td class = tableitem>'.$row['itemName'] . '</td></tr>';
            echo '<tr><td class= tablebrand>' . $row['brand'] . '</td></tr>';
            echo '<tr><td class=tableprice> RM ' . $row['price'] . '</td></tr>';
            echo '<tr><td class=tablecolor>' . $row['shoeColor'].'</td></tr>';
            }
            

            echo   '</td></tr></table></table>';
        }

        else {
            echo "Fail";
            echo '$_SESSION["memberID"]';
        }
            ?>

</div>