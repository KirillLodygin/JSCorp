<?php
/*
Template Name: Pioneers
*/

get_header('pioneers');
?>
    <div class="grid">
        <div class="content_block">
            <?php
            $post_id_230 = get_post(230, ARRAY_A);
            $thumb = get_the_post_thumbnail( 230, 'full' );
            ?>
            <div class="col pics_and_ts">
                <div class="picture_and_text pioneers">
                    <div class="text_block bounceInRight wow" data-wow-duration="2.2s" data-wow-delay="0.3s">
                        <h2><?php echo $post_id_230['post_title'];  ?></h2>
                        <?php echo $post_id_230['post_content']; ?>
                    </div>

                    <div class="picture_block bounceInLeft wow" data-wow-duration="2.2s" data-wow-delay="0.1s">
                        <?php echo $thumb?>
                    </div>
                </div>
            </div>

            <?php
            $posts = get_posts( array(
                'numberposts' => 0,
                'category'    => 26,
                'orderby'     => 'ID',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true
            ) );

            foreach ($posts as $post){
                setup_postdata($post);
                ?>
                <div class="col first_line small">
                    <div class="member_photo bounceIn wow" data-wow-duration="4s" data-wow-delay="0.3s">
                        <div class="swing">
                            <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                        </div>
                    </div>
                    <div class="member_name zoomIn wow" data-wow-duration="3s" data-wow-delay="0.2s">
                        <p><?php the_content() ?></p>
                    </div>
                </div>
                <?php
            }
            ?>

            <?php
            $posts = get_posts( array(
                'numberposts' => 0,
                'category'    => 27,
                'orderby'     => 'ID',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true
            ) );

            foreach ($posts as $post){
                setup_postdata($post);
                ?>
                <div class="col second_line small">
                    <div class="member_photo bounceIn wow" data-wow-duration="4s" data-wow-delay="0.3s">
                        <div class="swing">
                            <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                        </div>
                    </div>
                    <div class="member_name zoomIn wow" data-wow-duration="3s" data-wow-delay="0.2s">
                        <p><?php the_content() ?></p>
                    </div>
                </div>
                <?php
            }
            ?>

            <div class="col pics_and_ts">

                <?php
                $posts = get_posts( array(
                    'numberposts' => 0,
                    'category'    => 28,
                    'orderby'     => 'ID',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true
                ) );

                foreach ($posts as $post){
                    setup_postdata($post);
                    ?>
                    <div class="picture_and_text">
                        <div class="picture_block bounceInLeft wow" data-wow-duration="2.2s" data-wow-delay="0.1s">
                            <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                        </div>

                        <div class="text_block bounceInRight wow" data-wow-duration="2.2s" data-wow-delay="0.3s">
                            <h2><span class="sp1"><?php the_title() ?></span></h2>
                            <?php the_content() ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="line_block">
                <div class="line  fadeIn wow" data-wow-duration="2.5s" data-wow-delay="0.6s"></div>
            </div>

            <div class="invite fadeIn wow" data-wow-duration="3s" data-wow-delay="0.3s">
                <?php
                $post_id_256 = get_post(256, ARRAY_A);
                ?>
                <h2>
                    <span class="sp1"><?php echo $post_id_256['post_title'];  ?></span>
                </h2>

                <?php echo $post_id_256['post_content']; ?>
            </div>

        </div>
    </div>

<?php
get_footer();
