<?php $certificate = new WP_Query([
    'post_type' => 'page',
    'page_id' => '130',
    'post_status' => 'publish'
]);
if ($certificate->have_posts()):
    ?>
    <!-- Certificate -->
    <section id="certificate">

        <div class="container">
            <div class="row mb-5">
                <div class="col-12 position-static">
                    <h2 class="section-title section-title--right">
                        <?= get_the_title(130); ?>
                    </h2>
                    <h1 class="section-subtitle">
                        <?= get_the_title(130); ?>
                    </h1>
                </div>
            </div>
            <?php while ($certificate->have_posts()) : $certificate->the_post(); ?>
                <div class="row justify-content-start">
                    <div class="col-lg-6 order-lg-2">
                        <img src="<?= get_the_post_thumbnail_url($post->id, 'large'); ?>">
                    </div>

                    <div class="col-lg-6 order-lg-1">
                        <div class="certificate-item">
                            <?php if (have_rows('certificate_desc')): ?>
                                <ul class="custom-list list-unstyled">
                                    <?php while (have_rows('certificate_desc')): the_row(); ?>
                                        <li>
                                            <?= get_sub_field('certificate_desc_text'); ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div class="form-group form-group--btn">
                            <a href="<?php echo get_field('product_site_link', $post->ID); ?>" class="btn btn-light text-white">Подробнее о наших товарах</a>
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>
        </div>
    </section>


<?php
endif;
wp_reset_postdata();