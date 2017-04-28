<?php get_header() ?>
  <?php if (have_posts()): ?>
    <?php while(have_posts()): the_post() ?>
      <section class="titulo-interno">
        <div class="container">
          <h1><?php the_title() ?></h1>
        </div>
      </section>
      <article class="conteudo-interno">
        <div class="container">
          <?php the_content() ?>
          <?php
          $galeria = get_field('galeria');
          if (!empty($galeria)) {
            echo "<h3 class='titulo-galeria'> Conheça alguns de nossos trabalhos </h3>";
            echo "<div class='slider-portfolio'>";
              foreach ($galeria as $galPortfolio) {
                ?>
                <div class="">
                  <a href="<?php echo $galPortfolio['url'] ?>" rel="lightbox[portfolio]">
                    <img src="<?php echo $galPortfolio['url'] ?>" alt="<?php echo $galPortfolio['alt'] ?>" class="img-responsive">
                  </a>
                </div>
                <?php
              }
            echo "</div>";
          }
          ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer() ?>
