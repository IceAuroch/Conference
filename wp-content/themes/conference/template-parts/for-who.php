<!-- For-who -->
<section id="for-who">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 position-static">
                <h2 class="section-title section-title--right">
                    <?= $for_who['title'] ?>
                </h2>
                <h1 class="section-subtitle">
                    <?= $for_who['title'] ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-start">
            <div class="col-sm-6 p-sm-0">
                <div class="for-who-img" style="background-image: url('<?= $for_who['image']?>');"></div>
            </div>
            <div class="col-sm-5 col-xl-4 ml-sm-3 ml-xl-5">
                <div class="for-who-item">
                    <?= $for_who['list'] ?>
                </div>
            </div>
        </div>
    </div>
</section>