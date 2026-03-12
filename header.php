<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo blogInfo('desciption')?>" />
    <title><?php is_front_page() ? bloginfo('title') : wp_title("") ?></title>
    <?php wp_head(); ?>

</head>

<body>
    <!-- header -->
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo">
                    <!-- <img src="./img/Brand.png" alt="This is a logo"> -->
                     <?php the_custom_logo()?>
                    <h5>Creative <span>Visual</span> Design</h5>
                </div>
                <nav class="header__nav">
                    <ul>
                        <li><a href="<?php echo site_url('/') ?>">Home</a></li>
                        <li><a href="<?php echo site_url('/about') ?>">About</a></li>
                        <li><a href="<?php echo site_url('/services') ?>">Services</a></li>
                        <li><a href="<?php echo site_url('/updates') ?>">Updates</a></li>
                        <li><a href="<?php echo site_url('/contacts') ?>">Contacts</a></li>
                    </ul>
                </nav>
                <div class="toggle__menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        
       
          
           
    </header>