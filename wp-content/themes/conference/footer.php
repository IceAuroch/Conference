</main>

<footer id="app-footer">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-3 col-lg-2 d-flex justify-content-center justify-content-sm-start">
                <a href="<?php echo site_url(); ?>" class="logo">
                    <img src="<?php echo get_theme_file_uri('images/icon/logo/logo-white.png'); ?>" alt="logo">
                </a>
            </div>
            <div class="col-sm-6 col-lg-5 col-xl-4 p-sm-0">
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center">
                    <a href="#singup" class="btn btn-outline-primary scroll-link my-3 my-sm-0">
                        Записаться
                    </a>
                    <div class="footer-copyr">
                        <?php echo date('Y'); ?> Все права защищены
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Script -->
<script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>

<?php wp_footer(); ?>

</body>

</html>