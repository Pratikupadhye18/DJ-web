<?php
	include 'includes/session.php';
	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['photo']['name'];
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM brand WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		if(!empty($filename)){
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			$new_filename = 'brand_'.time().'.'.$ext;
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$new_filename);	
		}
		try{
			$stmt = $conn->prepare("UPDATE brand SET image=:photo WHERE id=:id");
			$stmt->execute(['photo'=>$new_filename, 'id'=>$id]);
			$_SESSION['success'] = 'Brand logo updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select brand to update logo first';
	}
	header('location: brand.php');
?>