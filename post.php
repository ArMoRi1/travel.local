<?php
include_once "header.php";
include_once "footer.php";
$tour_id = $_GET['tour_id'];
if (!is_numeric($tour_id)) exit();
$tour = get_tour_by_id($tour_id);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <img src="<?=$tour['image']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$tour['title']?></h5>
                    <p class="card-text"><?=$tour['content']?></p>
                    <p class="card-text">Тип туру: <?= ($tour['category_name']);?></p>
                    <p class="card-text">Країна: <?= ($tour['country']);?></p>
                    <a href="index.php" class="btn btn-primary">Назад</a>
                </div>
            </div>
        </div>
    </div>
</div>

