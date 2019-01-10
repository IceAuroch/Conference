<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $app_title ?></title>
    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet"/>
    <link rel="stylesheet" href="fonts/font.css">
    <link rel="stylesheet" href="dist/app.css">
</head>

<body>

    <header id="app-header">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-9 col-sm-3 col-lg-2">
                    <a href="/" class="logo">
                        <img src="images/icon/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-3 col-sm-4 col-lg-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#singup" class="d-none d-sm-flex btn btn-outline-primary scroll-link">
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
                <?php
					foreach ($nav as $key => $value) {
					    echo '<li><a href="/#' . $key . '">' . $value . '</a></li>';
					}
				?>
            </ul>
        </nav>
    </header>

    <main>

           