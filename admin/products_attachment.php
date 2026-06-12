<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['attachment']['name'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM products WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if(!empty($filename)){
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			$new_filename = $row['slug'].'_'.time().'.'.$ext;
			move_uploaded_file($_FILES['attachment']['tmp_name'], '../pdf/'.$new_filename);	
		}
		
		try{
			$stmt = $conn->prepare("UPDATE products SET attachment=:attachment WHERE id=:id");
			$stmt->execute(['attachment'=>$new_filename, 'id'=>$id]);
			$_SESSION['success'] = 'Product attachment updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select product to update attachment first';
	}

	header('location: products.php');
?>