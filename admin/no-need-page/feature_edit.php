<?php
	include 'includes/session.php';
        include 'includes/slugify.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
                $slug = slugify($name);

		try{
			$stmt = $conn->prepare("UPDATE car_features SET name=:name WHERE id=:id");
			$stmt->execute(['name'=>$name, 'id'=>$id]);
			$_SESSION['success'] = 'Feature updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit feature form first';
	}

	header('location: features.php');

?>