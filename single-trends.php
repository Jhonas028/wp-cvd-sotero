<?php get_header() ?>

<section class="about">
    <div class="container">
        <div class="update__img">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large') ?>
            <?php endif; ?>
        </div>

        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>

    </div>
</section>

<?php get_footer() ?>