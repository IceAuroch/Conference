<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet"/>

</head>

<body>


<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

    <symbol id="fb-icon" viewBox="0 0 16 16">
        <path d="M2.34375 16H7.5625V10.3125H5.6875V8.4375H7.5625V6.09375C7.5625 4.80139 8.61389 3.75 9.90625 3.75H12.25V5.625H10.375C9.85803 5.625 9.4375 6.04553 9.4375 6.5625V8.4375H12.1654L11.8529 10.3125H9.4375V16H13.6562C14.9486 16 16 14.9486 16 13.6562V2.34375C16 1.05139 14.9486 0 13.6562 0H2.34375C1.05139 0 0 1.05139 0 2.34375V13.6562C0 14.9486 1.05139 16 2.34375 16ZM0.9375 2.34375C0.9375 1.56836 1.56836 0.9375 2.34375 0.9375H13.6562C14.4316 0.9375 15.0625 1.56836 15.0625 2.34375V13.6562C15.0625 14.4316 14.4316 15.0625 13.6562 15.0625H10.375V11.25H12.6471L13.2721 7.5H10.375V6.5625H13.1875V2.8125H9.90625C8.09692 2.8125 6.625 4.28442 6.625 6.09375V7.5H4.75V11.25H6.625V15.0625H2.34375C1.56836 15.0625 0.9375 14.4316 0.9375 13.6562V2.34375Z"/>
    </symbol>

    <symbol id="insta-icon" viewBox="0 0 16 16">
        <path d="M11.6689 0H4.33105C1.94287 0 0 1.94287 0 4.33105V11.669C0 14.0571 1.94287 16 4.33105 16H11.669C14.0571 16 16 14.0571 16 11.669V4.33105C16 1.94287 14.0571 0 11.6689 0V0ZM15.062 11.669C15.062 13.5399 13.5399 15.062 11.6689 15.062H4.33105C2.46008 15.062 0.937987 13.5399 0.937987 11.669V4.33105C0.937987 2.46008 2.46008 0.937987 4.33105 0.937987H11.669C13.5399 0.937987 15.062 2.46008 15.062 4.33105V11.669Z"/>
        <path d="M7.99987 3.62512C5.58752 3.62512 3.625 5.58764 3.625 7.99999C3.625 10.4123 5.58752 12.3749 7.99987 12.3749C10.4122 12.3749 12.3747 10.4123 12.3747 7.99999C12.3747 5.58764 10.4122 3.62512 7.99987 3.62512V3.62512ZM7.99987 11.4369C6.10485 11.4369 4.56299 9.89513 4.56299 7.99999C4.56299 6.10498 6.10485 4.56311 7.99987 4.56311C9.89501 4.56311 11.4368 6.10498 11.4368 7.99999C11.4368 9.89513 9.89501 11.4369 7.99987 11.4369V11.4369Z"/>
        <path d="M12.4797 2.07141C11.7668 2.07141 11.187 2.65137 11.187 3.36413C11.187 4.07702 11.7668 4.65698 12.4797 4.65698C13.1926 4.65698 13.7726 4.07702 13.7726 3.36413C13.7726 2.65124 13.1926 2.07141 12.4797 2.07141ZM12.4797 3.71887C12.2842 3.71887 12.125 3.55969 12.125 3.36413C12.125 3.16845 12.2842 3.0094 12.4797 3.0094C12.6754 3.0094 12.8346 3.16845 12.8346 3.36413C12.8346 3.55969 12.6754 3.71887 12.4797 3.71887Z"/>
    </symbol>    


    <symbol id="yt-icon" viewBox="0 0 20 20" >
        <path d="M2.92969 17.6172H17.0703C18.6858 17.6172 20 16.3029 20 14.6875V5.3125C20 3.69705 18.6858 2.38281 17.0703 2.38281H2.92969C1.31424 2.38281 0 3.69705 0 5.3125V14.6875C0 16.3029 1.31424 17.6172 2.92969 17.6172ZM1.17188 5.3125C1.17188 4.34326 1.96045 3.55469 2.92969 3.55469H17.0703C18.0396 3.55469 18.8281 4.34326 18.8281 5.3125V14.6875C18.8281 15.6567 18.0396 16.4453 17.0703 16.4453H2.92969C1.96045 16.4453 1.17188 15.6567 1.17188 14.6875V5.3125Z"/>
        <path d="M7.07031 6.07452V14.0393L14.1211 9.99161L7.07031 6.07452ZM8.24219 8.0661L11.7383 10.0084L8.24219 12.0154V8.0661Z"/>
    </symbol>  
        
</svg>

    <header id="app-header">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-9 col-sm-3 col-lg-2">
                    <a href="<?php echo site_url(); ?>" class="logo">
                        <img src="<?php echo get_theme_file_uri('images/icon/logo/logo.png'); ?>" alt="logo">
                    </a>
                </div>
                <div class="col col-sm-5 col-lg-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="<?php echo get_theme_mod('facebook'); ?>" class="header-social-icon mr-4">
                            <svg width="25" height="25">
                                <use xlink:href="#fb-icon"></use>
                            </svg>
                        </a>

                        <a href="<?php echo get_theme_mod('Instagram'); ?>" class="header-social-icon mr-4">
                            <svg width="25" height="25">
                                <use xlink:href="#insta-icon"></use>
                            </svg>
                        </a>

                        <a href="<?php echo get_theme_mod('Youtube'); ?>" class="header-social-icon mr-auto mr-md-4">
                            <svg width="25" height="25">
                                <use xlink:href="#yt-icon"></use>
                            </svg>
                        </a>
                        <a href="<?php echo site_url(); ?>#singup" class="d-none d-sm-flex btn btn-outline-primary">
                            Записаться
                        </a>
                        <div class="burger-menu d-flex flex-column justify-content-center align-items-center">
                            <div class="line line--top"></div>
                            <div class="line line--middle"></div>
                            <div class="line line--bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="menu">
            <ul class="menu-list list-unstyled">
                <li><a href="<?php echo site_url(); ?>#for-who">Для кого?</a></li>
                <li><a href="<?php echo site_url(); ?>#program">Программа</a></li>
                <li><a href="<?php echo site_url(); ?>#speakers">Наши спикеры</a></li>
                <li><a href="<?php echo site_url(); ?>#singup">Записаться</a></li>
                <li><a href="<?php echo site_url(); ?>#contacts">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <main>

           