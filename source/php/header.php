<!DOCTYPE html>

<html lang="pt_BR">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>

    <?php wp_title(); ?>

  </title>

  <meta name="robots" content="index, follow" />

  <meta name="msapplication-TileColor" content="#ffffff">

  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/dist/css/style.css">

</head>

<body>



  <header>

    <nav class="menu-mob ">


      <div class="d-flex justify-content-between align-items-center container d-lg-none">
        <img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/logo.png" alt="" class="logo">

        <div class="hamburger d-lg-none" id="hamburger-11">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>

      <div class="lg-box">
        <img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/logo.png" alt="" class="logo d-lg-block d-none">

        <div class=" menu d-lg-flex">

          <a target="sobre" class="link">Sobre</a>
          <a target="portfolio" class="link">Portfólio</a>
          <a target="depoimentos" class="link">Depoimentos</a>
          <a target="contato" class="link">Contato</a>
          <a class="link">Sign in</a>
          <a class="link signup">Sign up</a>

        </div>
      </div>

    </nav>



  </header>