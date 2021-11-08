<?php get_header(); ?>
<section id="top">
  <div class="container">
    <div class="info">
      <div class="blue-square"></div>
      <h1><?php echo get_bloginfo( 'name' ); ?></h1>
      <p>Web-разработчик</p>
      <a href="#portfolio-section">Проекты</a>
    </div>
    <div class="img">
      <div class="background-img">

      </div>
    </div>
  </div>
</section>
<section id="services-section">
  <div class="container">
    <div class="title">
      <div class="circle"></div>
      <h1>навыки</h1>
    </div>
    
    <div class="services-container">
      <?php
      $mypod = pods( 'service' );
      $mypod->find( 'name ASC' );
      ?>

      <?php while ( $mypod->fetch() ) : ?>
        <?php
        # Set our variables
        $name         = $mypod->field( 'name' );
        $content      = $mypod->field( 'content' );
        $permalink    = $mypod->field( 'permalink' );
        $icon_class   = $mypod->field( 'icon_class' );
        $border_color = $mypod->field( 'border_color' );
        ?>
        <div class="box <?php echo $border_color; ?>">
          <i class="<?php echo $icon_class; ?>"></i>
          <h5><?php echo $name; ?></h5>
          <p><?php echo $content; ?></p>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<section id="portfolio-section">
  <div class="container">
    <div class="title">
      <div class="square"></div>
      <h1>портфолио</h1>
    </div>
    <div class="portfolio-container">
      <?php
      $mypod = pods( 'project' );
      $mypod->find( 'name ASC' );

      $loop_index = 0;
      ?>

      <?php while ( $mypod->fetch() ) : ?>
        <?php
        # Set our variables
        $name            = $mypod->field( 'name' );
        $type_of_project = $mypod->field( 'type_of_project' );
        // $project_url     = $mypod->field( 'project_url' );
        $permalink       = $mypod->field( 'permalink' );

        $loop_index += 1;

        $row     = $mypod->row();
        $post_id = $row['ID'];

        include 'get_post_featured_image.php';

        $image_properties = get_post_featured_image( $post_id, 'full' );

        // $test_str = 'https://amirshammasov.com/?project=email-portfolio';
        // echo substr($permalink, 0, 42);
        // echo $permalink
        ?>
        
        <a href="<?php echo $permalink ?>" class="box image<?php echo $loop_index; ?>" target="_blank">
          <div class="image" style="
            background: url('<?php echo $image_properties['url']; ?>');
            height: 100%;
            width: 100%;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
          ">
            <div class="hover-bg">
              <div class="title">
                <div class="text"><?php echo $type_of_project; ?></div>
              </div>
            </div>
          </div>
        </a>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<section id="experience-section">
  <div class="container">
    <div class="large-title">
      Опыт работы
    </div>
    <div class="experience-container">
      <div class="large-icons">
        <div class="square">
          <div class="blue-box">
            <span lang="en">Experience</span>
          </div>
        </div>
        <div class="circle">
          <div class="white-box">
            <span lang="en">AWARDS</span>
          </div>
        </div>
        <div class="triangle">
          <div class="triangle-box">
            <div class="text"><span lang="en">Work</span></div>
          </div>
        </div>
      </div>
      <div class="info">
        <?php
        $mypod = pods( 'experience' );
        $mypod->find( 'start_end_date ASC' );
        ?>

        <?php while ( $mypod->fetch() ) : ?>
          <?php
          # Set our variables
          $name           = $mypod->field( 'name' );
          $content        = $mypod->field( 'content' );
          $start_end_date = $mypod->field( 'start_end_date' );
          $location       = $mypod->field( 'location' );
          ?>
          <div class="info-box">
            <h4><?php echo $name; ?> - <?php echo $location; ?></h4>
            <span class="date"><?php echo $start_end_date; ?></span>
            <p><?php echo $content; ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
<section id="blog-section">
  <div class="container">
    <div class="title">
      <h1>Блог</h1>
    </div>
    <div class="blog-container">
      <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <!-- start of post -->
        <a href="<?php the_permalink(); ?>" class="post post-<?php the_ID(); ?>">
          <div class="post-img" style="background: url('<?php the_post_thumbnail_url( 'medium' ); ?>');"></div>
          <div class="details">
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
          </div>
          <div class="more">
            <div class="button">
              Читать дальше
            </div>
          </div>
        </a>
        <!-- end of post -->
      <?php endwhile; ?>
      <?php else : ?> 
          <div class="coming-soon-padding"></div>
          <div class="coming-soon-container">
            <h1 class="coming-soon">Блог появится в ближайшее время...</h1>
          </div>
          <div class="coming-soon-padding"></div>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- <section id="testimonials-section">
  <div class="container">
    <div class="title">
      <div class="square"></div>
      <h1>Testimonials</h1>
    </div>
    <div class="testimonials-container">
      <div class="test-sides test-left">
        <div class="person-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/male-30.jpg');">
          <div class="hover-bg">
            <div class="name">James</div>
          </div>
        </div>
      </div>
      <div class="test-center">
        <div class="header">
          <div class="user-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/8912fe22-7970-4e15-a3a1-abef9f2fb4b5')">

          </div>
          <div class="info">
            <h4>Jenny Benzino</h4>
            <span>CEO, Nike</span>
          </div>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="test-sides test-right">
        <div class="person-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/88b95197-fd1e-4e11-8793-2903a5cfd06e-10584053_10153749310922416_3125632463004974493_n.jpg')">
          <div class="hover-bg">
            <div class="name">Bryant</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<?php get_footer(); ?>
