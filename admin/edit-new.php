<?php
session_start();
$login = 'admin';
$pass = '123';
if ($_SESSION["login"] !== $login && $_SESSION["password"] !== $pass) {
    header('location: ../login/index.php');
}
$servername = "localhost";
$username = "root";
$password = "";
$db = 'travel';
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редагування новини</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        body{
            font-family: Verdana, Arial, Helvetica, Sans-Serif;
            background-color: #f7d692;
            font-family: Arial;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">

        <div class="col-12">
            <?php
            $post_id = $_GET['post_id'];
            $sql = "SELECT * FROM tours WHERE id =" .$post_id;;
            $result = mysqli_query($conn, $sql);
            $post = mysqli_fetch_assoc($result);
            ?>
            <div class="col">
                <h3>Редагування новини</h3>
            </div>
            <form action="./update-new.php" method="post"
                  enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="id"
                       value="<?=$post['id']?>" required>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Змініть назву туру</label>
                    <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                       value="<?=$post['title']?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Змініть зображення для туру</label>
                    <input name="image" type="text" class="form-control" id="exampleFormControlFile1"
                       value="<?=$post['image']?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Відредагуйте текст опису туру</label>
                    <textarea name="content" class="form-control"
                              id="exampleFormControlTextarea1" rows="6">
                        <?=$post['content']?> required</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlCategory1">ID Категорії</label>
                    <input name="category_id" type="text" class="form-control" id="exampleFormControlCategory1"
                     value="<?=$post['category_id']?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlCategory1">Назва Категорія</label>
                    <input name="category_name" type="text" class="form-control" id="exampleFormControlCategory1"
                           value="<?=$post['category_name']?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlCategory1">Країна</label>
                    <input name="country" type="text" class="form-control" id="exampleFormControlCategory1"
                           value="<?=$post['country']?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Обновити новину</button>
                <a href="index.php" class="btn btn-secondary">Скасувати</a>
            </form>
        </div>
</div>
</body>
</html>