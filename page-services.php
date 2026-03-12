<?php get_header(); ?>


<!-- Services -->
<section class="services">
    <!-- 1 -->
    <?php
    $servicesMain = new WP_Query(array(
        'post_type' => 'servicesMain',
        'posts_per_page' => -1,
    ));
    ?>
    <?php if ($servicesMain->have_posts()) : ?>
        <?php $i = 1; ?>
        <?php while ($servicesMain->have_posts()) : $servicesMain->the_post(); ?>

            <div class="services__wrapper" id="section-<?php echo $i; ?>">
                <div class="container">
                    <div class="services__text">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <?php the_content(); ?>

                        <p>Price may Starts at</p>
                        <h5><?php the_excerpt(); ?></h5>
                        <h6>
                            <i>price may vary depending on the design and development</i>
                        </h6>
                    </div>
                    <div class="services__img">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="chevron">
                        <a href="#section-<?php echo $i + 1; ?>">
                            <i class="fa-solid fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php $i++;
        endwhile; ?>
    <?php endif;

    wp_reset_postdata(); ?>
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