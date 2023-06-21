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
        body{
            font-family: Verdana, Arial, Helvetica, Sans-Serif;
            background-color: #f7d692;
            font-family: Arial;
            text-decoration: none;
        }
        @media (min-width: 992px) {
            .navbar-dark,
            .collapse.navbar-dark {
                display: none;
            }
        }
        @media (max-width: 992px) {
            .first {
                display: none;
            }
        }
        .scroll-to-top {
            position: fixed;
            right: 20px;
            bottom: 20px;
            width: 50px;
            height: 50px;
            background-color: #333;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            font-size: 24px;
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.3s, visibility 0s linear 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            visibility: hidden;
        }
        .scroll-to-top.show {
            opacity: 1;
            transition-delay: 0s;
            visibility: visible;
        }
    </style>
</head>
<body>
<div class="wrapper">
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
                <img style=" width:50px;height:50px;" src="https://cdn-icons-png.flaticon.com/512/1974/1974031.png" alt="TravelIn" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <?php
                $menus = get_menu();
                ?>
                <?php foreach ($menus as $menu):?>
                    <li class="nav-item">
                        <span class="nav-link" aria-current="page" >
                            <a  href="category.php?category_id=<?=$menu['id']?>"><?=$menu['title']?></a>
                        </span>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="btn-group mr-2 first" role="group" aria-label="Second group">
            <a href = "login/index.php" type="button" class="btn btn-secondary">Увійти</a>
        </div>
    </nav>
    <div class="collapse navbar-dark" id="navbarToggleExternalContent">
        <div class="bg-warning p-4">
            <ul class="navbar-nav">
                <?php foreach ($menus as $menu):?>
                    <li class="nav-item">
                        <span class="nav-link " aria-current="page" >
                             <span style = "color: black;">→</span> <a href="category.php?category_id=<?=$menu['id']?>">  <?=$menu['title']?></a>
                        </span>
                    </li>
                <?php endforeach;?>
            </ul>
            <div class="btn-group mr-2 " role="group" aria-label="Second group">
                <a href = "login/index.php" type="button" class="btn btn-light">Увійти</a>
            </div>
        </div>
    </div>
    <marquee behavior="scroll" direction="right">
        <img src="https://cdn-icons-png.flaticon.com/512/84/84075.png" alt="Plane Facing Right - Free transport icons" width="60" height="50" />
    </marquee>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <a href="#" class="scroll-to-top">&uarr;</a>


