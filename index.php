<?php get_header() ?>
  <section class="titulo-interno">
    <div class="container">
      <h1>
        <?php
        if(is_home()){
          $idBlog =  get_option( 'page_for_posts' );
          echo get_the_title($idBlog);
        }
        ?>
      </h1>
    </div>
  </section>
  <div class="container conteudo-interno">
    <div class="row">
      <!-- articles -->
      <div class="col-md-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="wow fadeIn artigos-blog" data-wow-duration="3s">
            <div class="img-blog">
              <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
            </div>
            <div class="pre-content">
              <h2> <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a> </h2>
              <p class="text-justify">
                <?php the_excerpt_limit(30) ?>
              </p>
            </div>
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <a href="<?php the_permalink() ?>" class="btn btn-site btn-block btn-lg"> Saiba mais <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
          <?php wp_pagination() ?>
        <?php else: ?>
          Nenhum post encontrado
        <?php endif; ?>
      </div>
      <!-- sidebar -->
      <div class="col-md-4 sidebar">
        <?php get_sidebar() ?>
      </div>
    </div>
  </div>
<?php get_footer()   ?>
