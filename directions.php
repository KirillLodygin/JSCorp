<?php
/*
Template Name: Directions
*/
get_header('directions');
?>
    <div class="grid">
        <div class="content_block">
            <div class="col directions">

                <?php
                $posts = get_posts( array(
                    'numberposts' => 0,
                    'category'    => 21,
                    'orderby'     => 'ID',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true
                ) );

                foreach ($posts as $post){
                    setup_postdata($post);
                    ?>
                    <div class="direction">
                        <div class="picture_block bounceInLeft wow" data-wow-duration="2.2s" data-wow-delay="0.1s">
                            <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                        </div>
                        <div class="text_block bounceInRight wow" data-wow-duration="2.2s" data-wow-delay="0.3s">
                            <h2><?php the_title() ?></h2>
                            <?php the_content() ?>
                        </div>
                    </div>
                    <?php
                }
                ?>


                <div class="line_block">
                    <div class="line  fadeIn wow" data-wow-duration="1s"></div>
                </div>

                <?php
                $post_id_206 = get_post(206, ARRAY_A);
                ?>

                <div class="invite">
                    <h2><?php echo $post_id_206['post_title'];  ?></h2>
                    <p><?php echo $post_id_206['post_content']; ?></p>
                    <input class="btn" type="button" value="У МЕНЯ ЕСТЬ ИДЕЯ!">
                </div>

            </div>
        </div>
    </div>

<?php
get_footer();
