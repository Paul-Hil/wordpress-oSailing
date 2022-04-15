<?php setlocale (LC_TIME, 'fr_FR.utf8','fra'); ?>
<?= get_header() ?>

<body class="single">
    <header class="header">
        <div class="logo">
            <img src="<?= get_theme_file_uri() ?>/assets/img/logo.svg" class="logo__image" alt="">
            <a href="<?= site_url('') ?>" class="logo__text">oSailing
            </a>
        </div>
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__list__item"><a class="menu__list__item__link" href="category.html">Escales</a></li>
                <li class="menu__list__item"><a class="menu__list__item__link" href="category.html">Semaines en mer</a></li>
                <li class="menu__list__item"><a class="menu__list__item__link" href="category.html">Rencontres</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <article class="post">
            <header class="post__header">
                <img class="post__header__image" <?= get_the_post_thumbnail() ?><h1 class="post__header__title"><?= get_the_title() ?></h1>
            </header>
            <main class="post__content">
                <p><?= get_the_content() ?> </p>
            </main>
            <footer class="post__footer">
                Dans <a class="post__footer__category-link" href="category.html">Rencontres</a>
                le <time class="post__footer__date" datetime="2020-06-09"><?= strftime("%d %B %G", strtotime(get_the_date())) ?></time>
            </footer>
        </article>
    </main>
    <section class="pagination">

        <?php

        $nextPost = get_next_post();
        $previousPost = get_previous_post();

        ?>

        <a class="pagination--previous-link button" href="<?= $previousPost != null ? $previousPost->guid : '' ?>">Article précédent</a>
        <a class="pagination--previous-link button" href="<?= $nextPost != null ? $nextPost->guid : '' ?>">Article Suivant</a>

    </section>

    <?= get_template_part('partials/single-footer', 'single-footer'); ?>