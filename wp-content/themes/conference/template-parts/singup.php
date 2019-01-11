<?php $singup = new WP_Query([
    'post_type' => 'page',
    'post_id' => '13'
]);
if ($singup->have_posts()):
    ?>

<!-- Singup -->
<section id="singup">
    <div class="container">
        <div class="singup-header">
            <div class="row">
                <div class="col-sm-11 col-lg-7">
                    <div class="singup-header-item d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                        <h3 class="title-shadow mb-4 mb-sm-0 mr-3">
                            <?php echo get_the_title(13); ?>
                        </h3>
                        <div class="price">
                            <span class="text">
                                Цена участия
                            </span>
                            <h3 class="value ml-2">
                                <?php echo get_post_meta('13', 'price', true); ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="/mail-send.php" method="POST">
                    <div class="form-row d-flex flex-column flex-sm-row justify-content-between align-items-center">
                        <div class="form-group">
                            <label for="user-name--sinup" class="label-placeholder">Ваше имя</label>
                            <input type="text" class="form-control" name="name" id="user-name--sinup" required>
                        </div>
                        <div class="form-group">
                            <label for="user-phone--sinup" class="label-placeholder">Намер телефона</label>
                            <input type="tel" class="form-control" name="phone" id="user-phone--sinup" required>
                        </div>
                        <div class="form-group">
                            <label for="user-email--sinup" class="label-placeholder">Email</label>
                            <input type="email" class="form-control" name="email" id="user-email--sinup" required>
                        </div>
                        <div class="form-group form-group--btn">
                            <button class="btn btn-light text-white">Записаться</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
endif;
wp_reset_postdata();