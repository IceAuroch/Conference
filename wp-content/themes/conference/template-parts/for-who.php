<?php $forwho = new WP_Query([
    'post_type' => 'page',
    'page_id' => '35'
]);
if ($forwho->have_posts()):
    ?>
    <!-- For-who -->
    <section id="for-who">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 position-static">
                    <h2 class="section-title section-title--right">
                        <?php echo get_the_title(35); ?>
                    </h2>
                    <h1 class="section-subtitle">
                        <?php echo get_the_title(35); ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <?php while ($forwho->have_posts()) : $forwho->the_post(); ?>
                <div class="row justify-content-start">
                    <div class="col-sm-6 p-sm-0">
                        <div class="for-who-img" style="background-image:
                                url(<?php echo get_the_post_thumbnail_url($post->id, 'large'); ?>);"></div>
                    </div>
                    <div class="col-sm-5 col-xl-4 ml-sm-3 ml-xl-5">
                        <div class="for-who-item">
                            <?php if (have_rows('paragraphs')): ?>
                                <ul class="custom-list list-unstyled">
                                    <?php while (have_rows('paragraphs')): the_row(); ?>
                                        <li>
                                            <?php echo get_sub_field('paragraph'); ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

<?php
endif;
wp_reset_postdata();