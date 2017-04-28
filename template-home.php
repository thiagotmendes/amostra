<?php /* template name: Home */ ?>
<?php get_header() ?>
  <section class="banner">
    <?php echo do_shortcode('[rev_slider alias="home"]') ?>
  </section>

  <section class="sobre-empresa inner">
    <div class="container">
      <h1 class="text-center wow bounceInDown" data-wow-duration="2s" data-wow-delay="1"> Amostra Comunicação </h1>

      <div class="text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="3" >
        <?php
          $conteudoHome = get_page_by_title('home');
          echo wpautop($conteudoHome->post_content);
        ?>
      </div>
    </div>
  </section>

  <section class="servicos inner">
    <div class="container">
      <?php $paginaServicos = get_page_by_title('serviços'); ?>
      <h2 class="text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="1"> <?php echo $paginaServicos->post_title ?> </h2>

      <p class="text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="3" >
        <?php echo $paginaServicos->post_content ?>
      </p>

      <div class="row">
        <?php

        $argServicos = array(
          'post_type' => 'page',
          'post_parent' => $paginaServicos->ID,
          'orderby' => 'order',
          'order' => 'asc'
        );

        $servicosHome = new wp_query($argServicos);
        if ($servicosHome->have_posts()):
          $count = 0;
          while($servicosHome->have_posts()): $servicosHome->the_post();
            ?>
            <div class="col-md-3 col-sm-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="<?php echo $count ?>s">
              <div class="text-center">
                <?php
                $image = get_field('icones');
                ?>
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
              </div>
              <h3 class="titulo-servico"> <?php the_title() ?> </h3>
            </div>
            <?php
            $count = $count + 0.5;
          endwhile;
        else:
          echo "Nenhum Serviço encontrado";
        endif;
         ?>
      </div>

      <div class="row cta-servicos">
        <div class="col-md-4 col-md-offset-4">
          <a href="<?php echo esc_url( home_url( 'contato' ) ); ?>" class="btn btn-block btn-lg btn-site"> Fale com um consultor </a>
        </div>
      </div>
    </div>
  </section>

  <section class="clientes inner">
    <div class="container">
      <h2 class="text-center titulo-clientes wow fadeInDown"> Nossos Clientes </h2>
      <div class="clientes-home">
        <?php
        $paginaClientes = get_page_by_title('clientes');
        echo $paginaClientes->post_content
         ?>
      </div>
    </div>
  </section>

  <section class="blog inner">
    <div class="container">
      <h2 class="text-center titulo-clientes wow fadeInDown"> BLog </h2>

      <div class="row">
        <?php
        $argPostHome = array(
          'post_type' => 'post',
          'posts_per_page' => 3
        );

        $postsHome = new wp_query($argPostHome);
        if ($postsHome->have_posts()):
          while($postsHome->have_posts()): $postsHome->the_post();
          ?>
            <div class="col-md-4">
              <div class="img-blog">
                <a href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                </a>
              </div>

              <h3> <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a> </h3>

              <?php the_excerpt_limit(20) ?>
            </div>
          <?php
          endwhile;
        endif;
        ?>
      </div>

    </div>
  </section>

  <section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d234.48927292346733!2d-43.951949!3d-19.889468!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa690a2f243e2b3%3A0xc7ec92973fc6b2d9!2sR.+dos+Tecel%C3%B5es%2C+222+-+Aparecida%2C+Belo+Horizonte+-+MG%2C+31235-050%2C+Brasil!5e0!3m2!1spt-BR!2sbr!4v1493166717071" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>

<?php get_footer() ?>
