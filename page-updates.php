<?php get_header(); ?>

<!-- update -->
<section class="update">
    <div class="container">
        <div class="title">
            <h1><?php the_field("updates_title") ?></h1>
            <p>
                <?php the_field("updates_title_description") ?>
            </p>
        </div>

        <div class="update__wrapper">
            <!-- LEFT SIDE -->
            <div class="update__left">
                <?php $updates = new WP_Query(array(
                    'post_type'      => 'updates',
                    'posts_per_page' => 2,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'offset'         => 3,
                )); ?>
                <?php if ($updates->have_posts()) : ?>
                    <?php while ($updates->have_posts()): $updates->the_post() ?>
                        <div class="update__img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large') ?>
                            <?php endif; ?>
                        </div>

                        <div class="update__tags">
                            <ul>
                                <li><i class="fa-solid fa-user"></i> <?php the_author() ?></li>
                                <li><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date('F j, Y'); ?></li>
                                <li><i class="fa-solid fa-tags"></i> Web Design | Wire Frame</li>
                            </ul>
                        </div>

                        <div class="update__datas">
                            <h2><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>
                            <a class="no-bg-btn" href="<?php echo the_permalink() ?>" target="_blank"> Read more...</a>
                        </div>

                        <span class="line"></span>

                    <?php endwhile; ?>
                <?php endif;
                wp_reset_postdata(); ?>

            </div>
            <!-- RIGHT SIDE -->
            <div class="update__right">
                <!-- categories -->
                <div class="categories">
                    <h3>CATEGORIES</h3>
                    <table>
                        <tr>
                            <td>Web Design</td>
                            <td>(2)</td>
                        </tr>
                        <tr>
                            <td>Web Development</td>
                            <td>(3)</td>
                        </tr>
                        <tr>
                            <td>Wire Frame</td>
                            <td>(1)</td>
                        </tr>
                        <tr>
                            <td>Vector & Logo</td>
                            <td>(5)</td>
                        </tr>
                        <tr>
                            <td>Social Media</td>
                            <td>(2)</td>
                        </tr>
                    </table>

                    <span class="line"></span>
                </div>

                <!-- recents -->
                <div class="update__recents">
                    <h3>RECENT POST</h3>
                    <?php $recents = new WP_Query(array(
                        'post_type'      => 'updates',
                        'posts_per_page' => 3,

                    )); ?>
                    <?php if ($recents->have_posts()) : ?>
                        <?php while ($recents->have_posts()): $recents->the_post() ?>
                            <div class="update__post">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large') ?>
                                <?php endif; ?>
                                <div>
                                    <h5><?php the_excerpt(); ?></h5>
                                    <p id="update_date"><?php echo get_the_date('F j, Y'); ?></p>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>

                <span class="line"></span>
                <!-- tags -->

                <div class="tags">
                    <h3>TAGS</h3>
                    <div class="buttons">
                        <a class="btn__outline">WEB DESIGN</a>
                        <a class="btn__outline">WIRE FRAME</a>
                        <a class="btn__secondary">WEB DEVELOPMENT</a>
                        <a class="btn__outline">LOGO</a>
                        <a class="btn__outline">VECTOR</a>
                        <a class="btn__outline">SOCIAL MEDIA</a>
                    </div>
                </div>

                <!-- end of right side -->
            </div>
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