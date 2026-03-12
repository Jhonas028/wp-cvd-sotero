<?php get_header(); ?>

<!-- About -->
<section class="aboutMain">
  <div class="container">
    <div class="aboutMain__wrapper">
      <div class="aboutMain__text">
        <p><?php the_field("aboutm_p1") ?></p>
        <h1><?php the_field("aboutm_title") ?></h1>
        <p><?php the_field("aboutm_description") ?></p> <br>
        <p><?php the_field("aboutm_description") ?></p>

        <ul class="aboutMe__social">
          <li><a href="<?php echo get_field('facebook_url'); ?>"><i class="fa-brands fa-facebook fa-2x"></i></a></li>
          <li><a href="<?php echo get_field('twitter_url'); ?>"><i class="fa-brands fa-twitter fa-2x"></i></a></li>
          <li><a href="<?php echo get_field('instagram_url'); ?>"><i class="fa-brands fa-instagram fa-2x"></i></a></li>
          <li><a href="<?php echo get_field('youtube_url'); ?>"><i class="fa-brands fa-youtube fa-2x"></i></a></li>
        </ul>
      </div>

      <div class="aboutMain__img">
        <?php $aboutm_image = get_field("aboutm_image");  ?>
        <img src="<?php echo esc_url(wp_get_attachment_image_url($aboutm_image['ID'], 'full')) ?>" alt="about image">
      </div>

    </div>
    <div class="chevron">
      <a href="#recent">
        <i class="fa-solid fa-angle-down fa-2x"></i>
      </a>
    </div>

  </div>
</section>

<!-- My Recent Projects -->
<section id="recent" class="projects">
  <div class="container">
    <div class="projects__title">
      <h2><?php the_field("recent_title") ?></h2>
      <p><?php the_field("recent_p") ?></p>
    </div>

    <div class="projects__wrapper">
      <?php $recents = new WP_Query(array(
        'post_type' => 'recents',
        'posts_per_page' => -1,
      )); ?>
      <?php if ($recents->have_posts()) : ?>
        <?php while ($recents->have_posts()):
          $recents->the_post() ?>

          <div class="projects__card">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large') ?>
            <?php endif; ?>
            <h5><?php the_title(); ?></h5>
            <?php the_excerpt(); ?>


          </div>

        <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata(); ?>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="container">
    <div class="cta__info">
      <h3>Feel free to talk to us about your Projects</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
      <a class="btn bg--dark" href="#">CONTACT US</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>