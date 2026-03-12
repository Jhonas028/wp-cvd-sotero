<?php get_header() ?>

<section class="update">
    <div class="container">
        <div class="update_wrapper">


            <!-- LEFT SIDE -->
            <div class="update__left">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


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
                            <?php the_content(); ?>
                        </div>

                        <span class="line"></span>

                <?php endwhile;
                endif; ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer() ?>