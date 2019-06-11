<?php
/*
Template Name: Team
*/
get_header('team');
?>
    <div class="grid">

        <div class="content_block">
            <?php
            $posts = get_posts( array(
                'numberposts' => 0,
                'category'    => 23,
                'orderby'     => 'ID',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true
            ) );

            foreach ($posts as $post) {
                setup_postdata($post);
                ?>
             <div class="col first_line">
                 <div class="member_photo bounceIn wow" data-wow-duration="4s" data-wow-delay="0.3s">
                     <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                 </div>

                 <div class="member_name zoomIn wow" data-wow-duration="3s" data-wow-delay="0.2s">
                     <div class="name">
                         <?php the_title() ?>
                     </div>
                     <?php the_content() ?>
                 </div>
             </div>
                <?php
            }
                ?>

            <?php
            $posts = get_posts( array(
                'numberposts' => 0,
                'category'    => 24,
                'orderby'     => 'ID',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true
            ) );

            foreach ($posts as $post) {
                setup_postdata($post);
                ?>
                <div class="col second_line">
                    <div class="member_photo bounceIn wow" data-wow-duration="2s" data-wow-delay="0.5s">
                        <?php echo get_the_post_thumbnail($post->ID, 'full');?>
                    </div>

                    <div class="member_name zoomIn wow" data-wow-duration="3s" data-wow-delay="0.2s">
                        <div class="name">
                            <?php the_title() ?>
                        </div>
                        <?php the_content() ?>
                    </div>
                </div>

                <?php
            }
            ?>

        </div>

    </div>

<?php
get_footer();
