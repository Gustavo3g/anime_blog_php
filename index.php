<?php
include_once "templates/header.php";
?>
    <main>
        <div id="title-container">
            <h1>Blog Animar</h1>
            <h1>O seu blog de Animes</h1>
        </div>
        <div id="container">
            <?php
                foreach ($posts as $post): ?>
                    <div class="post-box">
                        <img src="<?= $BASE_URL?>/img/<?=$post['img']?>" alt="<?=$post['title'] ?>">
                        <h2 class="post-title">
                            <a href="<?= $BASE_URL?>post.php?id=<?= $post['id']?>"><?= $post['title']?></a>
                        </h2>
                        <p class="post-description">
                            <?= $post['description']?>
                        </p>
                    </div>

                <?php endforeach; ?>
        </div>
    </main>
<?php
include_once "./templates/footer.php";
?>