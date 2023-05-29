<?php
include ("header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php $tours = get_tours() ?>
            <?php foreach ($tours as $tour): ?>
                <div class="card">
                    <img src="<?= $tour['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $tour['title'];?></h5>
                        <p class="card-text"><?= mb_substr($tour['content'],0,80) .'...';?></p>
                        <p class="card-text">Тип туру: <?= ($tour['category_name']);?></p>
                        <p class="card-text">Країна: <?= ($tour['country']);?></p>
                        <a href="post.php?tour_id=<?=$tour['id']?>" class="btn btn-primary">Читати далі</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php
include ("footer.php");
?>
