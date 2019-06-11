<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JSCorp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <script>new WOW().init();</script>
</head>

<body <?php body_class(); ?>>

<div id="navi-wrap">
    <div class="logo">
        <img src="<?php echo get_template_directory_uri() ?>./assets/img/navigation/Logo.png" alt="">
    </div>

    <nav id="mainnav" class="clearfix" role="navigation">
        <?php
        // Display Main Navigation
        wp_nav_menu( array(
            'theme_location' => 'headermenu',
            'container' => false,
            'menu_id' => 'mainnav-menu',
            'menu_class' => 'main-navigation-menu',
            'echo' => true,
            'fallback_cb' => 'courage_default_menu',
        ) );
        ?>
        <div class="mainnav_last_block">
            <div class="row contacts1">

                <img src="<?php echo get_template_directory_uri() ?>./assets/img/navigation/JScorplogos3.png" alt="">

                <div class="row">
                    <div class="row vk">
                        <a href="#">
                            <i class="fab fa-vk"></i>
                        </a>
                    </div>

                    <div class="row tel">
                        <a href="#">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                    </div>

                    <div class="row in">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="row contacts">
        <div class="row vk">
            <a href="#">
                <i class="fab fa-vk"></i>
            </a>
        </div>

        <div class="row tel">
            <a href="#">
                <i class="fab fa-telegram-plane"></i>
            </a>
        </div>

        <div class="row in">
            <a href="#">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
</div>

<div class="col ground">
    <div class="header_text">
        <p>
            Реализуйте свои идеи<br/>
            вместе с <span class="sp1">JS corp.</span>
        </p>
        <p>
            <span class="sp3">
                JS corp. > JS corporation > <span class="sp1">Новаторам</span>
            </span>
        </p>
    </div>
</div>