<!-- Program -->
<section id="program">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-lg-8">
                <h2 class="section-title section-title--left mb-5 d-inline-block">
                    Программа
                </h2>
                <h1 class="section-subtitle">
                    Программа
                </h1>
                <div class="program-tabs">
                    <div class="program-tabs-header">
                        <ul class="program-tabs-header-list list-unstyled d-flex flex-column flex-sm-row">
                            <? foreach ($program['times'] as $time) { echo '<li>' . $time . '</li>';} ?>
                        </ul>
                    </div>
                    <div class="program-tabs-body">
                        <? 
                        foreach ($program['items'] as $item) 
                        { 
                            echo '<div class="program-tabs-body-item">';

                            foreach($item as $val)
                            {
                                echo '<div class="program-tabs-body-item-row">' . '<div class="time">' . $val['time'] . '</div>'
                                . 
                                '<div class="text">' . $val['text'] . '</div>' . '</div>';
                            }

                            echo '</div>';
                        } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="program-footer">
            <div class="row align-items-center">
                <div class="col-sm-7">
                    <div class="program-btn">
                        <a href="#singup" class="btn btn-primary scroll-link">Записаться</a>
                    </div>
                    <div class="decor-line"></div>
                </div>
                <div class="col-sm-5 mt-3 mt-sm-0">
                    <div class="d-flex align-items-center">
                        <div class="program-footer__text mr-2 mr-xl-3 text-white">
                            Запишись и получи 
                        </div>
                        <h3 class="program-footer__present text-white bg-primary mb-0 text-uppercase">
                            Подарок
                        </h3>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>