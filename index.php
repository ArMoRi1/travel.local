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
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                $menus = get_menu();
                ?>
                <?php foreach ($menus as $menu):?>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?=$menu['title']?></a>
                    </li>
                <?php endforeach;?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php $tours = get_tours() ?>
            <?php foreach ($tours as $tour): ?>
                <div class="card">
                    <img src="<?= $tour['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $tour['title'];?></h5>
                        <p class="card-text"><?= mb_substr($tour['content'],0,80) .
                            '...';?></p>
                        <a href="#" class="btn btn-primary">Читати далі</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"><</script>
</body>
</html>