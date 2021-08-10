<?php 
	session_start();
	// initialize variables
	$question = "";
	$answer = "";
	$id = 0;
	$edit_state = false;

	include 'dbConn.php';
	
	if (isset($_POST['save'])) {
		$question = $_POST['question'];
		$answer = $_POST['answer'];

		$query = "INSERT INTO faq (question,answer ) VALUES ('$question', '$answer')"; 
		mysqli_query($db, $query);
		$_SESSION['message'] = "Question and Answer saved";
		header('location: adminfaqindex.php');
	}
	
	//update record
	if(isset($_POST['update'])){
		$question = mysqli_real_escape_string($db, $_POST['question']);
		$answer = mysqli_real_escape_string($db, $_POST['answer']);
		$id = mysqli_real_escape_string($db, $_POST['id']);
		
		mysqli_query($db, "UPDATE faq SET question='$question', answer='$answer' WHERE id=$id");
		$_SESSION['message'] = "Question and Answer saved";
		header('location: adminfaqindex.php');
	}
	
	//delete records
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM faq WHERE id=$id");
		$_SESSION['message'] = "Question and Answer deleted";
		header('location: adminfaqindex.php');
	}
	//retrieve records
	$results = mysqli_query($db,"SELECT * FROM faq");
	
?>