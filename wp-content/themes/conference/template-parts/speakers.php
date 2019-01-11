<?php $speakers = new WP_Query([
    'post_type' => 'speakers',
    'order' => 'asc'
]);
if ($speakers->have_posts()):
?>

<!-- Speakers -->
<section id="speakers">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title section-title--right">
                    Наши спикеры
                </h2>
                <h1 class="section-subtitle">
                    Наши спикеры
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <?php while ($speakers->have_posts()) : $speakers->the_post(); ?>
                <div class="col-sm-10 col-lg-6">

                    <div class="speaker-card">

                        <div class="speaker-card-img" style="background-image:
                                url(<?php echo get_the_post_thumbnail_url($post->id, 'large'); ?>);"></div>

                        <div class="speaker-card-main">

                            <h3 class="name"><?php echo the_title($post->id); ?></h3>

                            <div class="position">
                                <?php echo get_field('position', $post->ID, 'text_field'); ?>
                            </div>

                        </div>

                    </div>

                </div>

            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php
endif;
wp_reset_postdata();