<div class="custom-modal">
    <div class="singup-card">
        <div class="singup-card-header mb-4">
            <h3 class="title-shadow">
                ЗАПИСАТЬСЯ НА СЕМИНАР
            </h3>
        </div>
        <div class="singup-card-body">
            <form action="<?php echo get_theme_file_uri('mail-send.php'); ?>" method="POST">
                <div class="form-column d-flex flex-column justify-content-center align-items-center">
                    <div class="form-group">
                        <label for="user-name--singup-card" class="label-placeholder">Ваше имя</label>
                        <input type="text" class="form-control" name="name" id="user-name--singup-card"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="user-phone--singup-card" class="label-placeholder">Намер телефона</label>
                        <input type="tel" class="form-control" name="phone" id="user-phone--singup-card"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="user-email--singup-card" class="label-placeholder">Email</label>
                        <input type="email" class="form-control" name="email" id="user-email--singup-card"
                               required>
                    </div>
                    <div class="form-group form-group--btn">
                        <button class="btn btn-light text-white w-100">Записаться</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal-mask">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
</div>