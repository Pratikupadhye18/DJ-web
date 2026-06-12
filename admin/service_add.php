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
    
    
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM services WHERE slug=:slug GROUP BY id");
    $stmt->execute(['slug' => $slug]);
    $row = $stmt->fetch();

    if ($row['numrows'] > 0) {
        $_SESSION['error'] = 'Product already exist by same name';
    } else {
        if (!empty($filename)) {
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $new_filename_p = 'sr_l_' . time() . '.' . $ext;
            move_uploaded_file($_FILES['photo']['tmp_name'], '../images/' . $new_filename_p);
        } else {
            $new_filename_p = '';
        }

        try {
			$stmt = $conn->prepare("INSERT INTO services (name,category,price,off_price,description,components,specification,slug,photo) VALUES (:name,:category,:price,:off_price,:description,:components,:specification,:slug,:photo)");
			$stmt->execute(['name' => $name,'category' => $category,'price'=>$price,'off_price' => $off_price, 'description' => $description,'components'=>$components,'specification'=>$specification,'slug' => $slug, 'photo' => $new_filename_p]);
            $_SESSION['success'] = 'Service added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up service form first';
}

header('location: service.php');
?>