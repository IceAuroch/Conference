<?php $pro = new WP_Query([
    'post_type' => 'page',
    'post_id' => '53'
]);
if ($pro->have_posts()):
    ?>


    <!-- Program -->
    <section id="program">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-lg-8">
                    <h2 class="section-title section-title--right ">
                        <?php echo get_the_title(53); ?>
                    </h2>
                    <h1 class="section-subtitle">
                        <?php echo get_the_title(53); ?>
                    </h1>

                    <?php $program = new WP_Query([
                        'post_type' => 'program',
                        'order' => 'asc',
                    ]);
                    if ($program->have_posts()):
                        ?>

                        <div class="program-tabs">
                            <div class="program-tabs-body">
                                <?php while ($program->have_posts()): $program->the_post(); ?>

                                    <div class="program-tabs-body-item">
                                        <?php if (have_rows('plane')): while (have_rows('plane')): the_row(); ?>
                                            <div class="program-tabs-body-item-row">
                                                <div class="text">
                                                    <?php echo get_sub_field('program_desc'); ?>
                                                </div>
                                            </div>
                                        <?php endwhile; endif; ?>

                                    </div>

                                <?php endwhile; ?>
                            </div>

                        </div>
                    <?php endif;
                    wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </section>

    <section class="program-footer">
        <div class="container">
            <div class="row align-items-center">

                    <div class="col-sm-8 mt-3 mt-sm-0">
                        <div class="d-flex align-items-center">
                            <div class="program-footer__text mr-2 mr-xl-3 text-white">
                                <?php while ($pro->have_posts()): $pro->the_post(); ?>
                                    <?php echo get_field('seminar_descrip'); ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>

                <div class="col-sm-4">
                    <div class="program-btn">
                        <a href="#" class="btn btn-primary open-singup">Записаться</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php
endif;
wp_reset_postdata();