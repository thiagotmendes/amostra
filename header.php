<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php title_page() ?></title>

    <!-- Bootstrap -->
    <?php wp_head() ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header id="toposite">
      <nav class="navbar navbar-site" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" >
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav menu-social navbar-right">
              <li>
                <a href="https://www.facebook.com/AmostraComunicacao/" target="_blank">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/AmostraBH/" target="_blank">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
            <?php
              $args = array(
                'theme_location' => 'menu_topo',
                'menu_class' => 'nav navbar-nav menu-site navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'	 => new wp_bootstrap_navwalker()
              );
              wp_nav_menu( $args );
            ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
