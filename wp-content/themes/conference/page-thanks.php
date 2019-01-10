<?php

require_once('store.php');

require_once('views/base/header-secondary.php');

?>

<!-- Thaks-page -->
<section id="thanks-page">
    <div class="container h-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="col-sm-6 col-lg-4 mx-auto">
                <div class="thanks-page-item">
                    <h1 class="thanks-page-item__title text-dark">
                        Спасибо!
                    </h1>
                    <div class="thanks-page-item__text">
                        Наш менеджер с вами свяжется
                    </div>
                    <a href="/" class="btn btn-primary">
                        На главную
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

require_once('views/base/footer-secondary.php');