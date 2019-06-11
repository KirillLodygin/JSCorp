<?php
/*
Template Name: Main
*/
get_header();
?>

 <div class="grid">

        <div class="content_block">

            <?php
                $post_id_99 = get_post(99, ARRAY_A);
            ?>

            <div class="jsc">
                <h2><?php echo $post_id_99['post_title'];  ?></h2>
                <?php echo $post_id_99['post_content']; ?>
            </div>

            <div class="line_block">
                <div class="line  fadeIn wow" data-wow-duration="1s"></div>
            </div>

            <div class="dir zoomIn wow" data-wow-duration="2s">
                <h2>Наши направления</h2>
            </div>

            <?php
                $posts = get_posts( array(
                    'numberposts' => 0,
                    'category'    => 8,
                    'orderby'     => 'ID',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true
                ) );

                foreach ($posts as $post){
                    setup_postdata($post);
                    ?>
                    <div class="dir_block">
                        <div class="icon fadeIn wow" data-wow-duration="5s">
                           <div class="swing .<?php echo get_the_tags()[0]->name; ?>">
                               <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                           </div>
                        </div>
                        <div class="declaration bounceIn wow" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h3><?php the_title() ?></h3>
                            <p><?php the_content() ?></p>
                        </div>
                    </div>
                    <?php
                }
            ?>

            <div class="line_block">
                <div class="line  fadeIn wow" data-wow-duration="1s"></div>
            </div>

            <div class="col pics_and_ts">
                <?php
                $posts = get_posts( array(
                    'numberposts' => 0,
                    'category'    => 16,
                    'orderby'     => 'ID',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true
                ));

                foreach ($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="picture_and_text">
                        <div class="picture_block bounceInLeft wow"
                             data-wow-duration="2.3s"
                             data-wow-delay=0.1s">
                            <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                        </div>

                        <div class="text_block bounceInRight wow"
                             data-wow-duration="2.2s"
                             data-wow-delay="0.3s">
                            <h2><?php the_title() ?></h2>
                            <p><?php the_content() ?></p>
                            <p><input class="btn" type="button" value="ПОДРОБНЕЕ"></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="line_block">
                <div class="line  fadeIn wow" data-wow-duration="1s"></div>
            </div>

            <div class="dir zoomIn wow" data-wow-duration="1.8s">
                <h2>Основатели <span class="sp1">JS corp.</span></h2>
            </div>

            <div class="col founders">
                <?php
                $posts = get_posts( array(
                    'numberposts' => 0,
                    'category'    => 20,
                    'orderby'     => 'ID',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true
                ));

                foreach ($posts as $post) {
                    setup_postdata($post)
                        ?>
                    <div class="found">
                        <div class="pic_block bounceInLeft wow" data-wow-delay="1.5s">
                            <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                        </div>
                        <div class="t_block zoomIn wow" data-wow-duration="1.5s" data-wow-delay="1s">
                            <h2><?php the_title() ?></h2>
                            <?php the_content() ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>




        </div>

    </div>

<?php
 get_footer();