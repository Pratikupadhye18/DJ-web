<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM crew6 WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Voices deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Voices to delete first';
	}

	header('location: crew6.php');
	
?>