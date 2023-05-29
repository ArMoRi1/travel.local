<?php
require_once ('header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
            $category_id = $_GET['category_id'];
            $tours = get_tours_by_category($category_id);
            ?>
 <hr>
 <?php foreach ($tours as $tour): ?>
                <div class="card mb-4">
                    <img class="card-img-top img-fluid img-size" src="<?=
                    $tour['image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <a href="post.php?post_id=<?=$tour['id']?>"> <h3
                                class="card-title"><?=$tour['title'];?></h3></a>
                        <p class="card-text"><?=mb_substr($tour['content'],0,400). '...'?></p>
                        <a href="post.php?post_id=<?=$tour['id']?>" class="btn btn-primary">Детальніше &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <?=$tour['datatime']?> by
                        <a href="#">Admin</a>
                    </div>

 <?php endforeach;?>
        </div>
    </div>
</div>

