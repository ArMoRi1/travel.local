<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'travel';
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

$id = $_POST['id'];
$title = $_POST['title'];
$image = $_POST['image'];
$content = $_POST['content'];
$category_id = $_POST['category_id'];
$category_name = $_POST['category_name'];
$country = $_POST['country'];

$query = "UPDATE `tours` SET `title` = ?, `image` = ?, `content` = ?, `category_id` = ?, `category_name` = ?, `country` = ? WHERE `tours`.`id` = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sssissi", $title, $image, $content, $category_id, $category_name, $country, $id);
//$stmt, "ssssi", $title, $image, $content, $category_id, $category_name, $country, $id
if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    header('Location: index.php');
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
