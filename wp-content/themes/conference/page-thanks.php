<?php
/*
Template Name: template page thanks
Template Post Type: page
*/

get_header('secondary');
$spasibo = new WP_Query([
    'post_type' => 'page',
    'post_id' => '48'

]);
if ($spasibo->have_posts()):

    ?>

    <!-- Thaks-page -->
    <section id="thanks-page">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-sm-6 col-lg-4 mx-auto">
                    <div class="thanks-page-item">
                        <h1 class="thanks-page-item__title text-dark">
                            <?php echo get_the_title(48); ?>
                        </h1>

                        <?php while ($spasibo->have_posts()) : $spasibo->the_post(); ?>

                            <div class="thanks-page-item__text">
                                <?php echo get_the_content($post->id); ?>
                            </div>

                        <?php endwhile; ?>

                        <a href="<?php echo site_url(); ?>" class="btn btn-primary">
                            На главную
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
endif;
wp_reset_postdata();
get_footer('secondary');