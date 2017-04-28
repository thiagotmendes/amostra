<section class="total left fundo_inicial" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                // retorna os dados do usuário logado
                $usuarioLogado = wp_get_current_user();
                // passamos o ID do usuário e geramos o array
                $user_info = get_userdata($usuarioLogado->ID);
                $login = $user_info->user_login ;
                if (!empty($login)) {
                    echo "<p>Seja bem vindo(a) <span>".  $login ."</span> </p>";
                }
                ?>
            </div>
            <div class="col-md-4">

            </div>
            <style>
                .xyz img:last-child{display:none}
                .xyz:hover img:first-child{display:none}
                .xyz:hover img:last-child{display:inline-block}

            </style>

            <div class="col-md-4 links_sociais">



                <p class="text-right">Acompanhe nas redes sociais
                    <a class="xyz" href="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/sociais/facebook.png">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/sociais/facebook_hover.png">
                    </a>
                    <a class="xyz" href="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/sociais/instagram.png">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/sociais/instagram_hover.png">
                    </a>
                    <a class="xyz" href="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/sociais/twitter.png">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/sociais/twitter_hover.png">
                    </a>
                    <a class="xyz" href="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/sociais/youtube.png">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/sociais/youtube_hover.png">
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
<!--- Topo --------------------------------->
<section class="total left topo" style="">



    <div class="container">

        <div class="row">
            <div class="col-md-3">

            </div>
        </div>
        <div class="total left">
            <div class="container">
                <div class="row">
                    <div class="col-md-4   ">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="total left logo" />
                        </a>

                    </div>
                    <div class="col-md-4   ">
                        <form class="busca left total">
                            <input type="image" src="<?php echo get_template_directory_uri() ?>/assets/images/lupa.png">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/lista_cinza.jpg">
                            <input  type="text" placeholder="Digite aqui oque você procura...">
                        </form>
                    </div>
                    <div class="col-md-2   ">
                        <?php
    if (empty($login)) {
                        ?>
                        <div class="total left bloco_01">
                            <img class="chopp_copo" src="<?php echo get_template_directory_uri() ?>/assets/images/chopp.png">
                            <img class="separador"  src="<?php echo get_template_directory_uri() ?>/assets/images/separador.png">
                            <p class="left"><a><span>Registre-se</span>  <br> ou faça <span>o login</span></a></p>
                        </div>
                        <?php
    }
                        ?>
                    </div>
                    <div class="col-md-2   ">
                        <a href="<?php echo esc_url( home_url( 'carrinho' ) ); ?>" class="total left bloco_01 xart">

                            <img class="chopp_copo" src="<?php echo get_template_directory_uri() ?>/assets/images/xart.png">

                            <img class="separador"  src="<?php echo get_template_directory_uri() ?>/assets/images/separador.png">
                            <p class="left">
                                <?php
    global $woocommerce;
                                 $numero = sprintf(_n('%d', $woocommerce->cart->cart_contents_count, 'woothemes'));
                                ?>
                                <span><?php echo $numero; ?></span> itens  <br> na  geladeira</span>
                        </p>
                    </a>
            </div>

            <div class="col-md-12 " >
                <div class="row">
                    <?php get_template_part('parts/content', 'menu') ?>
                </div>
            </div>

        </div>

    </div>
    </div>
</div>
</section>
<!---/Topo --------------------------------->
