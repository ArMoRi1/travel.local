<?php
session_start();
$login = 'admin';
$pass = '123';
if ($_SESSION["login"] !== $login && $_SESSION["password"] !== $pass){
    header('location: ../login/index.php');
}
?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0>
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Додавання нової новини</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div class="container">
        <div class="col-12">
            <div class="col">
                <h3>Додання нової новини</h3>
            </div>
            <form action="./check-new.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Вкажіть назву туру</label>
                    <input name="title" type="text" class="form-control"
                           id="exampleFormControlInput1" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Вкажіть посилання на
                        зображення для туру</label>
                    <input name="image" type="text" class="form-control"
                           id="exampleFormControlFile1" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Вкажіть опис туру</label>
                    <textarea name="content" class="form-control"
                              id="exampleFormControlTextarea1" rows="6" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlCategory1">ID-категорії</label>
                    <input name="category_id" type="text" class="form-control"
                           id="exampleFormControlCategory1" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlCategory1">Назва категорії</label>
                    <input name="category_name" type="text" class="form-control"
                           id="exampleFormControlCategory1" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlCategory1">Країна</label>
                    <input name="country" type="text" class="form-control"
                           id="exampleFormControlCategory1" required>
                </div>
                <button type="submit" class="btn btn-primary">Створити новину</button>
                <a href="index.php" class="btn btn-secondary">Скасувати</a>
            </form>
        </div>
</div>
</body>
</html>