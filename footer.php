    <footer>
      <div class="social-container">
        <a href="https://github.com/ShammasovAmir">
          <i class="fab fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/amir-shammasov-174b6b204/?locale=ru_RU">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
      <h5><?php echo get_bloginfo( 'name' ); ?></h5>
      <h6>Web-разработчик</h6>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollToPlugin.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/smoothScroll.js"></script>
    <script type="module" src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/app.js"></script>

    <?php wp_footer(); ?>
    </body>

    </html>