<?php
include ("include/config.php");
include ("include/function.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Travel on You</title>
    <style>
        @media (min-width: 992px) {
            .navbar-dark,
            .collapse.navbar-dark {
                display: none;
            }
        }
    </style>
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">TraveL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                $menus = get_menu();
                ?>
                <?php foreach ($menus as $menu):?>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php?category_id=<?=$menu['id']?>"><?=$menu['title']?></a>
                    </li>
                <?php endforeach;?>
            </ul>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <a href = "login/index.php" type="button" class="btn btn-outline-secondary">Увійти</a>
                <a type="button" class="btn btn-secondary">Зареєструватись</a>
            </div>
        </div>
    </nav>
    <div class="collapse navbar-dark" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <ul class="navbar-nav">
                <?php foreach ($menus as $menu):?>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php?category_id=<?=$menu['id']?>"><?=$menu['title']?></a>
                    </li>
                <?php endforeach;?>
            </ul>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <a href = "login/index.php" type="button" class="btn btn-outline-secondary">Увійти</a>
                <a type="button" class="btn btn-secondary">Зареєструватись</a>
            </div>
        </div>
    </div>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
