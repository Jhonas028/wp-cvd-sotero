<?php get_header(); ?>
<!-- banner -->
<section class="banner">
  <div class="container">
    <div class="banner__wrapper">
      <div class="banner__text">
        <h1>
          <?php the_field("title") ?>
        </h1>
        <p>
          <?php the_field("description") ?>
        </p>
        <a class="btn bg--primary" href="#">EXPLORE MORE</a>
      </div>
      <div class="banner__img">
        <?php $banner_image_1 = get_field("banner_image_1");  ?>
        <img src="<?php echo esc_url(wp_get_attachment_image_url($banner_image_1['ID'], 'full')) ?>" alt="Banner image">
      </div>
    </div>
  </div>
</section>

<!-- skills -->
<section class="skills">
  <div class="container">
    <div class="skills__wrapper">
      <?php
      $services = new WP_Query(array(
        'post_type' => 'services',
        'post_per_page' => -1,

      ));
      ?>
      <?php if ($services->have_posts()) : ?>
        <?php while ($services->have_posts()):
          $services->the_post() ?>
          <div class="skills__card">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large') ?>
            <?php endif; ?>
            <h5><?php the_title(); ?></h5>
            <p><?php the_excerpt(); ?></p>
            <a class="btn bg--primary" href="#">GET A QUOTE</a>
          </div>

        <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<!-- about me -->
<section class="about">
  <div class="container">
    <div class="about__wrapper">
      <div class="about__img">
        <?php $about_image = get_field("about_image"); ?>
        <img src="<?php echo esc_url(wp_get_attachment_image_url($about_image['ID'], 'full')) ?>" alt="Banner image">
      </div>
      <div class="about__text">
        <h2> <?php echo the_field("about_title") ?></h2>
        <p>
          <?php echo the_field("about_text_area") ?>
        </p>
        <p>
          <?php echo the_field("about_text_area") ?>
        </p>

      </div>
    </div>
  </div>
</section>

<!-- trends -->
<section class="trends">
  <div class="container">
    <div class="title">
      <h2> <?php echo the_field("latest_title") ?></h2>
      <p> <?php echo the_field("latest_title_desc") ?></p>
    </div>

    <div class="trends__wrapper">
      <?php
      $trends = new WP_Query(array(
        'post_type' => 'trends',
        'posts_per_page' => -1,

      ));
      ?>
      <?php if ($trends->have_posts()) : ?>
        <?php while ($trends->have_posts()):
          $trends->the_post() ?>
          <!-- 1 -->
          <div class="cards">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('small') ?>
            <?php endif; ?>
            <div class="cards__details">
              <h5><?php the_title(); ?></h5>
              <p><?php the_excerpt(); ?></p>
              <a class="no-bg-btn" href="<?php echo the_permalink() ?>">Read more...</a>
            </div>
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
      <h3> <?php echo the_field("cta_title") ?></h3>
      <p> <?php echo the_field("cta_title_description") ?></p>
      <a class="btn bg--dark" href="#">CONTACT US</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>