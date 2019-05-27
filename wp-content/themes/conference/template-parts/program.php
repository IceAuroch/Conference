<?php $program = new WP_Query([
    'post_type' => 'page',
    'post_id' => '53'
]); ?>

<section id="download-list" class="download-btn mb-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <a href="#" class="btn btn-outline-primary download-list">
                    Скачать чек-лист "Пошаговый алгоритм педикюра"
                </a>
            </div>
        </div>
    </div>
</section>

<?php if ($program->have_posts()):
    ?>

    <!-- Program -->
    <section id="program">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-lg-6">
                    <h2 class="section-title section-title--right ">
                        <?php echo get_the_title(53); ?>
                    </h2>
                    <h1 class="section-subtitle">
                        <?php echo get_the_title(53); ?>
                    </h1>
                    <div class="program-tabs">
                        <div class="program-tabs-body">
                            <div class="program-tabs-body-item">
                                <?php while ($program->have_posts()): $program->the_post();
                                    if (have_rows('plane')): while (have_rows('plane')): the_row(); ?>
                                        <div class="program-tabs-body-item-row">
                                            <div class="text">
                                                <?php echo get_sub_field('program_desc'); ?>
                                            </div>
                                        </div>
                                    <?php endwhile; endif; endwhile; ?>
                            </div>
                        </div>
                    </div>
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
                            <?php while ($program->have_posts()): $program->the_post(); ?>
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