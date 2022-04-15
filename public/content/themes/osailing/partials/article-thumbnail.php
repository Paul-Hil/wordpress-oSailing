<article class="post post--excerpt">
        <img class="post__image" <?= get_the_post_thumbnail() ?>
        <h3 class="post__title"><?= get_the_title() ?></h3>
        <p class="post__excerpt"><?= get_the_excerpt() ?></p>
        <a href="<?= get_the_permalink() ?>" class="post__link">Lire la suite</a>
    </article>