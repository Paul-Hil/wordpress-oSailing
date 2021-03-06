<?= get_header() ?>

<body class="home">
  <header class="header header--vertical">
    <div class="logo logo--vertical">
      <img src="<?= get_theme_file_uri() ?>/assets/img/logo.svg" class="logo__image" alt="">
      <h1 class="logo__text">oSailing</h1>
    </div>
    <nav class="menu menu--vertical">
      <ul class="menu__list">
        <li class="menu__list__item"><a class="menu__list__item__link menu__list__item__link--active" href="#banner">Intro</a></li>
        <li class="menu__list__item"><a class="menu__list__item__link" href="#post-list">Articles</a></li>
        <li class="menu__list__item"><a class="menu__list__item__link" href="#values">Valeurs</a></li>
      </ul>
    </nav>
  </header>


<section class="banner" id="banner">
    <h2 class="banner__title"><?= get_bloginfo('description'); ?></h2>
    <img src="<?= get_theme_file_uri() ?>/assets/img/banner.jpg" class="banner__image">
</section>
<main class="post-list post-list--home" id="post-list">

    <?php
     if (have_posts())  {
        while (have_posts()) {
          the_post();
          
          get_template_part('partials/article-thumbnail', 'article-thumbnail'); 
          }
    }
?>
    <a class="button" href="blog.html">Voir les articles plus anciens</a>
</main>
<section class="category-list" id="values">
    <div class="category">
        <h4 class="category__name"><a class="category__name__link" href="category.html">Escales</a></h4>
        <span class="category__post-count">19</span>
    </div>
    <div class="category">
        <h4 class="category__name"><a class="category__name__link" href="category.html">Semaines en mer</a></h4>
        <span class="category__post-count">123</span>
    </div>
    <div class="category">
        <h4 class="category__name"><a class="category__name__link" href="category.html">Rencontres</a></h4>
        <span class="category__post-count">214</span>
    </div>
</section>

<?= get_footer() ?>

</body>

</html>