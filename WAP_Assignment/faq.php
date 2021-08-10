<?php
	session_start();
	if(isset($_SESSION['gender'])) {
		if($_SESSION['gender'] == "M") {
			$style = 'faqM.css';
		}
		else if($_SESSION['gender'] == "F") {
			$style = 'faqW.css';
		}
	}
	else {
		$style = 'faq.css';
	}
	include_once('faqconndb.php');
	$query="SELECT * FROM faq";
	$result=mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <?php
		echo '<link rel="stylesheet" href="'.$style.'">';
	?>
    <link rel="stylesheet" href="headerstyle.css">
    <link rel="stylesheet" href="navigationStyle.css">
    <title>
        FAQ
    </title>
</head>

<body class="faqBody">
    <?php
	include 'header.php';
	include 'navigation.php';
?>
    <div class="blue">
        <h1 style="font-size:400%; text-align:center">FREQUENTLY ASKED QUESTIONS</h1>
        <p style="font-size:150%"><strong> Can't find the answer you're looking at? We've shared some of our most
                frequently asked questions to help you out!</strong></p>
        <br />
    </div>
    <p style="font-size:200%;padding-left: 15px"><strong>Product FAQ </strong></p>
    <div class="border">
        <?php
		
		while($rows=mysqli_fetch_assoc($result))
		{
	?>

        <br>
        <li class="question"><b><?php echo $rows['question'];?></b></li>
        <br>
        <li class="answer"><?php echo $rows['answer'];?></li>
        <br>
        <hr>

        <?php
		}
		
	?>
    </div>
    <script src="app.js"></script>
</body>

</html>