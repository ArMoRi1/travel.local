<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'travel';
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

$title = mysqli_real_escape_string($conn, $_POST['title']);
$image = mysqli_real_escape_string($conn, $_POST['image']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
$category_name = mysqli_real_escape_string($conn, $_POST['category_name']);
$country = mysqli_real_escape_string($conn, $_POST['country']);

$query = "INSERT INTO `tours` (`id`, `title`, `image`, `content`, `category_id`, `category_name`, `country`) VALUES (NULL, '$title', '$image', '$content', '$category_id','$category_name', '$country')";
if (mysqli_query($conn, $query)) {
    header('Location: index.php');
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
