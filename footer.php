<footer><div class="container"><div class="d-lg-flex justify-content-between"><div class="col-lg-3"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/logo.png" alt=""><p>Nunc odio libero, rhoncus posuere odio nec, sodales aliquet sem.</p><div class="midias"><a href="#"><i class="fa-brands fa-facebook-f"></i></a> <a href="#"><i class="fa-brands fa-twitter"></i></a> <a href="#"><i class="fa-brands fa-linkedin-in"></i></a></div></div><div class="links"><h6 class="titulo">Recursos</h6><a href="#">Nossos agentes</a> <a href="#">História</a> <a href="#">Vídeo</a> <a href="#">Free trial</a></div><div class="links"><h6 class="titulo">Companhia</h6><a href="#">Parcerias</a> <a href="#">Termos de uso</a> <a href="#">Privacidade</a> <a href="#">Sitemap</a></div><div class="links contato col-lg-3"><h6 class="titulo">Entrar em contato</h6><form action="#"><input type="email" name="e-mail" placeholder="e-mail" id=""> <button type="submit"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/submit-icon.png" alt=""></button></form></div></div><div class="copy"><span>Copyright 2021 ©Web.Dev Todos os direitos reservados</span></div></div></footer> <?php wp_footer(); ?> <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.3/jquery.inputmask.min.js"></script><script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script><script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script><script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/js/app.js"></script> <?php if (is_front_page()) : ?> <script>var clientes = tns({
      container: ".carousel-clientes",
      items: 2,
      slideBy: 2,
      autoplay: true,
      edgePadding: 20,
      gutter: 20,
      controls: false,
      nav: true,
      navPosition: "bottom",
      autoplayButtonOutput: false,
      responsive: {
        1200: {
          items: 5,
          edgePadding: 80,
          gutter: 80,
          slideBy: 1,
        },
      },
    });

    var depoimentos = tns({
      container: ".carousel-depoimentos",
      items: 1,
      slideBy: 1,
      autoplay: false,
      controls: true,
      nav: false,
      loop: false,
      controlsPosition: "bottom",
      autoplayButtonOutput: false,
      controlsText: [
        '<i class="fa-solid fa-arrow-left-long"></i>',
        '<i class="fa-solid fa-arrow-right-long"></i>',
      ],
      responsive: {
        1200: {
          items: 3,
          gutter: 20,
          slideBy: 2,
        },
      },
    });</script> <?php endif; ?>