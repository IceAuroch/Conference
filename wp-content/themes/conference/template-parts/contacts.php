<!-- Contacts -->
<section id="contacts">
    <div id="map"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-lg-7 col-xl-5 ml-auto mr-0">
                <div class="contacts-item">
                    <h2 class="section-title section-title--right mb-4">
                        <?= $contacts['title']?>
                    </h2>
                    <ul class="contacts-list list-unstyled">
                        <? foreach ($contacts['items'] as $item) { echo '<li class="contacts-list-item contacts-list-item--' . $item['name'] . '">' . $item['info'] . '</li>';} ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>