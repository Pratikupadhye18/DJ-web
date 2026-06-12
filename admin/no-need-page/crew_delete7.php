<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM crew7 WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'basses deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Basses to delete first';
	}

	header('location: crew7.php');
	
?>