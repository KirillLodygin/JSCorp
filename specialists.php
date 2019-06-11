<?php
/*
Template Name: Specialists
*/

get_header('specialists');
?>
    <div class="grid">
        <div class="content_block">

            <div class="col pics_and_ts">
                <div class="picture_and_text">
                    <?php
                    $post_id_268 = get_post(268, ARRAY_A);
                    $thumb = get_the_post_thumbnail( 268, 'full' );
                    ?>
                    <div class="text_block bounceInRight wow" data-wow-duration="2.2s" data-wow-delay="0.3s">
                        <h2><?php echo $post_id_268['post_title'];  ?></h2>
                        <?php echo $post_id_268['post_content']; ?>
                    </div>
                    <div class="picture_block bounceInLeft wow" data-wow-duration="2.2s" data-wow-delay="0.1s">
                        <?php echo $thumb?>
                    </div>
                </div>
            </div>

            <?php
            $posts = get_posts( array(
                'numberposts' => 0,
                'category'    => 32,
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

            <div class="col goals zoomIn wow" data-wow-duration="1.6s">
                <div class="col">
                    <div class="recruitment">
                        <h1>
                            Не забывайте!
                        </h1>
                        <h4>
                            Каждому проекту нужны именно ваши навыки!
                        </h4>
                        <p>
                            Мы ищем молодых специалистов следующих направлений:
                        </p>
                    </div>

                    <div class="vacancy">

                        <?php
                        $posts = get_posts( array(
                            'numberposts' => 0,
                            'category'    => 31,
                            'orderby'     => 'ID',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true
                        ) );

                        foreach ($posts as $post){
                            setup_postdata($post);
                            ?>
                            <div class="col first_line small">
                                <div class="col directions" >
                                    <p><?php the_content() ?></p>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col pics_and_ts">
                <div class="picture_and_text">
                    <?php
                    $post_id_280 = get_post(280, ARRAY_A);
                    $thumb = get_the_post_thumbnail( 280, 'full' );
                    ?>
                    <div class="picture_block bounceInLeft wow" data-wow-duration="2.2s" data-wow-delay="0.1s">
                        <?php echo $thumb?>
                    </div>

                    <div class="text_block bounceInRight wow" data-wow-duration="2.2s" data-wow-delay="0.3s">
                        <h2><?php echo $post_id_280['post_title'];  ?></h2>
                        <?php echo $post_id_280['post_content']; ?>
                    </div>
                </div>
            </div>

            <div class="founders jsc zoomIn wow" data-wow-duration="1.2s">
                <h2>
                    Истории молодых специалистов.
                </h2>
                <h4>
                    Принявших участие в работе над нашими проектами.
                </h4>
            </div>

            <div class="col pics_and_ts">
                <div class="picture_and_text">
                    <?php
                    $post_id_284 = get_post(284, ARRAY_A);
                    $thumb = get_the_post_thumbnail( 284, 'full' );
                    ?>
                    <div class="pic_block bounceInLeft wow" data-wow-delay="0.5s">
                        <?php echo $thumb?>
                    </div>
                    <div class="t_block zoomIn wow" data-wow-duration="1.5s">
                        <h2<?php echo $post_id_284['post_title'];  ?></h2>
                        <?php echo $post_id_284['post_content']; ?>
                    </div>
                </div>
            </div>

            <div class="line_block">
                <div class="line  fadeIn wow" data-wow-duration="1s"></div>
            </div>

            <div class="invite">
                <h2>
                    Присоединяйтесь к команде!
                </h2>

                <p>
                    Вы не нашли свою специализацию в списке или вы еще не решили по какому пути идти?<br/>
                    Напишите нам. Мы обязательно вам ответим!
                </p>
                <p><input class="btn" type="button" value="ХОЧУ В КОМАНДУ!"></p>
            </div>

        </div>
    </div>

<?php
get_footer();
