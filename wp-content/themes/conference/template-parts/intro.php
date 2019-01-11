<!-- Intro -->
<section id="intro">
    <div class="container h-100 position-relative">
        <div class="row h-100">
            <div class="col-sm-9 col-lg-6 h-100 d-flex flex-column flex-lg-row align-items-center">
                <div class="intro-item">
                    <h1 class="section-subtitle">КОСМЕТОЛОГИЧЕСКАЯ КОНФЕРЕНЦИЯ</h1>
                    <div class="intro-item__subtitle text-primary mb-3 mb-sm-2">
                        КОСМЕТОЛОГИЕСКАЯ КОНФЕРЕНЦИЯ
                    </div>
                    <h2 class="section-title section-title--simple mb-3 mb-sm-4">
                        Международный Конгресс по Косметологии
                    </h2>
                    <div class="intro-item-description d-flex justify-contetn-center align-items-start">
                        <div class="decor-line"></div>
                        <p>

                        </p>
                    </div>
                </div>
                <div class="intro-description">
                    <div class="intro-description-item d-flex align-items-center mb-3">
                        <div class="title mr-3">Дата проведения:<span class="text"><?= $data ?></span></div>
                        <div class="title">Время:<span class="text"><?= $time ?></span></div>
                    </div>
                    <div class="intro-description-item">
                        <div class="title">Место проведения<span class="text"><?= $place ?></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="singup-card">
            <div class="singup-card-header mb-4">
                <h3 class="title-shadow">
                    ЗАПИСАТЬСЯ НА КОНФЕРЕНЦИЮ
                </h3>
            </div>
            <div class="singup-card-body">
                <form action="<?php echo get_theme_file_uri('mail-send.php'); ?>" method="POST">
                    <div class="form-column d-flex flex-column justify-content-center align-items-center">
                        <div class="form-group">
                            <label for="user-name--singup-card" class="label-placeholder">Ваше имя</label>
                            <input type="text" class="form-control" name="name" id="user-name--singup-card" required>
                        </div>
                        <div class="form-group">
                            <label for="user-phone--singup-card" class="label-placeholder">Намер телефона</label>
                            <input type="tel" class="form-control" name="phone" id="user-phone--singup-card" required>
                        </div>
                        <div class="form-group">
                            <label for="user-email--singup-card" class="label-placeholder">Email</label>
                            <input type="email" class="form-control" name="email" id="user-email--singup-card" required>
                        </div>
                        <div class="form-group form-group--btn">
                            <button class="btn btn-light text-white w-100">Записаться</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>