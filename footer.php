<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JSCorp
 */
?>

<div class="footer-block">
    <div class="first-block">
        <?php
        // Display Main Navigation
        wp_nav_menu( array(
            'theme_location' => 'footermenu_1',
            'container' => false,
            'menu_id' => 'footer-menu-1',
            'menu_class' => 'first-menu',
            'echo' => true,
            'fallback_cb' => 'courage_default_menu',
        ) );
        ?>
    </div>

    <div class="f_line"></div>

    <div class="last-block">
        <?php
        // Display Main Navigation
        wp_nav_menu( array(
            'theme_location' => 'footermenu_2',
            'container' => false,
            'menu_id' => 'footer-menu-2',
            'menu_class' => 'second-menu',
            'echo' => true,
            'fallback_cb' => 'courage_default_menu',
        ) );
        ?>

        <div class="col cent">
            <div class="row center cont">
                <div class="row vk">
                    <i class="fab fa-vk"></i>
                </div>

                <div class="row tel">
                    <i class="fab fa-telegram-plane"></i>
                </div>

                <div class="row in">
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <p>&copy; <span class="sp1">JS corp.</span> Все права защищены</p>
        </div>

        <div class="row right">
            <img src="<?php echo get_template_directory_uri() ?>./assets/img/navigation/JScorplogos3.png" alt="">
        </div>
    </div>

</div>

<?php wp_footer(); ?>
</body>
</html>
