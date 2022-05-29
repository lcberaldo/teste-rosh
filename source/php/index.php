<?php

$is_mobile = 'false';

$iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");
$berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");

if ($iphone || $android || $ipad || $ipod || $berry == true) {
  $is_mobile = 'true';
};

$number_of_posts = 4;

if ($is_mobile === 'true') {
  $number_of_posts = 2;
}



get_header(); ?>


<section class="banner">

  <div class="banner-lg d-none d-lg-block" style="background: url(<?= the_field('banner_desktop'); ?>)"></div>

  <img class="img-fluid d-lg-none" src="<?= the_field('banner_mobile'); ?>" alt="">

  <div class="container col-lg-4">

    <h2><?= the_field('titulo_banner'); ?></h2>

    <p><?= the_field('texto_banner'); ?></p>

    <div class="d-flex align-items-center justify-content-between col-lg-10">
      <a class="btn-cta" href="#">Contato</a>

      <a href="#" class="video">Assista o Vídeo <i class="fa-solid fa-caret-right"></i></a>
    </div>

  </div>


</section>

<section id="sobre" data-aos='fade-up'>

  <div class="wrapper">
    <div class="carousel-clientes">

      <?php

      if (have_rows('clientes')) :

        while (have_rows('clientes')) : the_row(); ?>

          <img src="<?= the_sub_field('logo'); ?>" alt="">


      <?php endwhile;

      endif;  ?>



    </div>
  </div>

  <div class="container">

    <span class="mini-title">O que nós fazemos?</span>

    <h3 class="title">Nossa Especialização</h3>

    <div class="card-box d-lg-flex flex-wrap justify-content-between">

      <?php

      if (have_rows('especializacao')) :

        while (have_rows('especializacao')) : the_row(); ?>

          <div class="card ">
            <div class="header">
              <img src="<?= the_sub_field('icone'); ?>" alt="" class="icon">
              <h4 class="card-title"><?= the_sub_field('titulo'); ?></h4>
            </div>

            <p><?= the_sub_field('texto'); ?></p>

            <a href="#" class="green-cta">Leia Mais</a>
          </div>


      <?php

        endwhile;

      endif;  ?>



    </div>

    <a href="#" class="btn-cta">Saber mais</a>

  </div>

</section>

<section id="portfolio">

  <div class="container">

    <span class="mini-title">Nosso trabalho</span>

    <h3 class="title">Nosso Portfólio</h3>

    <?php $new_query = new WP_Query(array(
      'posts_per_page' => $number_of_posts,
      'post_type'      => 'portfolio',
      'order' => 'ASC',
    ));

    $counter = 0;

    if ($new_query->have_posts()) : ?>

      <div class="projetos-box d-lg-flex flex-wrap  justify-content-between">


        <?php while ($new_query->have_posts()) : $new_query->the_post();  ?>


          <div class="projeto" <?php if ($counter % 2 == 0) : ?> data-aos="fade-right" <?php else : ?> data-aos='fade-left' <?php endif; ?>>

            <img class="img-fluid" src="<?= the_post_thumbnail_url(); ?>" alt="">

            <div class="d-flex align-items-center mt-3">
              <h4 class="projeto-title"><?= the_title(); ?></h4>
              <a href="#" class="green-cta">Ver Detalhes</a>
            </div>

          </div>

        <?php $counter++;
        endwhile; ?>

      </div>

    <?php endif;

    wp_reset_query(); ?>

    <a href="#" class="btn-cta">Ver Todos</a>

  </div>

</section>

<section id="depoimentos" data-aos='flip-left'>

  <div class="container">

    <span class="mini-title">Depoimentos</span>

    <h3 class="title">O que os clientes dizem</h3>

    <div class="depo-box">

      <div class="gray-square"></div>

      <div class="wrapper">
        <div class="carousel-depoimentos">


          <?php

          if (have_rows('depoimentos')) :

            while (have_rows('depoimentos')) : the_row(); ?>

              <div class="wrapper-interno">
                <div class="depo">

                  <span class="short-comment"><?= the_sub_field('pequeno_comentario'); ?></span>

                  <p><?= the_sub_field('comentario'); ?></p>

                  <div class="stars">

                    <?php

                    $num_of_star = get_sub_field('stars');


                    for ($i = 1; $i <= $num_of_star; $i++) : ?>

                      <img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/star.png" alt="">

                    <?php endfor; ?>

                  </div>

                  <span class="nome"><?= the_sub_field('nome'); ?></span>

                </div>
              </div>


          <?php endwhile;

          endif;  ?>

        </div>
      </div>

    </div>

  </div>

</section>

<section id="precos">

  <div class="container">

    <span class="mini-title">Preços</span>

    <h3 class="title">Política de preços</h3>


    <div class="card-box d-lg-flex justify-content-between ">



      <?php

      if (have_rows('cards')) :

        while (have_rows('cards')) : the_row();

          $texto_botao;
          $preco = get_sub_field('preco');

          if (strtolower($preco) === 'personalizado') {
            $texto_botao = 'Contato';
          } else {
            $texto_botao = 'Solicitar demonstração';
            $preco = 'R$' . $preco;
          };
      ?>

          <div class="card-item" data-aos='flip-right'>

            <h3 class="for-who"><?= the_sub_field('para_quem'); ?></h3>

            <h4 class="preco"><?= $preco; ?></h4>

            <?php

            if (have_rows('atributos')) : ?>

              <ul class="attr">

                <?php while (have_rows('atributos')) : the_row(); ?>

                  <li><?= the_sub_field('atributo'); ?></li>

                <?php endwhile; ?>

              </ul>

            <?php endif;  ?>


            <a href="#" class="btn-cta-unfilled"><?= $texto_botao; ?></a>


          </div>


      <?php endwhile;

      endif;  ?>


    </div>

  </div>

</section>

<section id="contato" data-aos="zoom-in">

  <div class="container">

    <h3 class="title">Precisa de um pouco mais casa para crescer?</h3>

    <a href="#" class="btn-cta">Contato</a>

  </div>

</section>


<?php get_footer(); ?>