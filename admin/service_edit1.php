<?php
include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
	$slug = slugify($name);
	$category = $_POST['category'];
    $price = $_POST['price'];
	$off_price = $_POST['off_price'];
	$description = $_POST['description'];
	$components = $_POST['components'];
	$specification = $_POST['specification'];
    $filename = $_FILES['photo']['name'];
	$id = $_POST['id'];
    
    
        if (!empty($filename)) {
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $new_filename_p = 'sr_l_' . time() . '.' . $ext;
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/' . $new_filename_p);
        } else {
            $new_filename_p = '';
        }

        try {
			$stmt = $conn->prepare("UPDATE services SET name=:name,category=:category,price=:price,off_price=:off_price,description=:description,components=:components,specification=:specification,slug=:slug,photo=:photo WHERE id=:id");
			$stmt->execute(['name' => $name,'category' => $category,'price' => $price,'off_price' => $off_price, 'description' => $description,'components' => $components,'specification' => $specification,'slug' => $slug,'photo' => $new_filename_p,'id' => $id]);
            $_SESSION['success'] = 'Service edited successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up service form first';
}

header('location: service.php');
?>