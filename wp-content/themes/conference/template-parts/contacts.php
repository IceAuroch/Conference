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
                            <?php echo get_the_title(19); ?>
                        </h2>
                        <ul class="contacts-list list-unstyled">
                            <li class="contacts-list-item contacts-list-item--phone">
                                <a href="tel:<?php echo get_post_meta('19', 'phone', true); ?>">
                                    <?php echo get_post_meta('19', 'phone', true); ?>
                                </a>
                            </li>
                            <li class="contacts-list-item contacts-list-item--email">
                                <a href="mailto:<?php echo get_post_meta('19', 'email', true); ?>">
                                    <?php echo get_post_meta('19', 'email', true); ?>
                                </a>
                            </li>
                            <li class="contacts-list-item contacts-list-item--place">
                                <?php echo get_post_meta('19', 'place', true); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
endif;
wp_reset_postdata();