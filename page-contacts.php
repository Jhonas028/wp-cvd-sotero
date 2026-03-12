<?php get_header(); ?>

<section class="contact">
    <div class="container">
        <!-- wrapper -->
        <div class="contact__wrapper">
            <div class="contact__texts">
                <div class="contact__title">
                    <h1><?php the_field("contacts_title") ?></h1>
                    <p>
                        <?php the_field("contacts_title_description") ?>
                    </p>
                </div>
                <div class="contact__details">
                    <ul>
                        <li>
                            <i class="fa-solid fa-phone-flip"></i>
                            <p><?php the_field("contacts_phone") ?></p>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <p><?php the_field("contacts_email") ?></p>
                        </li>
                        <li>
                            <i class="fa-solid fa-map-pin"></i>
                            <p>
                                <?php the_field("contacts_address") ?>
                            </p>
                        </li>
                    </ul>
                </div>

                <ul class="contact__social">
                    <li>
                        <a href=""><i class="fa-brands fa-facebook fa-2x"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-brands fa-twitter fa-2x"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-brands fa-instagram fa-2x"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-brands fa-youtube fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="contact__inputs">
                <div class="inputs">
                    <input type="text" placeholder="NAME" /><br />
                    <input type="text" placeholder="EMAIL" /><br />
                    <textarea id="text__message" placeholder="MESSAGE"></textarea><br />
                    <button class="btn bg--primary" type="button">
                        SEND MESSAGE
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>