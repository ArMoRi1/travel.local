<?php
include ("header.php");
?>

<div class="container">
            <?php $tours = get_tours() ?>
            <?php foreach ($tours as $tour): ?>

                <div class="card">
                    <img src="<?= $tour['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?= $tour['title'];?></h3>
                        <p class="card-text"><?= mb_substr($tour['content'],0,150) .'...';?></p>
                        <p class="card-text">Тип туру: <?= ($tour['category_name']);?></p>
                        <p class="card-text">Країна: <?= ($tour['country']);?></p>
                        <a href="post.php?tour_id=<?=$tour['id']?>" class="button">Детальніше →</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <?=$tour['datatime']?> by Admin
                    </div>
                </div>
            <?php endforeach; ?>
</div>

<?php
include ("footer.php");
?>
