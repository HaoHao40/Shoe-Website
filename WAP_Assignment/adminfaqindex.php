<?php  include('adminfaqserver.php'); 

	//fetch the record to be updated
	if (isset($_GET['edit'])){
		$id = $_GET['edit'];
		$edit_state = true;
		$rec = mysqli_query($db, "SELECT * FROM faq WHERE id=$id");
		$record = mysqli_fetch_array($rec);
		$question = $record['question'];
		$answer = $record['answer'];
		$id = $record['id'];
	}
		
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="faqstyle.css">
    <link rel="stylesheet" href="navigationStyle.css">
    <h1>FAQ</h1>
</head>

<body>
    <?php include 'navigation.php';?>
    <?php if (isset($_SESSION['msg'])): ?>
    <div class="msg">
        <?php 
				echo $_SESSION['msg']; 
				unset($_SESSION['msg']);
			?>
    </div>
    <?php endif ?>

    <table>
        <thead>
            <tr>
                <th>Question</th>
                <th>Answer</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['question']; ?></td>
                <td><?php echo $row['answer']; ?></td>
                <td>
                    <a class="edit_btn" href="adminfaqindex.php?edit=<?php echo $row['id'];?>">Edit</a>
                </td>
                <td>
                    <a class="del_btn" href="adminfaqserver.php?del=<?php echo $row['id'];?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <form method="post" action="adminfaqserver.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="input-group">
            <label>Question</label>
            <input type="text" name="question" value="<?php echo $question; ?>">
        </div>
        <div class="input-group">
            <label>Answer</label>
            <input type="text" name="answer" value="<?php echo $answer; ?>">
        </div>
        <div class="input-group">
            <?php if ($edit_state == false): ?>
            <button class="btn" type="submit" name="save">Save</button>
            <?php else: ?>
            <button class="btn" type="submit" name="update">Update</button>
            <?php endif ?>
        </div>
    </form>
    <script src="app.js"></script>
</body>

</html>