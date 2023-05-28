<?php
include_once "header.php";
include_once "footer.php";
$tour_id = 1;
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
                    <a href="index.php" class="btn btn-primary">Назад</a>
                </div>
            </div>
        </div>
    </div>
</div>

