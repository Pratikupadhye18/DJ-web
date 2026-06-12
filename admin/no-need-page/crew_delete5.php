<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM crew5 WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Trible Key deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Trible key to delete first';
	}

	header('location: crew5.php');
	
?>