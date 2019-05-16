<?php $contact = new WP_Query([
    'post_type' => 'page',
    'post_id' => '19'
]);
if ($contact->have_posts()):
    ?>

    <!-- Contacts -->
    <section id="contacts">
        <div id="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-lg-7 col-xl-5 ml-auto mr-0">
                    <div class="contacts-item">
                        <h2 class="section-title section-title--right mb-4">
                            Контакты
                        </h2>
                        <ul class="contacts-list list-unstyled">
                            <?php if (get_theme_mod('phone1')): ?>
                                <li class="contacts-list-item contacts-list-item--phone">
                                    <a href="tel:<?= get_theme_mod('phone1'); ?>">
                                        <?= get_theme_mod('phone1'); ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (get_theme_mod('phone2')): ?>
                                <li class="contacts-list-item contacts-list-item--phone">
                                    <a href="tel:<?= get_theme_mod('phone2'); ?>">
                                        <?= get_theme_mod('phone2'); ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (get_theme_mod('phone3')): ?>
                                <li class="contacts-list-item contacts-list-item--phone">
                                    <a href="tel:<?= get_theme_mod('phone3'); ?>">
                                        <?= get_theme_mod('phone3'); ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <li class="contacts-list-item contacts-list-item--email">
                                <a href="mailto:<?= get_theme_mod('email'); ?>">
                                    <?= get_theme_mod('email'); ?>
                                </a>
                            </li>
                            <li class="contacts-list-item contacts-list-item--place">
                                <?= get_theme_mod('place'); ?>
                            </li>
                        </ul>
                        <div class="contact-social-icon">
                            <a href="<?php echo get_theme_mod('facebook'); ?>" class="contact-social-icon__item mr-4">
                                <svg width="20" height="20">
                                    <use xlink:href="#fb-icon"></use>
                                </svg>
                            </a>

                            <a href="<?php echo get_theme_mod('Instagram'); ?>" class="contact-social-icon__item mr-4">
                                <svg width="20" height="20">
                                    <use xlink:href="#insta-icon"></use>
                                </svg>
                            </a>

                            <a href="<?php echo get_theme_mod('Youtube'); ?>" class="contact-social-icon__item mr-auto mr-md-4">
                                <svg width="20" height="20">
                                    <use xlink:href="#yt-icon"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
endif;
wp_reset_postdata();