<?php
include ("../include/config.php");
include ("../include/function.php");
?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, , initialscale=1.0>
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вхід в адмін-панель</title>
    <link rel="stylesheet"
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="main-form">
                <form class="login" action="check-login.php" method="post">
                    <h3>Вхід</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Логін</label>
                        <input type="text" name="login" class="form-control"
                               id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password" name="password" class="form-control"
                               id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary formbtn">Увійти</button>
                </form>
            </div>
        </div>
    </div>
</div>
